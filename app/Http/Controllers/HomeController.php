<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Setting;

class HomeController extends Controller
{

    public function index()
    {
        $word = "site";       
        $value = [];

        $company = Setting::select('value')->where('key', 'like',   $word . '%')->get();
        foreach ($company as $item) {        
            $value[] = $item['value'];
        }       
               
          return view('index',compact('value'));        
    }

   
}
