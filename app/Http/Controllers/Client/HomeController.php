<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends BaseController
{
    public function index()
    {
        dd('client home');
        $this->setPageTitle('Dashboard', 'Dashboard', 'Welcome to the Dashboard');
        return view('client.home');
    }
}
