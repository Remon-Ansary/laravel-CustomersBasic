
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @extends('layout')

    @section('content')


    <form class="pb-5" action="datascan" method="POST">
      <input type="text"name="name">
   <button type="submit">Add Customer</button>
   @csrf

    </form>
     <ul>
        @foreach ($i as $name)
         <li> {{$name->name}}</li>
    @endforeach

     </ul>
    @endsection


  </body>
</html>
