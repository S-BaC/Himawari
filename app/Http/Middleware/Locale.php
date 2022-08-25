<?php 
namespace App\Http\Middleware;

use Closure, Session, Auth;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session as FacadesSession;
use Symfony\Component\HttpFoundation\Session\Session as HttpFoundationSessionSession;

class Locale {

    /**
     * The availables languages.
     *
     * @array $languages
     */
    protected $languages = ['en','mm', 'jp'];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   

        if(session()->has('locale'))
        {
            App::setLocale(session("locale"));
        }
        return $next($request);
    }

}