<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\SettingRequest;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.setting.index', ['setting' => Setting::get()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function updateOrcreateSetting(SettingRequest $request)
    {
        $currentSetting = Setting::first();

        $dataToUpdateOrCreate = [
            // General Settings
            'site_name'          => $request->site_name,
            'site_motto'         => $request->site_motto,
            'site_url'           => $request->site_url,
            'address_line_one'   => $request->address_line_one,
            'address_line_two'   => $request->address_line_two,
            'default_language'   => $request->default_language,
            'default_currency'   => $request->default_currency,
            'currency_symbol'    => $request->currency_symbol,
            'date_format'        => $request->date_format,
            'time_format'        => $request->time_format,



            // Contact Information
            'contact_email'      => $request->contact_email,
            'support_email'      => $request->support_email,
            'info_email'         => $request->info_email,
            'sales_email'        => $request->sales_email,
            'phone_one'          => $request->phone_one,
            'phone_two'          => $request->phone_two,
            'whatsapp_number'    => $request->whatsapp_number,
            'contact_hours'      => $request->contact_hours,

            // Maintenance Mode
            'maintenance_mode'   => $request->maintenance_mode,
            'system_timezone'    => $request->system_timezone,
            'maintenance_message' => $request->maintenance_message,
            'additional_script'  => $request->additional_script,
            'google_adsense'     => $request->google_adsense,
            'google_tag_manager' => $request->google_tag_manager,
            'google_script'      => $request->google_script,
            'google_business'    => $request->google_business,

            // SEO Settings
            'seo_title'          => $request->seo_title,
            'seo_keywords'       => $request->seo_keywords,
            'seo_meta_tags'      => $request->seo_meta_tags,
            'seo_description'    => $request->seo_description,
            'og_title'           => $request->og_title,
            'og_description'     => $request->og_description,
            'canonical_url'      => $request->canonical_url,

            // Social Media
            'facebook_url'       => $request->facebook_url,
            'twitter_url'        => $request->twitter_url,
            'instagram_url'      => $request->instagram_url,
            'linkedin_url'       => $request->linkedin_url,
            'youtube_url'        => $request->youtube_url,
            'github_url'         => $request->github_url,
            'portfolio_url'      => $request->portfolio_url,
            'fiverr_url'         => $request->fiverr_url,
            'upwork_url'         => $request->upwork_url,

            // Advanced Settings
            'theme_color'        => $request->theme_color,
            'dark_mode'          => $request->dark_mode,
            'custom_css'         => $request->custom_css,
            'custom_js'          => $request->custom_js,

            // API Integration
            'map_api_key'        => $request->map_api_key,
            'payment_gateway_key' => $request->payment_gateway_key,

            // Business Information
            'company_name'       => $request->company_name,
            'tax_number'         => $request->tax_number,
            'billing_address'    => $request->billing_address,

            // Service Info
            'service_days'       => $request->service_days,
            'service_time'       => $request->service_time,

            // Meta Fields
            'created_by'         => Auth::guard('admin')->user()->id,
            'updated_by'         => Auth::guard('admin')->user()->id,
        ];

        if ($request->hasFile('og_image')) {
            $siteWhiteLogoPath = handaleFileUpload($request->file('og_image'), 'settings');

            if ($siteWhiteLogoPath) {
                if ($currentSetting && $currentSetting->og_image) {
                    $existingSiteWhiteLogo = storage_path('app/public/' . $currentSetting->og_image);
                    if (File::exists($existingSiteWhiteLogo)) {
                        File::delete($existingSiteWhiteLogo);
                    }
                }
                $dataToUpdateOrCreate['og_image'] = $siteWhiteLogoPath;
            }
        }

        if ($request->hasFile('site_white_logo')) {
            $siteWhiteLogoPath = handaleFileUpload($request->file('site_white_logo'), 'settings');

            if ($siteWhiteLogoPath) {
                if ($currentSetting && $currentSetting->site_white_logo) {
                    $existingSiteWhiteLogo = storage_path('app/public/' . $currentSetting->site_white_logo);
                    if (File::exists($existingSiteWhiteLogo)) {
                        File::delete($existingSiteWhiteLogo);
                    }
                }
                $dataToUpdateOrCreate['site_white_logo'] = $siteWhiteLogoPath;
            }
        }

        if ($request->hasFile('site_black_logo')) {
            $siteBlackLogoPath = handaleFileUpload($request->file('site_black_logo'), 'settings');

            if ($siteBlackLogoPath) {
                if ($currentSetting && $currentSetting->site_black_logo) {
                    $existingSiteBlackLogo = storage_path('app/public/' . $currentSetting->site_black_logo);
                    if (File::exists($existingSiteBlackLogo)) {
                        File::delete($existingSiteBlackLogo);
                    }
                }
                $dataToUpdateOrCreate['site_black_logo'] = $siteBlackLogoPath;
            }
        }

        if ($request->hasFile('site_favicon')) {
            $siteFaviconPath = handaleFileUpload($request->file('site_favicon'), 'settings');

            if ($siteFaviconPath) {
                if ($currentSetting && $currentSetting->site_favicon) {
                    $existingSiteFavicon = storage_path('app/public/' . $currentSetting->site_favicon);
                    if (File::exists($existingSiteFavicon)) {
                        File::delete($existingSiteFavicon);
                    }
                }
                $dataToUpdateOrCreate['site_favicon'] = $siteFaviconPath;
            }
        }

        Setting::updateOrCreate([], $dataToUpdateOrCreate);

        // $toastrMessage = $setting->wasRecentlyCreated ? 'Setting created successfully' : 'Setting updated successfully';

        return redirect()->route('admin.settings.index')->with('success', 'Data Create Or Update Successfully!!');
    }
}
