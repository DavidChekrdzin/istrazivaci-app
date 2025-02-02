<x-layout>
    <h2>{{ $scientist->name }}</h2>
  
    <div class="bg-gray-200 p-4 rounded">
      <p><strong>Age:</strong> {{ $scientist->age }}</p>
    </div>
  
    
        <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
      <h3>Science Project Information</h3>
      <p><strong>Science Project name:</strong> {{ $scientist->science_project->name }}</p>
      <p><strong>Project Description:</strong> {{ $scientist->science_project->description }}</p>
    </div>
    

    <form action="{{ route('scientists.destroy', $scientist->id) }}" method="POST">
      @csrf
      @method('DELETE')
  
      <button type="submit" class="btn my-4">Delete Scientist</button>
    </form>
    
    <form action="{{ route('scientists.edit', $scientist->id) }}" method="GET">
      @csrf
      <button type="submit" class="btn my-4">Edit Scientist</button>
    </form>
  </x-layout>