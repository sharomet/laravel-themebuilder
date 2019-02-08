<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class EditController extends Controller
{
    public function getVariables($id)
    {
        $pathToVariables = resource_path('themes/'. $id .'/_variables.scss');
        //return File::get($pathToVariables);

        $data = File::get($pathToVariables);
        preg_match_all('/\$(.*)\:/', $data, $arr);

        return $arr;

    }
}
