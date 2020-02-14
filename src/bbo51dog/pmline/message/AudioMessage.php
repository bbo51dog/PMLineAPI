<?php

namespace bbo51dog\pmline\message;

class VideoMessage implements Message{

    /** @var string */
    private $original;
    
    /** @var int */
    private $duration;
    
    /**
     * Under 1 minute, m4a file
     *
     * @param string $url
     */
    public function setURL(string $url): void{
        $this->original = $url;
    }
    
    /**
     * Set duration of audio file
     *
     * @param int $duration millisecond
     */
     public function setDuration(int $duration): void{
        $this->duration = $duration;
    }
    
    public function getData(): array{
        $data = [
            'type' => 'audio',
            'originalContentUrl' => $this->original,
            'duration' => $this->duration,
        ];
        return $data;
    }
}