<?php

/**
 * @package Minify
 */
class Minify_Less extends Minify_CSS {

    public function __construct($type) {
        parent::__construct($type);
        $this->output_type = "css";
    }

    public function min() {

        require_once Kohana::find_file("vendor", "lessphp/lessc.inc");

        $less_compiler = new lessc();

        $this->input = $less_compiler->compile($this->input);

        return parent::min();
    }

}

?>
