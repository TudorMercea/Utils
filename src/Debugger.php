<?php

namespace TudorMercea\Utils\Debugger;

class Debugger {
    public static function tmvpr($var, $developer = null, $die = false, $diedby = '') {
        if (!empty($var)) {
            echo '<pre>';
            print_r($var);
            echo '</pre>';
        }

        if ($die && $diedby != '') {
            exit('Died by' . $diedby);
        } elseif ($die && $diedby === '') {
            exit();
        }
    }
}