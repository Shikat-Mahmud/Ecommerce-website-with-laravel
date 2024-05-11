<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ApplicationSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Validator;
use File;

class SettingController extends Controller
{
    public function index()
    {
        $general = ApplicationSetting::latest()->first();
        return view('backend.setting.index', compact('general'));
    }

    
    private function setEnv($key, $value)
    {
        $envFilePath = app()->environmentFilePath();
        $envContents = File::get($envFilePath);
        $newEnvContents = preg_replace(
            "/^$key=.*/m",
            "$key=$value",
            $envContents
        );
    
        File::put($envFilePath, $newEnvContents);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'business_name' => 'required',
            'business_address' => 'required',
            'business_number' => 'required',
            'business_email' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::beginTransaction();
        try {
            $general = generalSetting();

            // Check and update logo
            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $path = $file->store('setting', 'public');
                $general->logo = $path;
            }

            // Check and update favicon
            if ($request->hasFile('favicon')) {
                $file = $request->file('favicon');
                $path = $file->store('setting', 'public');
                $general->favicon = $path;
            }
            
            if ($request->hasFile('banner_image')) {
                $file = $request->file('banner_image');
                $path = $file->store('setting', 'public');
                $general->banner_image = $path;
            }

            // Update other fields
            $general->fill([
                'business_name'      => $request->business_name,
                'business_address'   => $request->business_address,
                'business_number'    => $request->business_number,
                'business_email'     => $request->business_email,
                'meta_title'         => $request->meta_title,
                'meta_description'   => $request->meta_description,
                'business_whatsapp'   => $request->business_whatsapp,
            ]);

            $general->save();

            
            DB::commit();
            return redirect()->route('setting')->with('success','Data updated successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('setting')->with('error',$e->getMessage());
        }
    }

    public function cachClear(){
        Artisan::call('cache:clear');
        return redirect()->route('admin-dashboard')->with('success','Cache Clear Successfully');
    }
}
