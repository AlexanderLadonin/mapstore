<?php
/*
 * Class modules\base\archive\classes\Archive
 */
namespace modules\base\archive\classes;

use \modules\base\archive\modules\zip as zip;

class Archive extends \vendor\Component
{

    public function archive($source, $destination, $format = 'zip')
    {
        if ($format === 'zip') {
            $zip = \zip\zip::get_instance();
            return $zip->ToZip($source, $destination);
        }
    }
}
