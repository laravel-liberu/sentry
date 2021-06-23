<?php

namespace LaravelEnso\Sentry\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Sentry\Exceptions\Handler;

class Sentry extends Controller
{
    public function __invoke()
    {
        return ['eventId' => Handler::eventId()];
    }
}
