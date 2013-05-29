<?php
/**
 * 
 * This file is part of the Aura Project for PHP.
 * 
 * @package Aura.Html
 * 
 * @license http://opensource.org/licenses/bsd-license.php BSD
 * 
 */
namespace Aura\Html\Helper\Input;

/**
 * 
 * A generic HTML input value.
 * 
 * @package Aura.Html
 * 
 */
class Value extends AbstractInput
{
    /**
     * 
     * Returns the HTML for the input.
     * 
     * @return string
     * 
     */
    protected function html()
    {
        // set the type
        $this->attribs['type'] = $this->type;
        
        // only set value if not null
        if ($this->value !== null) {
            $this->attribs['value'] = (string) $this->value;
        }
        
        // build html
        return $this->indent(0, $this->void('input', $this->attribs));
    }
}