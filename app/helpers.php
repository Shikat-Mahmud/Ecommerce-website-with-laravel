<?php 
use App\Models\ApplicationSetting;

function generalSetting(){
    $setting = ApplicationSetting::latest()->first();
    return $setting;
}