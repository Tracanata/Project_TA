<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Template · Bootstrap v5.2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">

    <!-- triks editor -->
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: whitesmoke;
        }

        thead {
            text-align: center;
        }

        th {
            text-align: center;
        }

        .container1 {
            display: flex;
            justify-content: center;
        }

        .container2 {
            width: 100%;
            margin: 0 auto;
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 5px;
            margin-top: 10px;
        }

        .profile-pic {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin: 20px auto;
            /* display: block; */
        }

        .info {
            /* text-align: center; */
            margin-bottom: 10px;
        }

        .info h6 {
            margin: 5px 0;
        }

        .info p {
            margin: 5px 0;
        }

        .section {
            margin-bottom: 20px;
        }

        .section h2 {
            color: #333;
            margin-bottom: 10px;
        }

        .section p {
            margin: 5px 0;
        }

        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }

        .scroll-bg {
            background: whitesmoke;
            width: 950px;
            /* margin: 10%; */
            padding: 10px 20px;
            border-radius: 30px;
        }

        .scroll-div {
            width: 900px;
            background: whitesmoke;
            height: 300px;
            overflow: hidden;
            overflow-y: scroll;
        }

        .scroll-object {
            color: black;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 15px;
            padding: 20px;
        }
    </style>
</head>



<body>

    @include('dashboard.layouts.header')

    <div class="container-fluid">
        <div class="row">
            @include('dashboard.layouts.sidebar')
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('container')
            </main>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="/js/dashboard.js"></script>
</body>

</html>