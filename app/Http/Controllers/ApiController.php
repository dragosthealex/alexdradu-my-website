<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
  public function githubHook(Request $request) {
    $signature = $request->header('X-Hub-Signature');
    $payload = json_encode($request->all(), JSON_UNESCAPED_SLASHES);
    $pass = 'sha1=' . hash_hmac('sha1', $payload, env('GIT_WEBHOOK_KEY', 'key'));
    if($pass == $signature) {
      // Update git
      $path = realpath(dirname(__FILE__) . '../../../');
      chdir($path);
      shell_exec('git pull');
      shell_exec('php artisan clear-compiled');
      shell_exec('composer dump-autoload');
      shell_exec('php artisan optimize');
    } else {
      echo "Wrong pass. Date: " . date('d.m.Y h:i:s');
    }
  }
}
