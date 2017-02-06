<?php
/*
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
class Benchmark {

    var $marker = array();

    function mark($name) {
            $this->marker[$name] = microtime();
    }


    function __construct($point1 = '', $point2 = '', $decimals = 4) {
            if ($point1 == '') {
                    return '{elapsed_time}';
            }

            if ( ! isset($this->marker[$point1])) {
                    return '';
            }

            if ( ! isset($this->marker[$point2])) {
                    $this->marker[$point2] = microtime();
            }

            list($sm, $ss) = explode(' ', $this->marker[$point1]);
            list($em, $es) = explode(' ', $this->marker[$point2]);

            return number_format(($em + $es) - ($sm + $ss), $decimals);
    }

    function memory_usage() {
            return '{memory_usage}';
    }
}