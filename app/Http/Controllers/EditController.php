<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class EditController extends Controller
{
    public function getVariables($id)
    {
        $pathToVariables = resource_path('themes/'. $id .'/_variables.scss');
        //$data = File::get($pathToVariables);

        $data = file($pathToVariables, FILE_IGNORE_NEW_LINES);
        $arr_format = array();
        foreach ($data as $item){
            $item = preg_replace('/\$|\;/', '', $item);
            list($key, $val) = explode(':', $item);
            $arr_format[$key] = $val;
        }
        return $arr_format;
    }
}
