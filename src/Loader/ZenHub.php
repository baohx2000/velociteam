<?php


namespace B2k\Velociteam\Loader;


use B2k\Velociteam\Client\ZenHubClient;

class ZenHub
{
    /**
     * @var ZenHubClient
     */
    protected ZenHubClient $zenHubClient;

    public function __construct(ZenHubClient $zenHubClient)
    {
        $this->zenHubClient = $zenHubClient;
    }
}
