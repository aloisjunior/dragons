<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

    <title>Sollus</title>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">


    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet">

</head>
<body>
<div id="app">
    <v-app id="sollusapp">
        <v-content>
            <v-container fluid fill-height>
                <frontend></frontend>
            </v-container>
        </v-content>
    </v-app>
</div>
</body>
<script src="js/app.js"></script>
</html>
