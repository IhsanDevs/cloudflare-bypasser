<?php
namespace Ihsandevs\CloudflareBypasser;
use Symfony\Component\Process\Process;

class Bypass
{
    public ?string $url = null;
    private $proccess;
    /**
     * @param string $url
     * @description Set the url to bypass
     */
    public function __construct(string $url)
    {
        $this->url = $url;

        $this->proccess = new Process([
            __DIR__ . '/bin/cfscrape', $this->url,
        ], __DIR__ . '/bin');
    }

    /**
     * @return string
     * @description Get the real content of the url
     */
    public function getRealContent(): string
    {
        return $this->proccess->mustRun()->getOutput();
    }
}