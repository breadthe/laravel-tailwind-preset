<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Error extends Component
{
    public string $field;

    public function __construct(string $field)
    {
        $this->field = $field;
    }

    public function render()
    {
        return view('components.forms.error');
    }
}
