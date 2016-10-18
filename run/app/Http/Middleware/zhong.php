<?php
namespace App\Http\Middleware;

use Closure,Session;
use Cookie,DB,View;
use Redirect;
use Illuminate\Contracts\Routing\Middleware;

/**
 * 检查用户登陆中间件
 * @author Robin
 *
 */
class zhong implements Middleware
{

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    

    public function handle($request, Closure $next)
    {
        $id = Session::get('uid');
        if($id){
        	return $next($request);
        }else{
        	return redirect('admin/Login');
        }
        
    }
}

?>