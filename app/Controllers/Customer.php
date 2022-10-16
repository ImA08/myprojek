<?php

namespace App\Controllers;

class Customer extends BaseController
{
    public function index()
    {
        echo view('customer/customer_header');
        echo view('customer/dashboard');
        echo view('customer/customer_footer');
    }
}
