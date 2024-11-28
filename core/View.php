<?php

namespace Core;

class View
{
    static function render($templaterPath, $data)
    {

        ob_start();
        extract($data);
        require_once '../templates/' . $templaterPath.'.html.php';
        $content = ob_get_clean();

        if (!isset($title)) {
            $title = "MET UN TITRE";
        }
        ob_start();
        require_once '../templates/base.html.php';

        echo ob_get_clean();


    }
}