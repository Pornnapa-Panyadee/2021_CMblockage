<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Blockage::CMFightflood</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Mitr|Prompt" rel="stylesheet">
    <!-- Styles -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap4.css')}}">
    <style>
        .button {
            background-color: #5969ff; /* Green */
            border: none;
            color: white;
            text-align: top;
            text-decoration: none;
            display: inline-block;
            margin: 4px 2px;
            /* cursor: pointer; */
            height:28px;
        }
        .button1 {padding: -10px;}
       
    </style>
        
</head>
<body>
    <div id="app">  
        <main class="py-4">
            @yield('content')
        </main>
    </div>
   
    <script src="{{ asset('js/chooseLocation.js') }}"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main-js.js') }}"></script>
    <script src="{{ asset('js/leaflet.js') }}"></script>
    <script src="{{ asset('js/jquery-1.9.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/jquery.ui.touch-punch.min.js') }}"></script>
    <script src="{{ asset('/js/data-table.js') }}"></script> 
    <script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script> 
    <script src="{{ asset('/js/dataTables.bootstrap4.min.js') }}"></script> 
    <script src="{{ asset('js/SliderControl.js') }}"></script>
    <script>
      function delFunction() {
        confirm("คุณต้องการลบข้อมูลสิ่งกัดขวางใช่ไหม?");
      }
    </script>

</body>
</html>

