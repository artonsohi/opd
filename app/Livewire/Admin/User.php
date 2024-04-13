<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]

class User extends Component
{
    public function render()
    {
        return view('livewire.admin.user');
    }
}
