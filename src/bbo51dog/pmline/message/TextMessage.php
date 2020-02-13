<?php

namespace bbo51dog\pmline\message;

use bbo51dog\pmline\exception\MessageException;

class TextMessage extends MessageBase{

    private $text = '';

    public function __construct(){
        $this->setType('text');
    }
    
    public function setText(string $text): void{
        if(mb_strlen($text) > 2000){
            throw new MessageException('Text must not be more than 2000 characters');
        }
        $this->text = $text;
    }
    
    public function getData(): array{
        $data = [
            'type' => $this->type,
            'text' => $this->text,
        ];
        return $data;
    }
}