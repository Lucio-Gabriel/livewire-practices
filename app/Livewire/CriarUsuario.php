<?php

namespace App\Livewire;

use Livewire\Component;

class CriarUsuario extends Component
{

    // vai guarda o nome
    public ?string $name = null;

    // vai guarda o emai
    public ?string $email = null;

    protected array $rules = [
        'name' => ['required', 'min:3', 'max:255'],
        'email' => ['required', 'email', 'max:255']
     ];

    public function render()
    {
        return view('livewire.criar-usuario');
    }

    public function updated($prop)
    {

        $this->validateOnly($prop);

    }

    public function  save()
    {
        $this->validate();

        ray('oi');
    }
}