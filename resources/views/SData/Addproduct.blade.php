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
                <a href="{{ url('/Products') }}" style="margin-right: 2rem" class="nav-link">See All Product</a>
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
    <form class="row g-3 position-relative py-2 px-5 text-light m-2" method="POST" action="{{ route('ProductToDB') }}" enctype="multipart/form-data">
        @csrf
        <h1>Add New Product</h1>
        <div class="form-group">
            <table align="center" spa>
                <tr>
                    <td> <label for="exampleFormControlFile1">Add first image</label>
                        <input type="file" class="form-control-file p-4" id="exampleFormControlFile1" name="photo" style="padding-left: 1.5rem" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="exampleFormControlFile1" >Add second image</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo2">
                    </td>
                </tr>
                <tr>
                    <td> <label for="exampleFormControlFile1" >Add third image</label>
                        <input type="file" class="form-control-file p-3" id="exampleFormControlFile1" name="photo3">
                    </td>
                </tr>
                <tr>
                    <td> <label for="exampleFormControlFile1" >Add third image</label>
                        <input type="file" class="form-control-file p-3" id="exampleFormControlFile1" name="photo4">
                    </td>
                </tr>
            </table>
            <div class="row pt-4">
                <div class="col">
                    <input type="text" class="form-control" placeholder="category" aria-label="First name"
                        name="category">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="productname" aria-label="Last name"
                        name="productname">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="price" aria-label="Last name"
                        name="price">
                </div>
            </div>
                <div class="col-sm-10">
                    <input type="text" name="description" class="form-control form-control-lg mt-4" id="colFormLabelLg" placeholder="Discribe Your Product" align="center">
                  </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mt-2 ">Add product</button>
            </div>
        </div>
    </form>
</body>

</html>
