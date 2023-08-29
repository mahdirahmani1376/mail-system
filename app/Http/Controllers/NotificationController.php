<?php

namespace App\Http\Controllers;

use App\Enums\EmailTypeEnum;
use App\Http\Requests\SendEmailRequest;
use App\Jobs\SendEmailJob;
use App\Models\User;
use App\Services\Notification\Notification;
use Exception;

class NotificationController extends Controller
{
    public function email()
    {
        $users = User::all();
        $emailTypes = EmailTypeEnum::cases();
        return view('notifications.send-email', compact('users', 'emailTypes'));
    }

    public function sendEmail(SendEmailRequest $sendEmailRequest, Notification $notification)
    {
        try {
            $data = $sendEmailRequest->validated();
            $user = User::find($data['user']);
            $mailable = EmailTypeEnum::toMail($data['email_type']);
            SendEmailJob::dispatch($user,$mailable);

            return redirect()->back()->with('success', __('notification.email_sent_successfully'));
        } catch (Exception $e) {
            return redirect()->back()->with('failed', __('notification.email_has_problem'));
        }

    }
}
