<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;



#[Layout('layout.auth.auth')]
#[Title('Đăng nhập')]
class Login extends Component
{
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.auth.login');
    }
    public function loginProcess()
    {
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            // dd('Success');
            return redirect()->route('admin.home');
        } else {
            dd('sai tk hoac mk');
        }
    }
}
