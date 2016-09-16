<?php
/*
 * Class modules\app\seo\classes\Seo
 */
namespace modules\app\seo\classes;

use \components\app as components;

abstract class Seo extends \vendor\Module
{

    public function get_title($action, $params = null)
    {
        return '';
    }


    public function get_keywords($action)
    {
        return '';
    }


    public function get_description($action, $params = null)
    {
        return '';
    }
}
