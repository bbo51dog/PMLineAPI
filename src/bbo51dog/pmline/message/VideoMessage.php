<?php

namespace bbo51dog\pmline\message;

class VideoMessage implements Message{

    /** @var string */
    private $original;
    
    /** @var string */
    private $preview;
    
    /**
     * Under 1 minute, MP4 file
     *
     * @param string $url
     */
    public function setURL(string $url): void{
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
            'type' => 'video',
            'originalContentUrl' => $this->original,
            'previewImageUrl' => $this->preview,
        ];
        return $data;
    }
}