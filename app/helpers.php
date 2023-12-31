<?php

use App\Models\Backend\AboutUs;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

if (!function_exists('get_option')) {
    function get_option($name)
    {
        $setting = DB::table('settings')->where('name', $name)->get();
        if (!$setting->isEmpty()) {
            return $setting[0]->value;
        }
        return "";
    }
}

if (!function_exists('get_about_value')) {
    function get_about_value($value)
    {
        $about = DB::table('about_us')->where('name', $value)->get();
        if (!$about->isEmpty()) {
            return $about[0]->value;
        }
        return '';
    }
}

if (!function_exists('str_random')) {
    /**
     * Generate a more truly "random" alpha-numeric string.
     *
     * @param  int  $length
     * @return string
     *
     * @throws \RuntimeException
     */
    function str_random($length = 16)
    {
        return Str::random($length);
    }
}
