<?php

namespace App\Http\Middleware;

use App\Book;
use Closure;

class hasBook
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
      if(Book::find($request->route()->id))
        return $next($request);
      else
        return response(['status' => false])
        ->header('content-type', 'application/json')
        ->setStatusCode(404, 'Book not found');
    }
}
