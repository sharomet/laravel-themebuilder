<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DatabaseJson\Classes\Database;

class HomeController extends Controller
{
    public function index()
    {
        $themes = Database::table('themes')->findAll()->asArray();
        return response()->json($themes);
    }
}
