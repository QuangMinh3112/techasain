<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('layout.app.layout')]
#[Title('Trang chủ')]
class Index extends Component
{

    public function render()
    {
        return view('livewire.admin.index');
    }
}
