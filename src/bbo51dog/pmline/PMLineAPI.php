<?php

namespace bbo51dog\pmline;

use bbo51dog\pmline\bot\Bot;
use bbo51dog\pmline\bot\BotImpl;

class PMLineAPI{

    /**
     * Create Bot instance
     *
     * @param string $token Your Channel Access Token 
     * @return Bot
     */
    public static function createBot(string $token): Bot{
        return new BotImpl($token);
    }

    private function __construct(){
    
    }
}