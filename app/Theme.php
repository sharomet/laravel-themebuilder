<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use DatabaseJson\Classes\Database;

class Theme extends Database
{
    private $db;

    public function __construct()
    {
        $this->setDb(Database::table('themes2'));
    }

    /**
     * Get the value of db
     */ 
    public function getDb()
    {
        return $this->db;
    }

    /**
     * Set the value of db
     */ 
    public function setDb($db)
    {
        $this->db = $db;
    }
}
