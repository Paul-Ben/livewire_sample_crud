<div>
    <div class="w-1/2 mx-auto mt-6">
        <table class="min-w-full bg-white shadow-md bordered rounded">
            <thead>
            <tr>
                <th class="text-left py-3 px-4 font-semibold uppercase text-sm">Name</th>
                <th class="text-left py-3 px-4 font-semibold uppercase text-sm">Email</th>
                <th class="text-left py-3 px-4 font-semibold uppercase text-sm">Class</th>
                <th class="text-left py-3 px-4 font-semibold uppercase text-sm">Section</th>
                <th class="text-left py-3 px-4 font-semibold uppercase text-sm">Actions</th>
            </tr>
            </thead>
            <tbody>
                @forelse($students as $student)
            <tr>
                <td class="py-3 px-4">{{$student->name}}</td>
                <td class="py-3 px-4">{{$student->email}}</td>
                <td class="py-3 px-4">{{$student->classes->name}}</td>
                <td class="py-3 px-4">{{$student->sections->name }}</td>
                <td class="py-3 px-4">Edit | Delete</td>
                @empty
                <p>No students found.</p>
                @endforelse
            </tr>
            
            </tbody>
        </table>
        {{-- Pagination --}}
        <div class="my-8">
            {{$students->links()}}
        </div>
    </div>
</div>
