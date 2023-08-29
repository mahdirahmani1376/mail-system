<?php


use App\Enums\EmailTypeEnum;

return [
    EmailTypeEnum::FORGET_PASSWORD->value => "فراموشی رمز",
    EmailTypeEnum::TOPIC_CREATED->value => "ایجاد شدن مقاله",
    EmailTypeEnum::USER_REGISTERED->value => 'ثبت نام کاربر',
];
