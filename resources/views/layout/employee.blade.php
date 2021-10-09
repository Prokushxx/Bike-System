<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee | @yield('page_title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<x-modal :brands=" $brands = \App\Models\Bike\Bike_Brand::all()->toArray() "
         :catogries="$catogories = \App\Models\Bike\Bike_Category::all()->toArray()" />

<div class="flex justify-start w-full">
    <div>
        <x-employee_sidebar/>
    </div>
    <div class="w-screen h-screen overflow-y-scroll" >
        <x-employee_navi/>
        <div class="">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
