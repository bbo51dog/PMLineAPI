<?php

namespace bbo51dog\pmline;

use bbo51dog\pmline\bot\Bot;
use bbo51dog\pmline\bot\BotImpl;

class PMLineAPI{

    /**
     * Create Bot instance
     *
     * @return Bot
     */
    public static function createBot(): Bot{
        return new BotImpl();
    }

    private function __construct(){
    
    }
}