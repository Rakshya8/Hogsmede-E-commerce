<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Newsletter;
//Controller for Newsletter

class NewsletterController extends Controller
{
    //Single action controller
    public function __invoke(Newsletter $newsletter){
        request()-> validate(['email' =>'required|email']);
        
        
            
            try{
                $newsletter->subscribe(request('email'));
        
                
                session()->flash('success','Your have subscribed to our newsletter');
            }
            catch(\Exception $exception){
                session()->flash('failure','This email could not be added to our list');

                //session()->flash('failure','This email could not be added to our list');
        
            }
            return redirect('/');

    }
}
