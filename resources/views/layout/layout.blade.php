<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel w/ Vite</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script type="module" src="./js/main.js"></script>
  </head>
  <body>
    <div class="container">
        <ul class="nav">
            <li class="nav-item">Home</li>
            <li class="nav-item">Pricing</li>
            <li class="nav-item">Features</li>
            <li class="nav-item">Contact</li>
            <li class="nav-item">Author</li>
        </ul>
        <ul class="nav">
            <li class="nav-item">Login</li>
            <li class="nav-item">Sign Up</li>
        </ul>
    </div>
  </body>
</html>
