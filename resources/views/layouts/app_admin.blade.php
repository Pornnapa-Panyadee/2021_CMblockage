<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
    <link rel="stylesheet" href="{{ asset('css/myCss.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashmix.min.css') }}">
    
    <!-- <link rel="stylesheet" href="{{ asset('css/style_chat.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/chat.css') }}">
    <link rel="stylesheet" href="{{ asset('css/typing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/fontawesome-all.css') }}">
    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Mitr', sans-serif;

        }
        .describe_text{
            font-size: 16px;
            font-weight: bold;
        }

        .position-ref {
            position: relative;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .content {
            text-align: left;

        }

        .title {
            font-size: 16px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        input[data-readonly] {
            pointer-events: none;
        }
        .table thead th , .table th{
            text-align: left;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/proj4js.js') }}"></script>
    <script src="{{ asset('js/EPSG32647.js') }}"></script>
    <script src="{{ asset('js/utmlatlong.js') }}"></script>

</head>
<body onload="initProj4js()">
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
    <script src= "{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/Chat.js') }}"></script>
    <script src="{{ asset('js/app_chat.js') }}"></script>
    <script src="{{ asset('js/shortable-nestable/Sortable.min.js') }}"></script>
    <script src="{{ asset('js/shortable-nestable/sort-nest.js') }}"></script>
    <script src="{{ asset('js/shortable-nestable/jquery.nestable.js') }}"></script>
    <script src="{{ asset('js/location.js') }}"></script>
    <script src="{{ asset('js/showhide.js') }}"></script>
    <script src="{{ asset('js/chooseLocation.js') }}"></script>
    <script src="{{ asset('js/validateNewForm.js') }}"></script>
    <script src="{{ asset('js/dashmix.core.min.js') }}"></script>
    <script src="{{ asset('js/jquery.bootstrap.wizard.min.js') }}"></script>
    <script src="{{ asset('js/be_forms_wizard.min.js') }}"></script>
    <script src= "{{ asset('js/imagePreview.js') }}"></script>
    <script>
            $(document).ready(function(){
            $("select").change(function(){
                $(this).find("option:selected").each(function(){
                    var optionValue = $(this).attr("value");
                    if(optionValue){
                        $(".box").not("." + optionValue).hide();
                        $("." + optionValue).show();
                    } else{
                        $(".box").hide();
                    }
                });
            }).change();
        });
            
    </script>
    

</body>
</html>
