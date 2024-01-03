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
    <form class="row g-3 text-light" method="POST" action="/Usersdata">
        <h1>add your data for use data in every order</h1>
        @csrf
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail4" name="emailadd">
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">name</label>
          <input type="text" class="form-control" id="inputEmail4" name="name">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Address</label>
          <input type="text" class="form-control" id="inputAddress" name="Address">
        </div>
        <div class="col-md-4">
          <label for="inputAddress2" class="form-label">city</label>
          <input type="text" class="form-control" id="inputAddress2" name="city">
        </div>
        <div class="col-md-4">
          <label for="inputAddress2" class="form-label">state</label>
          <input type="text" class="form-control" id="inputAddress2" name="state">
        </div>
        <div class="col-md-4">
          <label for="inputAddress2" class="form-label">country</label>
          <input type="text" class="form-control" id="inputAddress2" name="country">
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Add Data</button>
        </div>
      </form>
</body>

</html>
