<?php
/*
 * Class modules\base\mailer\Mailer
 */
namespace modules\base\mailer\classes;
use \components\app as components;

abstract class Mailer extends \vendor\Module
{
    protected $info_email;
    protected $info_name;

    protected function __construct(){
        $this->info_email=self::get_module(MY_MODULE_NAME_SERVICE)->get_email_from(1);
        $this->info_name=self::get_module(MY_MODULE_NAME_SERVICE)->get_email_name(1);
    }
}