<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Music Store</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/insert">Add item</a></li>
        </ul>
      </nav>
    </header>
    <main>
      @yield('main')
    </main>
  </body>
</html>
