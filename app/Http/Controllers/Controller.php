<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $path;
    protected $pathToTheme;

    public function __construct()
    {
        $this->path = resource_path('themes/themes.json');
    }

    public function getThemes()
    {
        return file_exists($this->path) ? file_get_contents($this->path) : false;
    }
}
