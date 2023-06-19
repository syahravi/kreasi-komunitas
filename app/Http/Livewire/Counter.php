<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Semangat;

class Counter extends Component
{
    public $count;

    public function mount()
    {
        // Inisialisasi data
        $this->count = Semangat::where('id', 1)->first()->count;
    }
    function increment(){
        $this->count++;
        $count = Semangat::where('id', 1)->first();
        $count->count = $this->count;
        $count->save();
    }
    function decrement() {
        $this->count--;
        $count = Semangat::where('id', 1)->first();
        $count->count = $this->count;
        $count->save();

    }
    public function render(){
        return view('livewire.counter');
    }
}