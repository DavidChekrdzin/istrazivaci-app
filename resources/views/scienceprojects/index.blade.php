<x-layout>
    <h2>Currently Available Science Projects</h2>
  
    <ul>
      @foreach($scienceProjects as $scienceProject)
        <li>
          <x-card :highlight="$scienceProject->scientists()->count() == 0 " href="{{route('scienceprojects.show', $scienceProject->id)}}">
            <div>
              <h3>Name: {{ $scienceProject->name }}</h3>
              <p>Project description: {{ $scienceProject->description }}</p>
              <p>Number of scientists working on the project: {{ $scienceProject->scientists()->count() }}</p>
              <p>
                @if ($scienceProject->scientists()->count() == 0) 
                No scientists working on this project
                @endif
              </p>
            </div>
          </x-card>
        </li>
      @endforeach

    </ul>

  {{ $scienceProjects->links() }}
  </x-layout>