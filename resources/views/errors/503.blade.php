<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/app.css">
    <title>Mi sitio</title>
</head>
<body>
    <div class="container">
        <h1>Estamos actualizando el sitio</h1>
        <p>Por favor intenta de nuevo más tarde</p>
        <a href="{{ route('home') }}">Regresar al home</a>
      	<div class="errorimg">
      		<img src="{{ asset('/images/error.jpg') }}" alt="error">
      </div>
    </div>
    <script src="/js/app.js"></script>
</body>
</html>
