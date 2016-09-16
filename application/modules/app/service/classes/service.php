<?php
/*
 * Class modules\app\service\classes\Service
 */
namespace modules\app\service\classes;

abstract class Service extends \vendor\Module
{
    protected $config = array();
    protected $words = array();
    protected $path = '';

    protected function __construct()
    {
        $this->path = MY_SERVICES_DIR . get_service_name() . MY_DS;
        $this->config = require_once($this->path . 'config' . MY_DS . 'config.php');
    }

    public function get_site_name()
    {
        return '';
    }

    public function get_blocks_path()
    {
        return '';
    }
}

//Пример: self::get_module(MY_MODULE_NAME_SERVICE)->get_blocks_path();
