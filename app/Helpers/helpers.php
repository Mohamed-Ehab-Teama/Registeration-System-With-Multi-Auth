<?php

use Illuminate\Support\Facades\Auth;

function checkPermission( $permission )
{
    return Auth::guard('admin')->user()->hasAnyPermission($permission) ? true : false;
}