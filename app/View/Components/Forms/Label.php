<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Label extends Component
{
    public string $for;
    public bool $required;
    public bool $inline; // inline label used for checkboxes/radio buttons - aligned to the right of the element; a bit of a misnomer - in reality all it does is it stays inline on all viewport sizes

    public function __construct(string $for, bool $required = false, bool $inline = false)
    {
        $this->for = $for;
        $this->required = $required ? true : false;
        $this->inline = $inline;
    }

    public function render()
    {
        return view('components.forms.label');
    }
}
