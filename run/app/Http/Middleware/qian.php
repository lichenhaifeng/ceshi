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
class qian implements Middleware
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
        $id = Session::get('id');
        if($id){
        	return $next($request);
        }else{
           return "<script>alert('请先登录！');location.href='/run/public/xin'</script>";
        	
        }
        
    }
}

?>