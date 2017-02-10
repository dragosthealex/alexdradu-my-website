<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
  public function githubHook(Request $request) {
    $signature = $request->header('X-Hub-Signature');
    $payload = $request->input('payload');
    $pass = hash_hmac('sha1', $payload, env('GIT_WEBHOOK_KEY', 'key'));
    if($pass != $signature) {
      echo "cacat";
    }
    echo $pass;
    echo $signature;


    echo $payload;
  }

}
