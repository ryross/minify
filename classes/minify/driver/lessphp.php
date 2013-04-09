<?php

require_once Kohana::find_file("vendor", "lessphp/lessc.inc");

class Minify_Driver_lessphp extends Minify_Driver {

    private $compiler;

    public function __construct() {
        $this->compiler = new lessc();
        $this->compiler->setFormatter("compressed");
    }

    public function minify($input) {
        return $this->compiler->compile($input);
    }

}

?>
