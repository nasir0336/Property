<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

class AdminMiddleware
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
		$user = User::all()->count();
		if (!($user == 1)) {
			$permissions = Auth::user()->permissions;

			foreach($permissions as $value)
			{
				if($value["name"]=="AdminPermission")
				{
					return $next($request);
				}
			}



		}

		abort('401');
	}
}