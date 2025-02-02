<x-layout>
    <form action="{{ route('scientists.update', $scientist->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Indicate that this is an update request -->

        <h2>Update a Scientist</h2>

        <!-- Scientist Name -->
        <label for="name">Scientist Name:</label>
        <input 
            type="text" 
            id="name" 
            name="name"
            value="{{ old('name', $scientist->name) }}" 
            required
        >

        <!-- Scientist age -->
        <label for="age">Scientist age (18-100):</label>
        <input 
            type="number" 
            id="age" 
            name="age"
            value="{{ old('age', $scientist->age) }}"
            required
        >

        {{-- Uncomment and adjust if needed for selecting a dojo --}}
        {{-- 
        <label for="dojo_id">Dojo:</label>
        <select id="dojo_id" name="dojo_id" required>
            <option value="" disabled selected>Select a dojo</option>
            @foreach ($dojos as $dojo)
                <option value="{{ $dojo->id }}" {{ $dojo->id == old('dojo_id', $scientist->dojo_id) ? 'selected' : '' }}>
                    {{ $dojo->name }}
                </option>
            @endforeach
        </select>
        --}}

        <button type="submit" class="btn mt-4">Update Scientist</button>

        <!-- validation errors -->
        @if ($errors->any())
            <ul class="px-4 py-2 bg-red-100">
                @foreach ($errors->all() as $error)
                    <li class="my-2 text-red-500">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </form>
</x-layout>