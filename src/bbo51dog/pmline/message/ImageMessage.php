<?php

namespace bbo51dog\pmline\message;

class ImageMessage implements Message{

    /** @var string */
    private $original;
    
    /** @var string */
    private $preview;
    
    /**
     * Max image size is 4096×4096, JPEG type
     *
     * @param string $url
     */
    public function setOriginalURL(string $url): void{
        $this->original = $url;
    }
    
    /**
     * Max image size is 240×240, JPEG type
     *
     * @param string $url
     */
     public function setPreviewURL(string $url): void{
        $this->preview = $url;
    }
    
    public function getData(): array{
        $data = [
            'type' => 'image',
            'originalContentUrl' => $this->original,
            'previewImageUrl' => $this->preview,
        ];
        return $data;
    }
}