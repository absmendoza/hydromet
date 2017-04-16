<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notification;
use Request;

class NotificationController extends Controller
{
    //

    public function store(){
        $notif = Request::all();
        Notification::create($notif);
    }
    
}
