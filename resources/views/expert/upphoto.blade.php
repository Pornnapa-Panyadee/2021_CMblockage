<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Blockage::CMfightflood</title>

     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Mitr|Prompt" rel="stylesheet">
    <!-- Styles -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/myCss.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
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
                font-size:16px;
            }

            .links > a {
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
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>     
        
</head>
<body>
    <div class="dashboard-main-wrapper">
        @include('includes.head')
        @include('includes.header')
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
               
                <div class="">
                    
                        <div class="row">
                                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                                        <h4 ><a href="{{ asset('/expert') }}">ข้อเสนอแนะโดยผู้เชี่ยวชาญ </a> &raquo;  เพิ่มรูปภาพ {{$data[0]->blk_code}}</h4>
                                        {{-- <h4 ><a href="{{ asset('/expert') }}">ข้อเสนอแนะโดยผู้เชี่ยวชาญ </a> &raquo; xxxxxxx </h4> --}}
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12" align="right">
                                        <a href="{{ url('/') }}"><button class="btn btn-sm btn-outline-light " >
                                            <i class="fa fa-home"></i> หน้าแรก</button></a>
                                </div>
                        </div>
                        <div class="col-xl-11 col-lg-11 col-md-12 col-sm-12 col-12" > 

                            <form action="{{ route('expert.upphoto') }}" method="post" enctype="multipart/form-data" onsubmit="return confirm('บันทึกข้อมูล !!');">
                            {{-- <form action="#" method="post" enctype="multipart/form-data" onsubmit="return confirm('บันทึกข้อมูล !!');"> --}}
                                
                                {{ csrf_field() }}
                                <input id="blk_id" name="blk_id" type="hidden" value="{{ $data[0]->blk_id }}">
                                <span class="number">1</span> Upload รูปภาพแผนที่กีดขวางทางน้ำ
                                <div class="form-group">
                                    <br><input type="file" id = "photo_type_land" name="photo_type_land[]" class="form-control-file" multiple="true">                   
                                    <div id="image_preview_land"></div>
                                </div>
                                <br>
                                <span class="number">2</span>กรุณาเลือกรูปภาพประกอบจำนวน 2 รูปเพื่อประกอบรายงาน
                                <div id="container">    
                                    <input id="num_pix" name="num_pix" type="hidden" value="{{ count($photo_Blockage) }}">
                                    <table style="margin-left: 30px;">
                                        

                                        <?php if(isset($photo_Blockage[0]->thumbnail_name)){
                                                    
                                                    for($i=0;$i<count($photo_Blockage);$i++){
                                                        ?>
                                                        <tr height=200px;>
                                                                <td>
                                                                    <input type="checkbox" id="photo{{$i}}" name="photo{{$i}}" value='{{$photo_Blockage[$i]->thumbnail_name}}' /> 
                                                                
                                                                    <label for="photo{{$i}}"> 
                                                                        <img src="{{asset($photo_Blockage[$i]->thumbnail_name)  }}">
                                                                    </label>
                                                                </td>
                                                            </tr>

                                                    <?php } 
                                                }?>
                                            
                                    </table>    
                                </div>
                                    

                                
                            
                            <br><br>
                                    <button type="submit" class="butsummit">บันทึกข้อมูล</button>
                            </form>    

                        </div>

                </div>
                                
                                
             </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->


    </div>


    <script src= "{{ asset('js/app.js') }}"></script>
    <script src= "{{ asset('js/imagePreview.js') }}"></script>
    <script>
           $(document).ready(function(){
            var maxbox = 2,count=0;
            var container = $("#container")
            $('input:checkbox',container).click(function(){
                count = $('input:checkbox:checked',container).length;
                if(count > maxbox){ 
                    alert('คุณเลือกได้เพียง '+maxbox+' รายการ');
                    return false; 
                }
            });    
        });

    </script>

</body> 
</html>
