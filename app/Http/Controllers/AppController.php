<?php
namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use DatabaseJson\Classes\Database;

class AppController extends Controller
{
    public function index()
    {
        /*$row = Database::table('themes');
        $row->id = '1';
        $row->name = 'Theme 1';
        $row->copy = false;
        $row->save();*/

        /*$themes = Database::table('themes')->findAll()->asArray();
        return response()->json($themes);*/

        return view('app');
    }
}
