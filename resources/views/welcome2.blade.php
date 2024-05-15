<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
<title>Duo Mobile PWA Kit</title>
<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/css/bootstrap-icons.css" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" crossorigin="anonymous">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700;800&amp;family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet">
<link rel="manifest" href="_manifest.json">
<meta id="theme-check" name="theme-color" content="#FFFFFF">
<link rel="apple-touch-icon" sizes="180x180" href="images/icon-192x192.png"></head>


<script src="/js/jquery-3.5.1.slim.js"> </script>


    <body class="antialiased" >
        <div id="app">
           
        <layout></layout>
        </div>
        <script src="/js/bootstrap.min.js"></script>
<script src="/js/custom.js"></script>
    </body>
    <script src="{{asset('/js/app.js')}}"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
</html>
