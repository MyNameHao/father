<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /*展示视图*/
    public function create(){
        return view('customers.create');
    }
}
