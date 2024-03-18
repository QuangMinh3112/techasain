<?php

namespace App\Livewire\EquipmentType;

use App\Models\equipment_type;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\WithPagination;


#[Layout('layout.app.layout')]
#[Title('Quản lý loại thiết bị')]
class Index extends Component
{
    use WithPagination;

    public $page = 10;

    public $mySelect = [];
    public $selectAll = false;
    public $firstId = null;
    public function render()
    {
        $equipment_types = equipment_type::paginate($this->page);
        return view('livewire.equipment-type.index', [
            'equipment_types' => $equipment_types,
        ]);
    }
}
