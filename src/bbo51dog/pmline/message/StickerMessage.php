<?php

namespace bbo51dog\pmline\message;

class StickerMessage implements Message{

    /** @var int */
    private $package;
    
    /** @var int */
    private $sticker;
    
    public function setPackage(int $package): void{
        $this->package = $package;
    }
    
    public function setSticker(int $sticker): void{
        $this->sticker = $sticker;
    }
    
    public function getData(): array{
        $data = [
            'type' => 'sticker',
            'packageId' => (string)$this->package,
            'stickerId' => (string)$this->sticker,
        ];
        return $data;
    }
}