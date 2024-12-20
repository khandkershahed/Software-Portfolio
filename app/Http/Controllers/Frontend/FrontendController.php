<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Term;
use App\Models\Query;
use App\Models\AboutUs;
use App\Models\Contact;
use App\Models\Privacy;
use App\Models\Project;
use App\Models\Service;
use App\Models\Category;
use App\Models\HomePage;
use App\Models\PageBanner;
use App\Models\CompanyData;
use App\Models\CustomBuild;
use App\Models\ProjectQuery;
use Illuminate\Http\Request;
use App\Models\CompanyClient;
use App\Models\ProjectGallery;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\PricingPlan;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{
    // Home
    // public function home()
    // {
    //     $banner = PageBanner::where('status', 'active')->where('page_name', 'homeslider')->get();
    //     $item = HomePage::latest('id')->first();
    //     $company_datas = CompanyData::where('status', 'active')->latest()->get();
    //     $company_clients = CompanyClient::where('status', 'active')->latest()->get();
    //     $services = Service::where('status', 'active')->latest()->get();

    //     $catgorys = Category::where('status', 'active')->where('parent_id', null)->latest()->get();

    //     $categoryOne = Category::with('children')->where('status', 'active')->where('parent_id', null)->inRandomOrder()->first();

    //     $categoryTwo = Category::with('children')->where('status', 'active')->where('parent_id', null)->where('id', '!=', $categoryOne->id)->inRandomOrder()->first();

    //     $categoryThree = Category::with('children')->where('status', 'active')->where('parent_id', null)->where('id', '!=', $categoryOne->id)->where('id', '!=', $categoryTwo->id)->inRandomOrder()->first();

    //     return view('frontend.pages.home', compact('banner', 'item', 'company_datas', 'company_clients', 'services', 'catgorys', 'categoryOne', 'categoryTwo', 'categoryThree'));
    // }

    public function home()
    {
        $banner = PageBanner::where('status', 'active')->where('page_name', 'homeslider')->get();
        $item = HomePage::latest('id')->first();
        $company_datas = CompanyData::where('status', 'active')->latest()->get();
        $company_clients = CompanyClient::where('status', 'active')->latest()->get();
        $services = Service::where('status', 'active')->latest()->get();

        $catgorys = Category::where('status', 'active')->where('parent_id', null)->latest()->get();

        // Fetch the categories safely and ensure we don't get null values
        $categoryOne = Category::with('children')
            ->where('status', 'active')
            ->where('parent_id', null)
            ->inRandomOrder()
            ->first();

        // Set a default category if none is found
        if (!$categoryOne) {
            $categoryOne = new Category();
            $categoryOne->name = 'Default Category One';
            $categoryOne->description = 'Default Description';
            $categoryOne->image = null;
        }

        $categoryTwo = Category::with('children')
            ->where('status', 'active')
            ->where('parent_id', null)
            ->where('id', '!=', $categoryOne->id)
            ->inRandomOrder()
            ->first();

        if (!$categoryTwo) {
            $categoryTwo = new Category();
            $categoryTwo->name = 'Default Category Two';
            $categoryTwo->description = 'Default Description';
            $categoryTwo->image = null;
        }

        $categoryThree = Category::with('children')
            ->where('status', 'active')
            ->where('parent_id', null)
            ->where('id', '!=', $categoryOne->id)
            ->where('id', '!=', $categoryTwo->id)
            ->inRandomOrder()
            ->first();

        if (!$categoryThree) {
            $categoryThree = new Category();
            $categoryThree->name = 'Default Category Three';
            $categoryThree->description = 'Default Description';
            $categoryThree->image = null;
        }

        return view('frontend.pages.home', compact('banner', 'item', 'company_datas', 'company_clients', 'services', 'catgorys', 'categoryOne', 'categoryTwo', 'categoryThree'));
    }


    //All Project
    public function project()
    {
        $company_clients = CompanyClient::where('status', 'active')->latest()->get();
        $item = HomePage::latest('id')->first();

        $categorys = Category::where('status', 'active')->where('parent_id', null)->latest()->get();

        return view('frontend.pages.project', compact('company_clients', 'item', 'categorys'));
    }

    //projectDetails 
    public function projectDetails($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();
        $allprojects = Project::where('status', 'active')->where('id', '!=', $project->id)->latest()->get();


        $galleryHomePages = ProjectGallery::where('status', 'active')->where('name', 'home_page')->where('project_id', $project->id)->get();
        $galleryAdmins = ProjectGallery::where('status', 'active')->where('name', 'back_admin')->where('project_id', $project->id)->get();
        $galleryAuthentications = ProjectGallery::where('status', 'active')->where('name', 'authentication')->where('project_id', $project->id)->get();

        $company_clients = CompanyClient::where('status', 'active')->latest()->get();
        $item = HomePage::latest('id')->first();

        return view('frontend.pages.project_details', compact('project', 'company_clients', 'item', 'allprojects', 'galleryHomePages', 'galleryAuthentications', 'galleryAdmins'));
    }
    //user Project Query
    public function userProjectQuery(Request $request)
    {
        // Create the event in the database
        ProjectQuery::create([

            'project_id'       => $request->project_id,
            'name'       => $request->name,
            'email'       => $request->email,

            'phone'       => $request->phone,
            'message'       => $request->message,

            'complete_template'       => $request->complete_template,
        ]);

        return redirect()->back()->with('success', 'Project Query Send Successfully!');
    }

    //All About
    public function about()
    {
        $about = AboutUs::latest('id')->first();
        $company_datas = CompanyData::where('status', 'active')->latest()->get();
        return view('frontend.pages.about', compact('about', 'company_datas'));
    }

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

    //All Query
    public function query()
    {
        $catgorys = Category::where('status', 'active')->where('parent_id', null)->latest()->get();
        return view('frontend.pages.query_page', compact('catgorys'));
    }

    //queryStore
    public function queryStore(Request $request)
    {

        $uploadedFiles = [];

        // Array of files to upload
        $files = [
            'demo_file' => $request->file('demo_file'),
        ];

        foreach ($files as $key => $file) {
            if (!empty($file)) {
                $filePath = 'query/' . $key;
                $uploadedFiles[$key] = customUpload($file, $filePath);
                if ($uploadedFiles[$key]['status'] === 0) {
                    return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                }
            } else {
                $uploadedFiles[$key] = ['status' => 0];
            }
        }

        // Create the event in the database
        Query::create([

            'category_id'       => $request->category_id,
            'frontend'       => $request->frontend,
            'backend'       => $request->backend,
            'database'   => $request->database,
            'demo_site' => $request->demo_site,
            'demo_file' => $request->demo_file,
            'name' => $request->name,
            'phone'      => $request->phone,
            'email'      => $request->email,
            'message'      => $request->message,

            'demo_file'       => $uploadedFiles['demo_file']['status'] == 1 ? $uploadedFiles['demo_file']['file_path'] : null,
        ]);

        return redirect()->back()->with('success', 'Sent Message Successfully!');
    }

    //All term
    public function term()
    {
        $term = Term::where('status', 'active')->latest('id')->first();
        return view('frontend.pages.term', compact('term'));
    }

    //All privacy
    public function privacy()
    {
        $privacy = Privacy::where('status', 'active')->latest('id')->first();
        return view('frontend.pages.privacy', compact('privacy'));
    }

    //pricing
    public function pricing()
    {
        $data = [
            'price_plans' => PricingPlan::where('status', 'active')->take(2)->latest()->get(),

            'lastprice_plans' => PricingPlan::where('status', 'active')->take(1)->get(),

            'company_clients' => CompanyClient::where('status', 'active')->latest()->get(),
            'item' => HomePage::latest('id')->first(),
        ];


        return view('frontend.pages.pricing', $data);
    }

    //pricingStore
    public function pricingStore(Request $request)
    {
        // Manually gather the request data
        $pageNumber = $request->input('page_number');
        $frontendTechnology = $request->input('frontend_technology');
        $database = $request->input('database');
        $content = $request->input('content');
        $maintenanceDuration = $request->input('maintenance_duration');
        $graphicDesign = $request->input('graphic_design');

        $pricingPlan = new CustomBuild();
        $pricingPlan->page_number = $pageNumber;
        $pricingPlan->frontend_technology = $frontendTechnology;
        $pricingPlan->database = $database;
        $pricingPlan->content = $content;
        $pricingPlan->maintenance_duration = $maintenanceDuration;
        $pricingPlan->graphic_design = $graphicDesign;

        // Save the new pricing plan to the database
        $pricingPlan->save();

        // Redirect or return a success response
        return redirect()->back()->with('success', 'Pricing plan has been created successfully!');
    }
}
