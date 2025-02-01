<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scientist Manager</title>

  @vite('resources/css/app.css')
</head>
<body>
  @if (session('success'))
    <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
      {{ session('success') }}
    </div>
  @endif

  <header>
    <nav>
      <h1>Scientist Manager</h1>
      <a href="{{ route('scientist.index') }}"> 
        All Scientists
      </a>
      {{--      <a href="{{ route('ninjas.create') }}">
        Create New Scientist
      </a>--}}

    </nav>
  </header>

  <main class="container">
    {{ $slot }}
  </main>
</body>
</html>
