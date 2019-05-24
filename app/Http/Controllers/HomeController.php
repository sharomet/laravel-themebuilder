<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DatabaseJson\Classes\Database;
use App\Theme;

class HomeController extends Controller
{
    public function index()
    {
        /*Database::create('themes2', array(
            '_id' => 'string',
            'name' => 'string',
            'copy' => 'boolean',
            'variables' => 'array'
        ));*/
        
        /*$row = Database::table('themes2');
        $row->id = $this->getGuid();
        $row->_id = $this->getGuid();
        $row->name = 'Default Theme 2';
        $row->copy = false;
        $row->variables = [
            ['$primary' => '#334455'],
            ['$secondary' => '#454545'],
            ['$success' => '#666888'],
        ];
        $row->save();*/

        //Database::table('themes2')->find(2)->delete();

        /*$themes = Database::table('themes2')->findAll()->asArray();
        return response()->json($themes[0]['variables']);*/

        //$themes = Database::table('themes2')->findAll()->asArray();
        $ths = new Theme();
        return response()->json($ths->getDb()->findAll()->asArray());
    }
}
