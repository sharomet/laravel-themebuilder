<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theme;

class EditController extends Controller
{
    public function index($id)
    {
        $row = new Theme();
        return response()->json($row->getDb()->find($id)->variables);
    }
}
