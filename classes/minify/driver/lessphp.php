<?php

defined('SYSPATH') OR die('No direct access allowed.');

require_once Kohana::find_file("vendor", "lessphp/lessc.inc");

/**
 * Minifier less.
 * 
 * @see http://leafo.net/lessphp/
 * 
 * @package Minify
 * @category Drivers
 * @license GPL3/MIT
 */
class Minify_Driver_lessphp extends Minify_Driver {

    private $compiler;

    public function __construct(array $options) {
        parent::__construct($options);
        $this->compiler = new lessc();
        $this->compiler->setFormatter("compressed");
    }

    public function minify($input) {
        return $this->compiler->compile($input);
    }

}

?>
