<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list()
    {

      $name= Customer::all();
      return view('data.datascan',[
        'i'=>$name,
      ]);

    }

    public function store()
    {
      $customer = new Customer();
      $customer->name =request('name');
      $customer->save();

      return back();
    }
}
