<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Input extends Component
{
    public string $name;
    public ?string $id;
    public string $type;
    public ?string $value;
    public bool $required;
    public bool $autofocus;

    public function __construct(string $name, string $id = null, string $type = 'text', ?string $value = '', $required = false, $autofocus = false)
    {
        $this->name = $name;
        $this->id = $id ?? $name;
        $this->type = $type;
        $this->value = old($name, $value ?? '');
        $this->required = $required;
        $this->autofocus = $autofocus;
    }

    public function render()
    {
        return view('components.forms.input');
    }
}
