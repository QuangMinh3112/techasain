<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\WithPagination;
use App\Models\User;
use Livewire\Attributes\On;

use function Laravel\Prompts\text;

#[Layout('layout.app.layout')]
#[Title('Quản lý tài khoản')]
class Index extends Component
{
    use WithPagination;
    public $page = 10;
    public $stt = 1;
    public $mySelected = [];
    public $selectedAll = false;
    public $firstId = null;


    public function mount()
    {
        $this->mySelected = [];
    }
    public function render()
    {
        return view('livewire.user.index', [
            'users' => User::paginate($this->page)
        ]);
    }
    public function deleteUser($id)
    {
        $user = User::find($id);
        $this->dispatch(
            'confirm',
            title: 'Bạn đã chắc chưa ?',
            text: 'Bạn có chắc xoá người dùng ' . $user->name,
            confirmText: 'Có, tôi đã chắc',
            cancelText: 'Không',
            userId: $user->id,
        );
    }

    #[On('deleted')]
    public function deleteConfirmed($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
        }
    }
    public function updateSelectedId($id, $value)
    {
        if ($value) {
            $this->mySelected[] = $id;
        } else {
            $index = array_search($id, $this->mySelected);
            if ($index !== false) {
                unset($this->mySelected[$index]);
            }
        }
    }
    public function skipHydrate()
    {
        $this->mySelected = [];
    }
    public function deleteAll()
    {
        dd($this->mySelected);
    }
}
