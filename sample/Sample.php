<?php

namespace sample;

use bbo51dog\pmline\PMLineAPI;
use bbo51dog\pmline\bot\Bot;
use bbo51dog\pmline\message\TextMessage;
use pocketmine\plugin\PluginBase;

class Sample extends PluginBase{

    /** @var string */
    private const ACCESS_TOKEN ='Your Access Token';

    /** @var Bot */
    private $bot;

    public function onLoad(){
        $this->bot = PMLineAPI::createBot(self::ACCESS_TOKEN);
    }
    
    public function onEnable(){
        $list = PMLineAPI::createMessageList();
        $text = new TextMessage();
        $text->setText('Server Open');
        $list->add($text);
        $this->bot->sendBroadcast($list);
    }
}