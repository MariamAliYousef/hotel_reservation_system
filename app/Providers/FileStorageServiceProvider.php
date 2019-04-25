<?php

use Illuminate\Support\ServiceProvider;
use App\strategyPattern\roomInterface;


class FileStorageServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('roomInterface', 'singleRoom');
        $this->app->bind('roomInterface', 'doubleRoom');
        $this->app->bind('roomInterface', 'tripleRoom');
    }
}
