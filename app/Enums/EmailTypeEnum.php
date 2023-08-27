<?php

namespace App\Enums;

enum EmailTypeEnum: string
{
	case USER_REGISTERED = 'emails.user_registered';
    case TOPIC_CREATED = 'emails.topic_created';
    case FORGET_PASSWORD = 'emails.forget_password';

}
