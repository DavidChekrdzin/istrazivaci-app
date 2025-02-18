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
      <a href="{{ route('scientists.create') }}">
        Create New Scientist
      </a>
      <a href="{{ route('scienceprojects.index') }}">
        All Science Projects
      </a>
      <a href="{{ route('scienceprojects.create') }}">
        Create New Science Project
      </a>
    </nav>
  </header>

  <main class="container">
    {{ $slot }}
  </main>
</body>
</html>
