<?php

namespace App\Http\Controllers;

use App\Notifications\SubscribtionNotification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Notification as FacadesNotification;

class MailController extends Controller
{
    public function sendMails(){
        
    }

    public function sendMailsOneByOne(){

        FacadesNotification::send(User::all(), new SubscribtionNotification);

        return back()->withSuccess("Emails are being sent at the moment");
    }
}
