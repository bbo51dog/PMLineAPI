<?php

namespace bbo51dog\pmline\message;

abstract class MessageBase implements Message{

    /** @var string */
    protected $type;

    final protected function setType(string $type){
        $this->type = $type;
    }
}