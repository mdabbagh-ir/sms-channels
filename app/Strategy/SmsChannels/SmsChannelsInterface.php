<?php

namespace App\Strategy\SmsChannels;

interface SmsChannelsInterface
{
    public function sendVerifyCode($phone);
}
