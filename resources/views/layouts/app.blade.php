<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    {{-- bootstreap  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- Scripts -->
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        /* section 1 */
        .section-1 {
            width: 100%;
            height: 112px;
            box-shadow: 0 1px 1px 0 rgb(0 0 0 / 16%);
            color: white;
        }

        .section-1-container {
            width: 1280px;
            margin: 0 auto;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;


        }

        .section-1-item {
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 4px;
            font-size: 14px;
            font-weight: 500;
        }

        .section-1-item img {
            width: 64px;
            height: 64px;
        }

        /* footer */
        footer {
            margin-top: 26px;
            padding: 25px;
            text-align: center;
            font-size: 14px;
            color: #878787;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 bg-dark">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            <!-- section 1 -->
            <section class="section-1">
                <div class="section-1-container">
                    <div class="section-1-item">
                      <img src="https://rukminim1.flixcart.com/fk-p-flap/128/128/image/178cf5a874cd697a.png?q=100"
                            alt="">
                        Top Offers
                    </div>
                    <div class="section-1-item">
                        <a href="/mobiles"><img src="https://rukminim1.flixcart.com/fk-p-flap/128/128/image/e2268d56d09df684.png?q=100"
                            alt=""></a>
                        Mobiles & Tablets
                    </div>
                    <div class="section-1-item">
                        <a href="/Electronics"><img src="https://rukminim1.flixcart.com/fk-p-flap/128/128/image/6e3e1efa83bc56c3.png?q=100"
                            alt=""></a>
                        Electronics
                    </div>
                    <div class="section-1-item">
                        <a href="/TVs"><img src="https://rukminim1.flixcart.com/fk-p-flap/128/128/image/b3e1225e6bda1c9e.png?q=100"
                            alt=""></a>
                        TVs & Appliances
                    </div>
                    <div class="section-1-item">
                        <a href="/Fashion"><img src="https://rukminim1.flixcart.com/fk-p-flap/128/128/image/a11d5d13e54bf964.png?q=100"
                            alt=""></a>
                        Fashion
                    </div>
                    <div class="section-1-item">
                        <a href="/Beauty"><img src="https://rukminim1.flixcart.com/fk-p-flap/128/128/image/5f09b2d254acb48a.png?q=100"
                            alt=""></a>
                        Beauty
                    </div>
                    <div class="section-1-item">
                        <a href="/Furniture"><img src="https://rukminim1.flixcart.com/fk-p-flap/128/128/image/5972d5da375c81c7.png?q=100"
                            alt=""></a>
                        Home & Furniture
                    </div>
                    <div class="section-1-item">
                        <a href="/Grocery"> <img src="https://rukminim1.flixcart.com/fk-p-flap/128/128/image/d154c0b4d536c1cf.png?q=100"
                            alt=""></a>
                        Grocery
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>

</html>
