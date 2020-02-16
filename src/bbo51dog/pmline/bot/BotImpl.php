<?php

namespace bbo51dog\pmline\bot;

use bbo51dog\pmline\exception\BotException;
use bbo51dog\pmline\message\MessageList;

class BotImpl implements Bot{

    /** @var string */
    private $token;

    public function __construct(string $token){
        $this->token = $token;
    }
    
    public function sendPush(MessageList $list, string $to): void{
        $post = [
            'to' => $to,
            'messages' => $list->getData(),
        ];
        $this->send('push', $post);
    }
    
    public function sendMulticast(MessageList $list, array $to): void{
        $post = [
            'to' => $to,
            'messages' => $list->getData(),
        ];
        $this->send('multicast', $post);
    }
    
    public function sendNarrowcast(MessageList $list): void{
        //TODO: Implement narrowcast
    }
    
    public function sendBroadcast(MessageList $list): void{
        $post = [
            'messages' => $list->getData(),
        ];
        $this->send('broadcast', $post);
    }
    
    private function send(string $method, array $postData): void{
        $ch = curl_init('https://api.line.me/v2/bot/message/'.$method);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json; charser=UTF-8',
            'Authorization: Bearer '.$this->token
        ]);
        $result = curl_exec($ch);
        curl_close($ch);
        if(!$result){
            throw new BotException('cURL failed');
        }
        $res = json_decode($result, true);
        if(array_key_exists('message', $res)){
            throw new BotException($res['message']);
        }elseif(array_key_exists('details', $res)){
            throw new BotException($res['details'][0]['message']);
        }
    }
}