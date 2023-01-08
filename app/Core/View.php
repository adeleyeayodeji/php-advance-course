<?php

namespace App\Core;

class View
{
    //render
    public static function render($view, $args = [])
    {
        $file = "resource/views/$view.php";
        //check if file exists
        if (is_readable($file)) {
            //show content
            echo self::getContent($file, $args);
        } else {
            //show error
            echo self::notFound($file);
        }
    }

    //returnRender
    public static function returnRender($view, $args = [])
    {
        $file = "resource/views/$view.php";
        //check if file exists
        if (is_readable($file)) {
            //show content
            return self::getContent($file, $args);
        } else {
            //show error
            return self::notFound($file);
        }
    }

    //show content
    public static function getContent($file, $args = [])
    {
        //extract args
        extract($args, EXTR_SKIP);
        //start buffer
        ob_start();
        //include file
        require $file;
        //get buffer content
        $content = ob_get_clean();
        //return content
        return $content;
    }

    //not found
    public static function notFound($fileError = "")
    {
        http_response_code(404);
        return self::returnRender('error/404', ['fileError' => $fileError]);
    }
}
