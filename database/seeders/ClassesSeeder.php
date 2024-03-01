<?php

namespace Database\Seeders;

use App\Models\Section;
use App\Models\Classes;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classes::factory()
         ->count(5)
         ->sequence(fn ($sequence) => ['name' => 'class'. $sequence + 1])
         ->has(
            Section::factory()
                ->count(3)
                ->state(
                    new Sequence(
                        ['name'=>'section A'],
                        ['name'=>'section A'],
                    )
                )
                ->has(
                    Student::factory()
                        ->count(2)
                        ->state(
                            function (array $attributes, Section $section){
                                return ['class_id' => $section->class_id];
                            }
                        ),
                )
         )
         ->create();
    }
                    
    
}
