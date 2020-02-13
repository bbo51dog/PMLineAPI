<?php

namespace bbo51dog\pmline\bot;

use bbo51dog\pmline\message\MessageList;

interface Bot{

    /**
     * Send push message
     * You cannot send if you use free plan or basic plan
     *
     * @param MessageList $list
     * @param string $to
     */
    public function sendPush(MessageList $list, string $to): void;
    
    /**
     * Send multicast message
     * You cannot send if you use free plan or basic plan
     *
     * @param MessageList $list
     * @param array $to
     */
    public function sendMulticast(MessageList $list, array $to): void;
    
    /**
     * Send narrowcast message
     *
     * @param MessageList $list
     */
    public function sendNarrowcast(MessageList $list): void;
    
    /**
     * Send broadcast message
     *
     * @param MessageList $list
     */
    public function sendBroadcast(MessageList $list): void;
}