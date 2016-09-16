<?php
/*
 * Class controllers\Main
 *
 * Контроллер главной страницы
 */
namespace controllers;

final class Main extends \vendor\controller
{

    public function action_index()
    {
        // Подготавливаем данные для отображения в view
        $this->data['title'] = self::get_module(MY_MODULE_NAME_SEO)->get_title('main/index');
        $this->data['keywords'] = self::get_module(MY_MODULE_NAME_SEO)->get_keywords('main/index');
        $this->data['description'] = self::get_module(MY_MODULE_NAME_SEO)->get_description('main/index');
        $this->data['block_path'] = '_pages' . MY_DS . 'main';
        $this->data['data'] = array();

        return $this->data;
    }
}
