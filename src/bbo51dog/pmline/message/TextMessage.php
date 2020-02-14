<?php

namespace bbo51dog\pmline\message;

use bbo51dog\pmline\exception\MessageException;

class TextMessage implements Message{

    /** @var string */
    private $text;
    
    public function setText(string $text): void{
        if(mb_strlen($text) > 2000){
            throw new MessageException('Text must not be more than 2000 characters');
        }
        $this->text = $text;
    }
    
    public function getData(): array{
        $data = [
            'type' => 'text',
            'text' => $this->text,
        ];
        return $data;
    }
}