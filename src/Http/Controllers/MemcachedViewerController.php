<?php

namespace DIGDICE\MemcachedViewer\Http\Controllers;

use Illuminate\Routing\Controller;

class MemcachedViewerController extends Controller
{
    protected $memcached_viewer;

    public function __construct()
    {
        // add custom middleware to restrict access permission
        $this->middleware('memcached-viewer');

        // default adminer
        $this->memcached_viewer = 'memcached.php';
    }

    public function index()
    {
        require(__DIR__.'/../../../resources/'.$this->memcached_viewer);
    }
}
