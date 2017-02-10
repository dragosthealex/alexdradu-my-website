<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
  public function githubHook(Request $request) {
    $signature = $request->header('X-Hub-Signature');
    $payload = $request->input('payload');
    if(hash_hmac('sha1', $payload) != $signature) {
      echo "cacat";
    }
    echo $signature;
    echo $payload;
  }

}
