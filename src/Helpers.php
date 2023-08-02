<?php

namespace TudorMercea\Utils\Helpers;

class Helpers {
    public function generate_random_string($length = 10, $offset = 0, $startLetters = '') {
        if ($length < 33) {
            $result = $startLetters . substr(str_shuffle(MD5(microtime())), $offset, $length);
        } else {
            $result = 'error_generating_string';
        }

        return $result;
    }

    public function br2nl($text) {
        return preg_replace('#<br\s*/?>#i', "\n", $text);
    }
}