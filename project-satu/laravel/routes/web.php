<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $client = new Client();
    $request = new Request('GET', 'http://172.40.0.1:8001/api');
    $res = $client->sendAsync($request)->wait();
    // $respons = $client
    
    return $res->getBody();
});
