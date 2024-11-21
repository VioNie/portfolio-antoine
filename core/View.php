<?php

namespace core;

class View
{
    static function render($templaterPath, $data)
    {
    ob_start();
    require_once '/templates/'.$templaterPath;
    }
}