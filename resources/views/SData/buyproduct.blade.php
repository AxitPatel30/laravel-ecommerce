<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- bootstreap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    {{-- stle of layout  --}}
    <style>
        /* section 1 */
        .section-1 {
            width: 100%;
            height: 112px;
            box-shadow: 0 1px 1px 0 rgb(0 0 0 / 16%);
            color: white;
        }

        .section-1-container {
            width: 1280px;
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
</head>

<body class="bg bg-dark">
    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
            @auth
                <a href="{{ url('/dashboard') }}" style="margin-right: 2rem" class="nav-link">Dashboard</a>
            </li>
            <li class="nav-item">
            @else
                <a href="{{ route('login') }}" style="margin-right: 2rem" class="nav-link">Log in</a>

            </li>
            <li class="nav-item">
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                @endif
            @endauth
        </li>
    </ul>
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0  text-right z-10"style="margin-right: 2rem; margin-top: 1rem">
    @endif
    {{-- data  --}}
    @foreach ($data as $data)
    <div class="card" >
        <div id="carouselExampleFade" class="carousel slide carousel-fade " >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ url("uploads/photos/$data->photo2")}}" class="d-block w-100" alt="..." style="height: 600px;">
              </div>
              <div class="carousel-item">
                <img src="{{ url("uploads/photos/$data->photo3")}}" class="d-block w-100" alt="..." style="height: 600px;" >
              </div>
              <div class="carousel-item">
                <img src="{{ url("uploads/photos/$data->photo4")}}" class="d-block w-100" alt="..." style="height: 600px;">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
            
          </div>
          <div class="about text-light">
            <h1>about</h1>
            <table class="table table-success table-striped  d-flex justify-content-center">
               <tr>
                <td>Product Name</td>
                <td>{{$data->productname}}</td>
               </tr>
               <tr>
                   <td>Discription</td>
                   <td>{{$data->description}}</td>
                </tr>
                <tr>
                 <td>orignal-Price</td>
                 <td>{{$data->price}}</td>
                </tr>
                <tr>
                    <td>discounted-Price</td>
                    <td>{{$data->price - 1500}}</td>
                   </tr>
                <tr>
                 <td>Delavirycharge</td>
                 <td>250</td>
                </tr>
                <tr>
                 <td>Totel Bil =</td>
                 <td>{{$data->price +250-1500}}</td>
                </tr>
                <tr>
                    <td><a href="/dashboard">buy now</a></td>
                </tr>
            </table>
          </div>
    @endforeach
</body>

</html>
