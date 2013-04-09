<?php

require_once Kohana::find_file("vendor", "cssmin/source/CssMin");

class Minify_Driver_CssMin extends Minify_Driver {

    public function minify($input) {
        return CssMin::minify($input);
    }

}

?>
