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
    public $mySelect = [];
    public $selectAll = false;
    public $firstId = null;


    #[On('user-reload-table')]
    public function render()
    {
        $users = User::paginate($this->page);
        $this->firstId = $users[0]->id;
        return view('livewire.user.index', [
            'users' => $users
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
            method: 'deleted',
        );
    }

    #[On('deleted')]
    public function deleteConfirmed($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            $this->render();
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
        $userCount = User::paginate($this->page)->count();
        if ($this->selectAll == true) {
            $this->mySelect = User::where('id', '>=', $this->firstId)
                ->orderBy('id', 'asc')
                ->limit($userCount)
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
                text: 'Bạn có chắc xoá ' . count($this->mySelect) . ' người dùng',
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
        User::destroy($id);
        $this->resetMySelect();
        $this->dispatch('user-reload-table')->to(\App\Livewire\User\Index::class);
    }
}
