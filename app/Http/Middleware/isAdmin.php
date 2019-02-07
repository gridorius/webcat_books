<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      $bearer_token = $request->header('Authorization');
      $user_token = preg_replace('/Bearer /', '', $bearer_token);
      $user = User::where('token', $user_token)->first();
      if($user && $user->role == 1)
        return $next($request);
      else
        return response(['error' => 'you are not admin'])
        ->header('content-type', 'application/json')
        ->setStatusCode(401, 'you are not admin');
    }
}
