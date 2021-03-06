<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Blockage::CRflood</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Mitr|Prompt" rel="stylesheet">
    <!-- Styles -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/fontawesome-all.css') }}">
    <!-- leaflet -->
    <link rel="stylesheet" href="https://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" type="text/css">
    <style type="text/css">
        .textAlignVer{
            /* -webkit-transform: rotate(-90deg); 
            -moz-transform: rotate(-90deg); 
            transform: rotate(-90deg);  */
            -moz-transform: rotate(-90.0deg);  /* FF3.5+ */
       -o-transform: rotate(-90.0deg);  /* Opera 10.5 */
  -webkit-transform: rotate(-90.0deg);  /* Saf3.1+, Chrome */
             filter:  progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083);  /* IE6,IE7 */
         -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083)"; /* IE8 */
         margin-left: -10em;
         margin-right: -10em;
            
        }
        </style>
        
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
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</h2>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="dashboard-short-list">
                    <div class="row">
                            <?php 
                            function checkCuase($text) {
                                if($text!=NULL){
                                    return "/";
                                }else{
                                    return '';
                                }
                            }
                        ?>
                            <!-- ============================================================== -->
                            <!-- basic table -->
                            <!-- ============================================================== -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                        <br>
                                        <h5 style="padding-left:30px;"><a href="{{ asset('/result') }}">  ?????????????????? </a> &raquo; ???????????????????????????????????? </h5>
                                    
                                      
                                    <div class="card-body" style="overflow-x:auto;">
                                            
                                        <table class="table_result" width="100%"  >
                                            <thead align="center">
                                                <tr>
                                                    <th scope="col" rowspan="4">#</th>
                                                    <th scope="col" rowspan="4">????????????</th>
                                                    <th scope="col" rowspan="4">????????????????????????</th>
                                                    <th scope="col" rowspan="4">????????????</th>
                                                    <th scope="col" rowspan="4">???????????????????????????</th>
                                                    {{-- <th scope="col" colspan="2">???????????????????????????????????????</th>
                                                    <th scope="col" colspan="2">????????????????????????????????????</th> --}}
                                                    <th scope="col" colspan="16">???????????????????????????</th>
                                                    <th scope="col" rowspan="2" colspan="2">?????????????????????????????????????????????</th>
                                                </tr>
                                                <tr>
                                                    {{-- <th scope="col" rowspan="3"> X</th>
                                                    <th scope="col" rowspan="3"> Y </th>
                                                    <th scope="col" rowspan="3"> X</th>
                                                    <th scope="col" rowspan="3"> Y</th> --}}
                                                    <th scope="col" colspan="6"> ????????????????????????</th>
                                                    <th scope="col" colspan="10" > ??????????????????</th>
                                                   
                                                </tr>
                                                <tr>
                                                    <th scope="col" rowspan="2" class="textAlignVer" width="4%"> ????????????????????????</th>
                                                    <th scope="col" rowspan="2" class="textAlignVer" width="4%"> ???????????????????????????????????????</th>
                                                    <th scope="col" rowspan="2" class="textAlignVer" width="4%"> ????????????????????????????????? </th>
                                                    <th scope="col" rowspan="2" class="textAlignVer" width="4%"> ??????????????????????????????????????? </th>
                                                    <th scope="col" rowspan="2" class="textAlignVer" width="4%"> ?????????????????? </th>
                                                    <th scope="col" rowspan="2" class="textAlignVer" width="4%"> ??????????????? </th>
                                                    <th scope="col" colspan="2" > ???????????????????????????????????????</th>
                                                    <th scope="col" colspan="5" > ?????????????????????????????????????????????</th>
                                                    <th scope="col" rowspan="2" class="textAlignVer" width="4%"> ????????????????????????</th>
                                                    <th scope="col" rowspan="2" class="textAlignVer" width="4%"> ??????????????????????????????</th>
                                                    <th scope="col" rowspan="2" class="textAlignVer" width="4%"> ???????????????</th>
                                                    <th scope="col" rowspan="2" class="textAlignVer"> ???????????????</th>
                                                    <th scope="col" rowspan="2" class="textAlignVer"> ????????????????????????????????? (%)</th>
                                                </tr>
                                                <tr height="100px;">
                                                    <th scope="col" class="textAlignVer" width="4%"> ??????????????????????????????</th>
                                                    <th scope="col" class="textAlignVer" width="4%"> ???????????????????????????</th>
                                                    <th scope="col" class="textAlignVer" width="4%"> ?????????????????????</th>
                                                    <th scope="col" class="textAlignVer" width="4%"> ??????????????????????????????</th>
                                                    <th scope="col" class="textAlignVer" width="4%"> ?????????????????????</th>
                                                    <th scope="col" class="textAlignVer" width="4%"> ???????????????????????????</th>
                                                    <th scope="col" class="textAlignVer" width="4%"> ???????????????</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <?php for($i = 0;$i < count($data);$i++){?>
                                                        <tr align="center" >
                                                            <?php
                                                              $string=$data[$i]->blockageLocation->blk_village;
                                                              $vill=explode(' ', $string);
                                                              $vill=$vill[2];
                                                              if($problem[$i]->prob_level=="1-30%"){
                                                                $lev="????????????";
                                                              }else if($problem[$i]->prob_level=="30-70%"){
                                                                $lev="?????????????????????";
                                                              }else{
                                                                $lev="?????????";
                                                              }

                                                              if(empty($problem[$i]->hum_stc_bld_num)&&empty($problem[$i]->hum_stc_fence_num)&&empty($problem[$i]->hum_str_other)){
                                                                  $gov[$i]="";
                                                              }else{$gov[$i]="/";}

                                                              if(empty($problem[$i]->hum_stc_bld_bu_num)&&empty($problem[$i]->hum_stc_fence_bu_num)&&empty($problem[$i]->hum_str_other_bu)){
                                                                  $bu[$i]="";
                                                              }else{$bu[$i]="/";}

                                                            ?>
                                                             
                                                            <td scope="row">{{$i+1}}</td>
                                                            <td data-label="????????????"><a href='{{ asset('/report_detail') }}/{{$data[$i]->blk_id}}' >{{$data[$i]->blk_code}}</a></td>
                                                            <td data-label="????????????????????????">{{$vill}} </td>
                                                            <td data-label="????????????">{{$data[$i]->blockageLocation->blk_tumbol}} </td>
                                                            <td data-label="???????????????">{{$data[$i]->River->river_name}}</td>
                                                            {{-- <td data-label="X ???????????????">{{ number_format($data[$i]->blockageLocation->blk_start_location->getLat(), 2, '.', '') }} </td>
                                                            <td data-label="Y ???????????????">{{ number_format($data[$i]->blockageLocation->blk_start_location->getLng(), 2, '.', '') }} </td>
                                                            <td data-label="X ?????????????????????">{{ number_format($data[$i]->blockageLocation->blk_end_location->getLat(), 2, '.', '') }} </td>
                                                            <td data-label="Y ?????????????????????">{{ number_format($data[$i]->blockageLocation->blk_end_location->getLng(), 2, '.', '') }} </td>--}}
                                                            <td data-label="????????????????????????">{{checkCuase($problem[$i]->nat_erosion)}}</td> 
                                                            <td data-label="???????????????????????????????????????">{{checkCuase($problem[$i]->nat_shoal)}}</td>
                                                            <td data-label="?????????????????????????????????">{{checkCuase($problem[$i]->nat_missing)}}</td>
                                                            <td data-label="???????????????????????????????????????">{{checkCuase($problem[$i]->nat_winding)}}</td>
                                                            <td data-label="??????????????????">{{checkCuase($problem[$i]->nat_weed_detail)}}</td>
                                                            <td data-label="???????????????">{{checkCuase($problem[$i]->nat_other)}}</td>
                                                            <td data-label="??????????????????????????????">{{$gov[$i]}}</td>
                                                            <td data-label="???????????????????????????">{{$bu[$i]}}</td>
                                                            <td data-label="?????????????????????">{{checkCuase($problem[$i]->hum_road)}}</td>
                                                            <td data-label="??????????????????????????????">{{checkCuase($problem[$i]->hum_smallconvert)}}</td>
                                                            <td data-label="?????????????????????">{{checkCuase($problem[$i]->hum_road_paralel)}}</td>
                                                            <td data-label="???????????????????????????">{{checkCuase($problem[$i]->hum_replaced_convert)}}</td>
                                                            <td data-label="???????????????">{{checkCuase($problem[$i]->hum_bridge_pile)}}</td>
                                                            <td data-label="????????????????????????">{{checkCuase($problem[$i]->hum_soil_cover)}}</td>
                                                            <td data-label="??????????????????????????????">{{checkCuase($problem[$i]->hum_trash)}}</td>
                                                            <td data-label="???????????????">{{checkCuase($problem[$i]->hum_other_detail)}}</td>
                                                            <td data-label="???????????????">{{$lev}}</td>
                                                            <td data-label="????????????????????????????????? (%)"> {{$problem[$i]->prob_level}} </td>

                                                                                           
                                                        </tr>
                                                    <?php }?>
                                                
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end basic table -->
                            <!-- ============================================================== -->
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->


    </div>


<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/main-js.js') }}"></script>
<script src="{{ asset('js/shortable-nestable/Sortable.min.js') }}"></script>
<script src="{{ asset('js/shortable-nestable/sort-nest.js') }}"></script>
<script src="{{ asset('js/shortable-nestable/jquery.nestable.js') }}"></script>



</body>
</html>
