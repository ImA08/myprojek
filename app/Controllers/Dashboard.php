<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        echo view('admin/admin_header');
        echo view('admin/dashboard_view');
        echo view('admin/admin_footer');
    }
}
