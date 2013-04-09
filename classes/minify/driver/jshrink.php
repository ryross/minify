<?php

require_once Kohana::find_file("vendor", "JShrink/src/JShrink/Minifier");

class Minify_Driver_JShrink extends Minify_Driver {

    public function minify($input) {
        return JShrink\Minifier::minify($input);
    }

}

?>
