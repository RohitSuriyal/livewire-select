<?php

namespace App\Livewire\Practice;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $search, $name, $attr;




    public function mount() {}

    public function handleSelectChange()
    {
         if($this->name){
           dd($this->name,$this->attr);
         }

         //yahan bhi aa sakte hai  agar select ka data save karna hai
    }


    public function render()
    {

      
        if($this->name){
            dd("swagnera desi");
        }
        //yahan bhi aa sakte hai age frontnedn pe koi change karna hai

        $query = User::query();

        if ($this->search) {
            dd("this is qury");
            $query = $query->where('name', 'like', '%' . $this->search . '%');
        }

        $users = $query->get();
        // $users=$query->paginate(2);

        // SELECT * FROM users LIMIT 2 OFFSET 0;

        return view('livewire.practice.index', compact('users'));
    }
}
