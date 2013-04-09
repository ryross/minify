<?php

require_once Kohana::find_file("vendor", "cssmin/source/CssMin");

/**
 * Minification driver for css using cssmin.
 * 
 * @see http://code.google.com/p/cssmin/
 * 
 * @package Minify
 * @category Drivers
 * @license http://opensource.org/licenses/mit-license.php
 */
class Minify_Driver_cssmin extends Minify_Driver {

    public function minify($input) {
        return CssMin::minify($input);
    }

}

?>
