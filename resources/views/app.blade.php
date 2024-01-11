<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    @routes()
    @inertiaHead
  </head>
  <body>
    <div class="relative flex justify-center min-h-screen items-top sm:items-center">
        @inertia
    </div>
  </body>
</html>
