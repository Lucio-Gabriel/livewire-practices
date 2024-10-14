<?php

namespace App\Livewire;

use App\Models\Driver;
use Livewire\Component;

class ListDrivers extends Component
{

    public ?Driver $driver = null;

    public function render()
    {
        return view('livewire.list-drivers', [
            'drivers' => Driver::all()
        ]);
    }

    
}
