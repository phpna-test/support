<?php

namespace Gkr\Support\Stub;


use Illuminate\Support\ServiceProvider;

class StubServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('gkr.support.stub',Stub::class);
        $this->app->alias('gkr.support.stub',Stub::class);
    }
}