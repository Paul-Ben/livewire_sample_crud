<?php

namespace App\Livewire\Student;

use App\Models\Section;
use App\Models\Student;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $students = Student::paginate(10);
        return view('livewire.student.index', compact( 'students'));
    }
}
