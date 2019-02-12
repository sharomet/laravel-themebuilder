<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class EditController extends Controller
{
    public function getVariables($id)
    {
        $data = File::get(resource_path('themes/'. $id .'/_variables.scss'));
        preg_match_all('~\$(.*):(.*);~', $data, $m);
        return array_combine($m[1], $m[2]);
    }
}
