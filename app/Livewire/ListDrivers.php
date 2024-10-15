<?php

namespace App\Livewire;

use App\Models\Driver;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class ListDrivers extends Component
{

    public ?Driver $driver = null;

    public $search = '';


    protected $queryString = [
        'search' => ['except' => '', 'as'=> 'q']
    ];

    public function render()
    {
        return view('livewire.list-drivers', [
            'drivers' => Driver::query()
                ->when($this->search, fn( Builder $q ) => $q->where('name',  'like', '%'. $this->search .'%'))
                ->get()


        ]);
    }


}