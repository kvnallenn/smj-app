<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarTransferController extends Controller
{
    public function index()
    {
        return view ('admin.daftartransfer.index');
    }
}
