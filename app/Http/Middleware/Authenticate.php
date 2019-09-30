<?php
 
  namespace App\Http\Controllers;

  use Closure;
  use Illuminate\Contracts\Auth\Guard;

  /**
  * 
  */
  class Authenticate
  {
     /**
  * 
  */
  	@var Guard;
  	protected $auth;
  	@param Guard $auth;
  	@return void;
  	
  	 public function __construct(Guard $auth)
  	{  
  		$this->auth =$auth;
  	}
    @param \Illuminate\Http\Request $request
    @param \Closure $next
    @return mixed

    public function handle($request, Closure $next)  
    {
      if ($this->auth->guest) {
            if ($request->ajax()) {
              return response('Unauthorized!!', 401);
            }
            //class for redirecting user if not Authenticated
            return redirect()->route('guest.index');
      }
      return $next($request);
    }
  }



?>