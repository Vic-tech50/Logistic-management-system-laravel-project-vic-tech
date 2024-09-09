<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Sky Logistic') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{asset('w3/w32.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('font-awesome/font-awesome.css')}}">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        

        @notifyCss
         <link rel="stylesheet" href="{{ asset('datatables/dataTables.bootstrap4.css') }}">
        <script src="https://cdn.tailwindcss.com"></script>
          <script src="{{asset('jsx/tinymce/tinymce.min.js') }}"></script>

          <script src="js/jquery-3.2.1.min.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('admin/css/bootstrap.min.css')}}"> -->

<link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" />
  
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        @include('notify::components.notify')
        <x-notify::notify />
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

            <!-- <script src="{{ asset('datatables/jquery.dataTables.js') }}"></script>    -->
  <!-- <script src="{{ asset('datatables/dataTables.bootstrap4.js') }}"></script> -->
  <!-- <script src="{{ asset('datatables/dataTables.bootstrap4.min.js') }}"></script> -->
<script>
    $(document).ready(function(){
        $('#tab').DataTable();
    });
</script>

   
        @notifyJs
    </body>
</html>
