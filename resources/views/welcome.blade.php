<!DOCTYPE html>
<html>
<head>
    <meta id="token" name="token" value="{{ csrf_token() }}">
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

    <div id="cards" class="card-columns">

        <div v-repeat="cards" class="card card-block card-inverse text-center" style="background-image: @{{ image }}">
        <div class="card-block">
        <h2 class="card-title text-fixed-width">@{{ card_id }}</h2>
        <h4 class="card-text">@{{ title }}</h4>
        <p class="card-text">@{{ body }}</p>
        </div>
        </div>

        <div class="navigation">
           @{{ next }}
        </div>
    </div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/0.12.12/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.1.14/vue-resource.min.js"></script>
<script src="/js/app.js"></script>
</body>
</html>
