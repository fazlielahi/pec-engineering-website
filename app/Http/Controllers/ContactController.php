<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ContactController extends Controller
{
   public function index(){
        // Get current locale
        $locale = App::getLocale();
                        
        // Return different views based on locale
        if ($locale === 'ar') {
          return view('sections.contact');
        }else{
          return view('sections.contact_en');
        }
   }

   
   
}