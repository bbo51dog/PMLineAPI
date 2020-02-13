<?php

namespace bbo51dog\pmline\bot;

class BotImpl implements Bot{

    /** @var string */
    private $token;

    public function __construct(string $token){
        $this->token = $token;
    }
    
    public function sendPush(MessageList $list): void;
    
    public function sendMulticast(MessageList $list): void;
    
    public function sendNarrowcast(MessageList $list): void;
    
    public function sendBroadcast(MessageList $list): void;
    
    private function send(MessageList $message, string $method): void{
    
    }
}