<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class EditarUsuario extends Component
{

    public ?User $user = null;

    // recebendo usuarios & espero que ele inicialize como user
    public function mount( User $user )
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.editar-usuario');
    }

    public function edit()
    {
        $this->user->name = fake()->name;
        $this->user->save();

        $this->emit('user::updated');
        
    }
}