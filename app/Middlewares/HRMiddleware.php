<?php

namespace Middlewares;

use src\Auth\Auth;

class HrMiddleware
{
    public function handle()
    {
        if (Auth::role() !== "hr") app()->route->redirect("/login");
    }
}