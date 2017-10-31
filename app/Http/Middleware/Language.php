<?php

namespace BauTRADE\Http\Middleware;

use Closure;

class Language
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $noTranslationPrefixes = [ 'admin' ]; // add what ever prefix that you don't need translation

        // Check if the first segment matches a language code
        if ( ! array_key_exists($request->segment(1),
                config('translatable.locales')) && ! in_array($request->segment(1), $noTranslationPrefixes)) {

            // Store segments in array
            $segments = $request->segments();

            // Set the default language code as the first segment
            $segments = array_prepend($segments, config('app.fallback_locale'));

            // Redirect to the correct url
            return redirect()->to(implode('/', $segments));
        }

        return $next($request);
    }
}
