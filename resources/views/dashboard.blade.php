@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Dashboard</h1>
        <a href="{{ route('violations.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">
            Add New Violation
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left">Student Name</th>
                    <th class="px-6 py-3 text-left">Class</th>
                    <th class="px-6 py-3 text-left">Major</th>
                    <th class="px-6 py-3 text-left">Violation Type</th>
                    <th class="px-6 py-3 text-left">Date</th>
                    <th class="px-6 py-3 text-left">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($violations as $violation)
                <tr>
                    <td class="px-6 py-4">{{ $violation->student->name }}</td>
                    <td class="px-6 py-4">{{ $violation->student->class }}</td>
                    <td class="px-6 py-4">{{ $violation->student->major }}</td>
                    <td class="px-6 py-4">{{ $violation->type }}</td>
                    <td class="px-6 py-4">{{ $violation->date->format('Y-m-d') }}</td>
                    <td class="px-6 py-4 space-x-2">
                        <a href="{{ route('violations.edit', $violation->id) }}" class="text-blue-500 hover:text-blue-600">Edit</a>
                        <form action="{{ route('violations.destroy', $violation->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-600">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection