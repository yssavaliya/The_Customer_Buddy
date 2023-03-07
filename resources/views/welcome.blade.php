<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-[url('/images/saturn_earth.jpg')] bg-cover">
  <div class="translate-x-20 translate-y-20">
    <p class="text-slate-300 hover:text-white text-3xl">Welcome,<br>
    To The SQL Buddy </p>
  </div>

  <div class="translate-x-20 translate-y-20">
    <p class="text-slate-300 hover:text-white text-1xl">
      <?php
        echo date("j F".","." y"); // prints the date in the format: day month year
      ?>
    </p>
  </div>
  <a href="/home" class="absolute top-3/4 left-1/2 inline-block px-4 py-2 font-semibold text-white border-2 border-white rounded-lg hover:bg-transparent hover:border-white hover:text-white transition-all duration-300">
  <span class="inline-block transform rotate-90 hover:rotate-0 transition duration-300 ease-in-out text-2xl">&#8594;</span>
</a>

</body>
</html>
