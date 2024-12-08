<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class HomePageController extends Controller
{
    //All Contact
    public function contact()
    {
        return view('frontend.pages.contact');
    }

    //contactStore
    public function contactStore(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:150',
            'email' => 'nullable|email|max:150',
            'phone' => 'nullable|string|max:20',
            'subject' => 'nullable|string',
            'message' => 'required|string|max:1200',
            // 'g-recaptcha-response' => 'required|captcha', // Validate reCAPTCHA
        ]);

        // If validation fails, redirect back with errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Start a database transaction
        DB::beginTransaction();

        try {
            // Generate a unique message code
            $typePrefix = 'MSG'; // Adjust this as needed
            $today = date('dmy');
            $lastCode = Contact::where('code', 'like', $typePrefix . '-' . $today . '%')
                ->orderBy('id', 'desc')
                ->first();

            $newNumber = $lastCode ? (int) explode('-', $lastCode->code)[2] + 1 : 1;
            $code = $typePrefix . '-' . $today . '-' . $newNumber;

            // Create a new contact object
            $contact = new Contact([
                'code' => $code,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'subject' => $request->subject,
                'message' => $request->message,
            ]);

            // Save the contact record
            $contact->save();

            // Commit the transaction
            DB::commit();

            // Redirect back with a success message
            return redirect()->back()->with('success', 'Thank you! We have received your message and will contact you soon.');
        } catch (\Illuminate\Database\QueryException $e) {
            // Catch database-related exceptions specifically
            DB::rollBack();
            Log::error('Database Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'There was an issue saving your message. Please try again later.');
        } catch (\Exception $e) {
            // Catch all other general exceptions
            DB::rollBack();
            Log::error('General Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'There was an issue processing your request. Please try again later.');
        }
    }
}
