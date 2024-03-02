<?php

namespace App\Livewire\Student;

use App\Models\Classes;
use Livewire\Component;

class Create extends Component
{
    public function render()
    {
        $classes = Classes::all();

        return view('livewire.student.create', compact('classes'));
    }
}
