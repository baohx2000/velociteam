<?php


namespace B2k\Velociteam;


class Configuration
{
    const CACHE_TYPE = 'cache';
    const CACHE_CONFIG = 'cache_config';
    const CACHE_TYPES = [
        'file',
        'array',
        'apc',
        'redis',
    ];

    const CACHE_DEFAULT = [
        self::CACHE_TYPE => 'file',
    ];

    public function __construct(array $config)
    {

    }
}
