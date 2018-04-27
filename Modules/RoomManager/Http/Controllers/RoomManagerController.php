<?php

namespace Modules\RoomManager\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Core\Http\Controllers\Controller;

class RoomManagerController extends Controller
{
    public function create()
    {
        return view('roommanager::create');
    }
}
