<?php

    namespace Util;

    class Input{
        public static function info(string $info){
            echo "$info: ";
            $output = fgets(STDIN);
            return trim($output);
        }
    }

?>
