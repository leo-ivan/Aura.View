<?php
namespace Aura\View\Helper\Input;

class Checked extends Value
{
    protected function prep()
    {
        // use strict equality so that there is no confusion between
        // 0/'0'/false/null/''.
        if ($this->value === $this->attribs['value']) {
            $this->attribs['checked'] = 'checked';
        } else {
            $this->attribs['checked'] = null;
        }
    }
}