<?php

namespace Touhid\MillionToBdt\Http\Controllers;

use App\Http\Controllers\Controller;
use Touhid\MillionToBdt\Http\Models\Logs;
use Touhid\MillionToBdt\Http\Models\MillionToBdtLogs;

class MillionToBdtController extends Controller
{
    public function index(){
        $logs = MillionToBdtLogs::latest()->get();
        $config_mail = config('email');
        return view('million-to-bdt::index', compact('logs', 'config_mail'));
    }
}
