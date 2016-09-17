<?php
/*
 * Class vendor\Controller
 *
 * Базовый класс контроллера
 */
namespace vendor;

abstract class Controller extends Component {

    use \vendor\traits\patterns\t_singleton;

    /*
     * Результат выполнения контроллера
     * 
     * @var array
     */
    protected $data = array();

    protected function flush_data() {

        $data = $this->data;
        $this->data = null;
        return $data;
    }

}
