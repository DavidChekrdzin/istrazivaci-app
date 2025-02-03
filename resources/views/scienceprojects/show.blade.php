<x-layout>
    <h2>{{ $scienceProject->name }}</h2>
  
    <div class="bg-gray-200 p-4 rounded">
      <p><strong>Description:</strong> {{ $scienceProject->description }}</p>
    </div>
  
    
    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
      <p><strong>Number of scientists working on the project:</strong> {{ $scienceProject->scientists()->count() }}</p>
    </div>
    
    <form action="{{ route('scienceprojects.destroy', $scienceProject->id) }}" method="POST">
      @csrf
      @method('DELETE')
  
      <button type="submit" class="btn my-4">Delete Science Project</button>
    </form>
    
    <form action="{{ route('scienceprojects.edit', $scienceProject->id) }}" method="GET">
      @csrf
      <button type="submit" class="btn my-4">Edit Science Project</button>
    </form>

    <ul>
        <li><strong>List of scientists working on the project:</strong></li>
      @foreach($scienceProject->scientists as $scientist)
        <li>
          <x-card :highlight="$scientist['age'] > 30" href="{{route('scientists.show', $scientist->id)}}">
            <div>
              <h3>Name: {{ $scientist->name }}</h3>
              <p>Age: {{ $scientist->age }}</p>
            </div>
          </x-card>
        </li>
      @endforeach
    </ul>
  </x-layout>