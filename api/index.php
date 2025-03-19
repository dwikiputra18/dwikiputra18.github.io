<?php

require __DIR__ . '/../vendor/autoload.php';

use Illuminate\Http\Request;

$request = Request::capture();
$kernel = app()->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
