<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>

    <!--   imports bulma   -->
    <link rel="stylesheet" type="text/css" href="{{asset('bulma/bulma.css')}}">

    <!--   imports custom stylesheets   -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    <!--   google fonts    -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

</head>
<body>

@yield('main_content')


<!--   imports fontaweseome   -->
<script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>

<!--   imports jQuery   -->
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>

<!--   import custom javascript   -->
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</body>
</html>