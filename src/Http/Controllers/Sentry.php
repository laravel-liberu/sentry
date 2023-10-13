<?php

namespace LaravelLiberu\Sentry\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Sentry\Exceptions\Handler;

class Sentry extends Controller
{
    public function __invoke()
    {
        return ['eventId' => Handler::eventId()];
    }
}
