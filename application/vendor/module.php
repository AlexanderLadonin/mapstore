<?php
/*
 * Class vendor\Module
 *
 * Базовый класс модулей
 */
namespace vendor;

abstract class Module extends Component {

    use \vendor\traits\patterns\t_singleton;

}
