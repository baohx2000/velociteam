<?php


namespace B2k\Velociteam\Client;


use GuzzleHttp\Client;

class ZenHubClient extends Client
{
    private string $accessToken;
    protected array $burnPipelines = ['Closed'];

    public function setAccessToken(string $accessToken): void
    {
        $this->accessToken = $accessToken;
    }

    public function setBurnPipelines(array $pipes): void
    {
        $this->burnPipelines = $pipes;
    }

    public function fetchData(string $workspaceId, string $repoId)
    {
        // https://github.com/ZenHubIO/API#get-a-zenhub-board-for-a-repository
    }
}
