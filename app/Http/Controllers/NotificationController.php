<?php

namespace App\Http\Controllers;

use App\Enums\EmailTypeEnum;
use App\Models\User;

class NotificationController extends Controller
{
    public function email()
    {
        $users  = User::all();
        $emailTypes = EmailTypeEnum::cases();
		return view('notifications.send-email',compact('users','emailTypes'));
    }
}
