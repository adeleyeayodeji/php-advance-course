<?php
//check if function exists
if (!function_exists('view')) {
    //view
    /*
    * @param string $view
    * @param array $args
    * @return html
    */
    function view($view, $args = [])
    {
        return \App\Core\View::render($view, $args);
    }
}
