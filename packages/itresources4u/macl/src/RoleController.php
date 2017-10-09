<?php

namespace Itresources4u\Macl;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function index() {
        $lists = [];
        return view('macl::list', compact('lists'));
    }
}
