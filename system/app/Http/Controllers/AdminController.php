<?php

namespace App\Http\Controllers;

class AdminController extends Controller{

    function showDashboard(){
        return view('admin.section.dashboard');
    }

    function showInbox(){
        return view('admin.section.inbox');
    }

}