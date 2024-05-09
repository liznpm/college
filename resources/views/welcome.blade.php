<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Documento HTML</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
<div x-data="{ open: false }">
  @livewire('navigation')
  
  @livewire('banner')
  @livewire('programmes')
  @livewire('multimedia')
  @livewire('stats')
  @livewire('cards')
  @livewire('values')

  @livewire('footer')



</div>
</body>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

</html>
