<!DOCTYPE html>
<html>
<head>
    <title>Laravel Cards</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300|Source+Code+Pro:300" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Open Sans', sans-serif;
        }

        .text-fixed-width {
            font-family: 'Source Code Pro', monospace;
        }
    </style>
</head>
<body>
<div class="container-fluid">

    <div class="row">
        <h1 class="display-2 text-center">Laravel Cards</h1>
    </div>

    <div class="card-columns">
        @foreach ( $cards as $card )
        <div class="card card-block card-inverse text-center" style="background-image: {{ $card->image }}">
            <div class="card-block">
                <h2 class="card-title text-fixed-width">{{ $card->card_id }}</h2>
                <h4 class="card-text">{{ $card->title }}</h4>
                <p class="card-text">{{ $card->body }}</p>
            </div>
        </div>
        @endforeach
    </div>

</div>
</body>
</html>
