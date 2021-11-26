<?php

namespace App\Controllers\AdminPage;

use App\Controllers\AdminPage;
class AdminPAge extends BaseController
{
    public function index()
    {
        return view('template/admin');
    }
}
