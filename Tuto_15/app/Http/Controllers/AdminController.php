<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller as BaseController;

class AdminController extends BaseController
{
    use AuthorizesRequests;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return 'Welcome to admin page';
    }

    public function callAction($method, $parameters)
    {
        $controller = class_basename(static::class);
        $action = $method;

        $permissionName = str_replace(['Controller', '@'], ['', '-'], $controller) . '-' . $action;

        $this->authorize($permissionName);

        return parent::callAction($method, $parameters);
    }
}
