<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Components in Laravel 7</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.8.10/tailwind.min.css" integrity="sha512-KO1h5ynYuqsFuEicc7DmOQc+S9m2xiCKYlC3zcZCSEw0RGDsxcMnppRaMZnb0DdzTDPaW22ID/gAGCZ9i+RT/w==" crossorigin="anonymous" />
</head>
<body class="flex flex-col items-center">
    <x-sidebar title="My Sidebar" :info="$info" class="bg-gray-500">
        
        <x-slot name="x_title">Define x-slot by named x_title, and printed in component</x-slot>
        <div>More Text ~</div>

    </x-sidebar> 
    <!-- organise with folder -->
    <x-partials.pagination />
</body>
</html>