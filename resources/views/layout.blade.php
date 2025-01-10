<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>



    <style>
        .banner {
            background-image: url({{ asset('jumbo-tron.jpg') }} );
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            height: 250px;
        }

        #landing-content {
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            width: 400px;
        }
    </style>
</head>

<body>
    <div class="container">
        <header style="height:60px;padding-top: 10px;">
            <div class="row">
                <div class="col h3">BeeFlix</div>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>
