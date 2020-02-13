<?php

namespace bbo51dog\pmline\bot;

use bbo51dog\pmline\message\MessageList;

interface Bot{

    public function sendPush(MessageList $list, string $to): void;
    
    public function sendMulticast(MessageList $list, array $to): void;
    
    public function sendNarrowcast(MessageList $list): void;
    
    public function sendBroadcast(MessageList $list): void;
}