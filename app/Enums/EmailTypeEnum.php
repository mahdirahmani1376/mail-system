<?php

namespace App\Enums;

use App\Mail\ForgetPasswordMail;
use App\Mail\TopicCreatedMail;
use App\Mail\UserRegisteredMail;

enum EmailTypeEnum: string
{
	case USER_REGISTERED = 'user_registered';
    case TOPIC_CREATED = 'topic_created';
    case FORGET_PASSWORD = 'forget_password';

    public static function toMail($type): string
    {
        return [
            self::USER_REGISTERED->value => UserRegisteredMail::class,
            self::TOPIC_CREATED->value => TopicCreatedMail::class,
            self::FORGET_PASSWORD->value => ForgetPasswordMail::class
        ][$type];
	}

    public static function toString($type)
    {
        return [
            self::USER_REGISTERED->value => __('emails.user registered email'),
            self::TOPIC_CREATED->value => __('emails.topic_created_email'),
            self::FORGET_PASSWORD->value => __('emails.forget_password_email')
        ][$type];
    }
}
