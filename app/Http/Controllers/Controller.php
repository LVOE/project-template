<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Min\Controllers\RestController;

class Controller extends RestController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
