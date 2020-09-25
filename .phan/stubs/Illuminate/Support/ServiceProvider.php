<?php

namespace Illuminate\Support;

class ServiceProvider
{
    public $app;

    public function register() {}
    protected function publishes(array $paths, $groups = null) {}
}
