<?php
namespace App\Http\Middleware;
use Closure;
use Auth;
class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ... $roles)
    {
        if (Auth::guest()) {
            return redirect('login');
        }

        $user = Auth::user();

        foreach($roles as $role) {
            // Check if user has the role This check will depend on how your roles are set up
            if($user->hasRole($role))
                return $next($request);
        }

        if (! $request->user()->hasRole($role)) {
           abort(403);
        }
        //return $next($request);
        return redirect('login');
    }
}