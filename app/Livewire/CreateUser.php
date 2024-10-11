<?php

namespace App\Livewire;

use App\Models\User;
use Carbon\Factory;
use Livewire\Component;

class CreateUser extends Component
{
    public function render()
    {
        return view('livewire.create-user', [
            'users' => User::all()
        ]);
    }

    public function submit()
    {
        User::factory()->create([
            'name' => $this->name
        ]);
    }
}