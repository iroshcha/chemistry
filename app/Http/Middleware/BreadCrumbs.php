<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BreadCrumbs
{
    public static function run()
    {
        $url = '';
        $crumbs = [];
        $pages = explode('/', $_SERVER['REQUEST_URI']);
        foreach ($pages as $key => $page) {
            if (!empty($page)) {
                $url .= '/'. $page;
                switch ($page) {
                    case 'topics':
                        $crumbs[$key]['name'] = 'Темы';
                        $crumbs[$key]['url'] = $url;
                        break;
                    case 'subtopics':
                        $crumbs[$key]['name'] = 'Подтемы';
                        $crumbs[$key]['url'] = $url;
                        break;
                    case 'quests':
                        $crumbs[$key]['name'] = 'Вопросы';
                        $crumbs[$key]['url'] = $url;
                        break;
                }
            }
        }
        return $crumbs;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }
}
