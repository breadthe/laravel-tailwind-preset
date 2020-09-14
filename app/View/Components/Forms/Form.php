<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Form extends Component
{
    public string $action;
    public string $method;

    public function __construct(string $action, string $method = 'POST')
    {
        $this->action = $action;
        $this->method = $method;
    }

    public function render()
    {
        return view('components.forms.form');
    }
}
