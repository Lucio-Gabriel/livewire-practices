<?php

namespace App\Livewire;

use Livewire\Component;

class Contador extends Component
{

    public ?string $name = 'Gabriel';

    public function render()
    {
        return view('livewire.contador');
    }

    public function getDadosProperty(){

        return  'profissao: Desenvolvedor Back-End';

    }
}