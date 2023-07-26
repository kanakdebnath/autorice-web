<?php

namespace App\Http\Helper;

use Intervention\Image\Facades\Image;

use Illuminate\Support\Facades\DB;


class Helper
{


    /**
     * Summary of imageUpload
     * @param mixed $photo
     * @param mixed $width
     * @param mixed $height
     * @param mixed $path
     * @param mixed $name
     * @return mixed
     */
    public static function imageUpload($photo, $width, $height, $path, $name)
    {
        Image::make($photo)->fit($width, $height)->save(public_path($path) . $name, 50);
        return $name;
    }


    public static function unlinkImage($path, $name)
    {
        $old_photo = $path . $name;
        if (file_exists($old_photo)) {
            unlink($old_photo);
        }
    }

        public static function get_option($name) {
            $setting = DB::table('settings')->where('name', $name)->get();
            if (!$setting->isEmpty()) {
                return $setting[0]->value;
            }
            return "";
    
        }
    

}
