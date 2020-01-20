<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function action(){
        $action="Action";
        return view('pages.our_action',compact('action'));
    }
    public function join_us(){
        $join="join";
        return view('pages.join_us',compact('join'));
    }
    public function news(){
        $new="news";
        return view('pages.news',compact('new'));
    }
    public function contact_us(){
        $contact= "contact";
        return view('pages.contact_us',compact('contact'));
    }
    public function about_us(){
        $about = "about";
        return view('pages.about_us',compact('about'));
    }
    public function showCustomer(){
        $teachers = ['Chandaraty', 'Maly','Samphas'];
        return view('pages.customer',compact('teachers'));
    }

    public function listCustomer(){
        $customers =array(
            '0'=>array('id' => 1,'name' => 'Chandaraty','email' => 'chandaraty@example.org'),
            
            '1'=>array('id' => 2,'name' => 'Maly','email' => 'maly@example.org'),
            
            '2'=>array('id' => 3,'name' => 'Samphas','email' =>'samphas@example.org'),
            
            '3'=>array('id' => 4,'name' => 'Donat','email' => 'donat@example.org')
            
            );
            return view('pages.customers',compact('customers'));
    }
}
