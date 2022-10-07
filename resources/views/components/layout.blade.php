<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>{{ $title }} - Cubic</title>
</head>
<body class="container">

  <h1 class="mt-5">{{ $title }}</h1>

  {{ $slot }}

</body>
</html>