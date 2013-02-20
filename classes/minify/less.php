<?php

defined('SYSPATH') or die('No direct script access.');

require_once Kohana::find_file("vendor", "lessphp/lessc.inc");

/**
 * LESS minifier using lessphp compiler.
 * 
 * @see http://leafo.net/lessphp
 * 
 * @package Minify
 * @author Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 * @copyright (c) 2010, Leaf Corcoran, http://leafo.net/lessphp for lessphp 
 * implementation, this is only a wrapper.
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License
 */
class Minify_LESS extends Minify_Core {

    private $LESS_compiler;

    public function __construct($type) {
        
        parent::__construct($type);
        $this->LESS_compiler = new lessc();
        $this->LESS_compiler->setFormatter("compressed");
    }

    /**
     * Compile input from less to css and then use the css minifier.
     *
     * @return string a minified css
     */
    public function min() {

        return $this->LESS_compiler->compile($this->input);
    }

}

?>
