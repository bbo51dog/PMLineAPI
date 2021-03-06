<?php

namespace bbo51dog\pmline\message;

use bbo51dog\pmline\exception\MessageException;

class MessageList{

    /** @var Message[] */
    private $messages = [];
    
    /**
     * Add Message instance
     *
     * @param Message $message
     * @throw MessageException
     */
    public function add(Message $message): void{
        if(count($this->messages) >= 5){
            throw new MessageException('Number of messages must not be greater 5');
        }
        $this->messages[] = $message;
    }
    
    public function getData(): array{
        $data = [];
        foreach($this->messages as $message){
            $data[] = $message->getData();
        }
        return $data;
    }
}