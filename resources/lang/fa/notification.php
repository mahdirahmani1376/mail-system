<?php


use App\Enums\EmailTypeEnum;

return [
    'notification.send_email' => 'ارسال ایمیل',
    'notification.users' => 'لیست کاربران',
    'notification.email_type' => 'نوع ایمیل',
    'notification.send' => 'ارسال اعلان',
    EmailTypeEnum::USER_REGISTERED->value => 'ثبت نام کاربر',
    EmailTypeEnum::TOPIC_CREATED->value => "ایجاد مقاله جدید",
    EmailTypeEnum::FORGET_PASSWORD->value => "فراموشی رمز عبور",
];
