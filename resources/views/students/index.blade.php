
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Students') }}
        </h2>
    </x-slot>
    <div class="mx-auto mt-6 p-7">
        <a href="{{ route('students.create')}}" class="bg-blue-500 hover:bg-blue-700 float-right text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" as="button">Add Student</a>
    </div>
    @livewire('student.index')
    
</x-app-layout>