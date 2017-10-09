<?php

namespace Itresources4u\Acl;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function aclTest() {
        echo "I am from acl package controller.";
    }

    public function index() {
        $test = "I came from acl package controller to view.";

        return view("acl::list", compact('test'));
    }
}
