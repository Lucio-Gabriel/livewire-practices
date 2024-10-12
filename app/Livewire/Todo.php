<?php

namespace App\Livewire;

use Livewire\Component;

class Todo extends Component
{

    public string $name = '';

    // o metodo que vou receber
    protected $listeners = [
        'mudaai' => 'vai'
    ];

    public function render()
    {
        return view('livewire.todo');
    }

    // o metodo que vou enviar
    public function vai($data)
    {
        dd($data);
    }

}