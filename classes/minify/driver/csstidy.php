<?php

require_once Kohana::find_file("vendor", "CSSTidy/class.csstidy");

class Minify_Driver_CSSTidy extends Minify_Driver {
    
    public function minify($input) {
        $compiler = new csstidy();
        $compiler->parse($input);
        return $compiler->print->formatted();
    }    
}

?>
