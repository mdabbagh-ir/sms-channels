<?php

namespace App\Strategy\SmsChannels\Drivers;
use App\Strategy\SmsChannels\SmsChannelsInterface;


class kavengar implements SmsChannelsInterface
{
    public function sendVerifyCode($phone)
    {
        return ['kavengar'];
    }
}
