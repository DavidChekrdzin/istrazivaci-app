<x-layout>
    <form action="{{ route('scienceprojects.store') }}" method="POST">
      <!-- CSRF token for security -->
      @csrf
  
      <h2>Create a New Science Project</h2>
  
      <label for="name">Science Project Name:</label>
      <input 
        type="text" 
        id="name" 
        name="name"
        value="{{ old('name') }}" 
        required
      >
  
      <label for="age">Science Project Description (Maximum 1000 characters):</label>
      <input 
        type="text" 
        id="description" 
        name="description"
        value="{{ old('description') }}"
        required
      >
  
      <button type="submit" class="btn mt-4">Create Science project</button>
  
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