<?php


use App\Enums\EmailTypeEnum;

return [
    EmailTypeEnum::FORGET_PASSWORD->name => 'forget password',
    EmailTypeEnum::TOPIC_CREATED->name => 'topic created',
    EmailTypeEnum::USER_REGISTERED->name => 'user registered',
];
