<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap4.css')}}">
    <title>verify notic</title>
</head>
<body>
    <h3 style="text-align: center;">You are not allow to this page.</h3>
    <h3 style="text-align: center;"> {{$massageNotic}} <a href="https://blockage.crflood.com/contact">Contact</a></h3>
    <h3 style="text-align: center;"><a class="btn btn-primary"  href="{{ asset('box')}}">Home</a></h3>
</body>
</html>