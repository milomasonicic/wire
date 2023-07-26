<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Counter extends Component
{
    public int $count = 10;
    public $name;
    public $email;
    public $password;
    public $message1;

    protected $rules = [ 
        'name'=>'required|min:5',
        'email'=>'required|email',
        'password'=>'required|min:6',

    ];

    public function updated($propretyName)
    {
        $this->validateOnly($propretyName);
    }    

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.counter');
    }

    public function mount()
    {
        $this->count = 5;
    }

    public function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }
    public function submit()
    {
        $this->validate();

        User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password,
        ]);
        
        $this->resetForm();
        $this->message1 = 'succes';
    }

}
