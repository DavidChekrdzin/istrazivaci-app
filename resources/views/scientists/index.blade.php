<x-layout>
    <h2>Currently Available Scientists</h2>
  
    <ul>
      @foreach($scientists as $scientist)
        <li>
          <x-card :highlight="$scientist['age'] > 30" href="">
            <div>
              <h3>Name: {{ $scientist->name }}</h3>
              <p>Age: {{ $scientist->age }}</p>
            </div>
          </x-card>
        </li>
      @endforeach

    </ul>
  {{--{{ $ninjas->links() }}--}}
    
  </x-layout>