<?php

namespace App\Livewire\Supliers;

use App\Models\supplier;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;
use Livewire\Attributes\On;

#[Layout('layout.app.layout')]
#[Title('Quản lý nhà cung cấp')]

class Index extends Component
{
    use WithPagination;
    public $page = 10;

    public $mySelect = [];
    public $selectAll = false;
    public $firstId = null;

    public function render()
    {

        $suppliers = supplier::paginate($this->page);
        $this->firstId = $suppliers[0]->id;
        return view('livewire.supliers.index', [
            'suppliers' => $suppliers,
        ]);
    }
    public function deleteSupplier($id)
    {
        $supplier = supplier::find($id);
        $this->dispatch(
            'confirm',
            title: 'Bạn đã chắc chưa ?',
            text: 'Bạn có chắc xoá nhà cung cấp ' . $supplier->name,
            confirmText: 'Có, tôi đã chắc',
            cancelText: 'Không',
            userId: $supplier->id,
            method: 'deleted',
        );
    }
    #[On('deleted')]
    public function deleteConfirmed($id)
    {
        $supplier = supplier::find($id);
        if ($supplier) {
            $supplier->delete();
        }
    }
    #[On('resetMySelect')]
    public function resetMySelect()
    {
        $this->mySelect = [];
        $this->selectAll = false;
    }
    public function updateMySelect()
    {
        if (count($this->mySelect) == $this->page) {
            $this->selectAll = true;
        } else {
            $this->selectAll = false;
        }
    }
    public function updateSelectAll()
    {
        if ($this->selectAll == true) {
            $this->mySelect = supplier::where('id', '>=', $this->firstId)
                ->orderBy('id', 'asc')
                ->limit($this->page)
                ->pluck('id');
        } else {
            $this->mySelect = [];
        }
    }
    public function deleteAll()
    {
        if (count($this->mySelect) == 0) {
            $this->dispatch(
                'alert',
                type: 'warning',
                title: 'Không có người dùng để xoá',
                position: 'center',
                timer: 1500,
                confirm: false
            );
        } else {
            $this->dispatch(
                'confirm',
                title: 'Bạn đã chắc chưa ?',
                text: 'Bạn có chắc xoá ' . count($this->mySelect) . ' nhà cung cấp',
                confirmText: 'Có, tôi đã chắc',
                cancelText: 'Không',
                userId: $this->mySelect,
                method: 'deletedAll',
            );
        }
    }
    #[On('deletedAll')]
    public function deletedAll($id)
    {
        supplier::destroy($id);
        $this->resetMySelect();
    }
}
