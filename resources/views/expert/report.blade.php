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
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/fontawesome-all.css') }}">
    <!-- leaflet -->
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" />
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" type="text/css">

   <style>
       .outline {
            border-bottom:3px #ffffff solid;
            background: transparent;
        }
        .line {
            border-bottom:1px #83748d dotted;
            background: transparent;
        }
        .box{
            border: 1px solid #83748d;
            padding: 0 5px 0 5px ;
            margin-left: 1px;
        }
        .box142{
            border: 1px solid #83748d;
            padding: 0 2px 0 2px ;
            margin-left: 1px;
            margin-bottom: -3px;
        }
        table{
            color: #000000;
            
           
        }
        /* tr{
            height: 25px;
        } */
        .t_center{
            text-align: center;
        }
        p.test {
            width: 40em; 
            word-wrap: break-word;
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
               
                <div class="">
                    
                        <div class="row">
                                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                                        <h4 ><a href="{{ asset('/expert') }}">??????????????????????????????????????????????????????????????????????????? </a> &raquo;  {{ $data[0]->blk_code }}</h4>
                                        {{-- <h4 ><a href="{{ asset('/expert') }}">??????????????????????????????????????????????????????????????????????????? </a> &raquo; xxxxxxx </h4> --}}
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12" align="right">
                                        <a href="{{ url('/') }}"><button class="btn btn-sm btn-outline-light " >
                                            <i class="fa fa-home"></i> ?????????????????????</button></a>
                                        <!-- <a href='{{ asset('/expert/pdf/') }}/{{$data[0]->blk_id}}' >
                                            <button class="btn btn-sm btn-outline-light " >
                                            <i class="fa fa-file-pdf"></i> PDF</button></a>                         -->
                                </div>
                        </div>

                                <div class="row" >
                                    <div class="col-xl-1 col-lg-1">
                                    </div>
                                    <!-- ============================================================== -->
                                    <!-- basic table -->
                                    <!-- ============================================================== -->
                                    <?php 
                                        function checkZero($text) {
                                            if($text=="0" ||$text==NULL ){
                                                $num="-";
                                            }else{
                                                $num=$text;
                                             }
                                                return $num;
                                        }
                                        function checkProbleLevel($text){
                                            if($text==NULL){
                                                return "-";
                                            }
                                            else if($text=="1-30%"){
                                                return "????????????";
                                            }else if($text=="30-70%"){
                                                return "?????????????????????";
                                            }else{
                                                return "?????????";
                                            }
                                        }
                                        function checkPlan($text,$year,$char,$budget){
                                            if($text==NULL){
                                                return "-";
                                            }else if ($text=="plan"){
                                                $c="??????????????????".$year." ???????????????????????????????????????".$char." ???????????????????????? ".$budget." ?????????";
                                                return $c;
                                            }else if($text=="received"){
                                                return "??????????????????????????????????????????????????????".$budget."????????? ??????????????????????????????????????? ".$char;
                                            }else if($text=="making"){
                                                return "???????????????????????????????????????????????????????????????????????????";
                                            }else{
                                                return "???????????????????????????????????????";
                                            }
                                        }
                                        function checkDamage($flood,$waste,$other){
                                            
                                            if($flood=="0" && $waste=="0" && $other=="0"){
                                                return "  -";
                                            } else if($flood!=NULL||$flood!=0){
                                                return "?????????????????????";
                                            }else if($waste!=NULL||$waste!=0){
                                                return "?????????????????????";
                                            }else if($other!=NULL||$other!=0){
                                                return "???????????????";
                                            }
                                        }
                                        function checklevel($flood,$waste,$other) {
                                            if($flood!=NULL||$flood!=0){
                                                if($flood=="low"){
                                                    $level="????????????";
                                                }else if( $flood=="medium"){
                                                    $level="?????????????????????";
                                                }else if( $flood=="high") {
                                                    $level="?????????";
                                                }else{
                                                    $level=NULL;
                                                }
                                            }else if($waste!=NULL||$waste!=0){
                                                if($waste=="low"){
                                                    $level="????????????";
                                                }else if( $waste=="medium"){
                                                    $level="?????????????????????";
                                                }else if( $waste=="high") {
                                                    $level="?????????";
                                                }else{
                                                    $level=NULL;
                                                }

                                            }else if($other!=NULL||$other!=0){
                                                if($other=="low"){
                                                    $level="????????????";
                                                }else if( $other=="medium"){
                                                    $level="?????????????????????";
                                                }else if( $other=="high") {
                                                    $level="?????????";
                                                }else{
                                                    $level=NULL;
                                                }
                                            }
                                                return $level;
                                        }
                                        function checksame($t1, $t2) {
                                            if($t1==$t2){$text='checked';}
                                            else{ $text=' '; }
                                            return $text;
                                        }
                                    ?>
                                    <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12" > 
                                        <div class="card">
                                                
                                            <div class="card-body">
                                                <div class="flex-center position-ref full-height">
                                                    <div class="content">
                                                        <div class="title m-b-md">
                                                            <br>
                                                            <center><h2>?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</h2></center>
                                                            <br>
                                                            {{-- <img src="{{ asset('images/logo/head_form.png') }}" width="100%"> --}}
                                                        </div>
                                                        <div align="right">
                                                            <h4> ???????????????????????????????????????????????????????????????: {{ $data[0]->blk_code }} </h4>
                                                        </div>
                                                        <h3><span class="number">1 </span>  ???????????????????????????????????????????????????  </h3> 
                                                        <form action="{{ route('expert.edit') }}" method="post" enctype="multipart/form-data" onsubmit="return confirm('???????????????????????????????????? !!');">
                                                            {{ csrf_field() }}
                                                            <div class="title m-b-md">
                                                                <input type="text" id="blk_id" name="blk_id" hidden value="{{ $data[0]->blk_id }}">
                                                                <input type="text" id="blk_code" name="blk_code" hidden value="{{ $data[0]->blk_code }}">
                                                                <table  width="80%" align="center">
                                                                        <tr>
                                                                            <td>??????????????????????????? {{ $data[0]->river->river_name }}</td>
                                                                            <td colspan="2"> ???????????????????????????????????????????????????  {{  $data[0]->river->river_main  }} </td>
                                                                            <td>????????????????????????????????? {{ $data[0]->river->river_type }}</td>
                                                                            
                                                                        </tr>
                                                                        <tr>
                                                                            <td>???????????????????????? {{$data[0]->blockageLocation->blk_village}}</td>
                                                                            <td>???????????? {{$data[0]->blockageLocation->blk_tumbol }}  </td>
                                                                            <td>??????????????? {{  $data[0]->blockageLocation->blk_district  }}</td>
                                                                            <td>????????????????????? {{  $data[0]->blockageLocation->blk_province  }}</td>
                                                                        </tr>
                                                                </table>
                                            
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <td colspan="4" class="text-center" style="background-color:#C0C0C0">?????????????????????????????????????????????</td>
                                                                            <td colspan="4" class="text-center" style="background-color:#C0C0C0">???????????????????????????????????????????????????</td>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr align="center">
                                                                            <td width="5%">X(UTM)</td>
                                                                            <td>{{$data[0]->blockageLocation->blk_start_utm->getLat()}}</td>
                                                                            <td width="5%">Y(UTM)</td>
                                                                            <td>{{$data[0]->blockageLocation->blk_start_utm->getLng()}}</td>
                                                                            <td width="5%">X(UTM)</td>
                                                                            <td>{{$data[0]->blockageLocation->blk_end_utm->getLat()}}</td>
                                                                            <td width="5%">Y(UTM)</td>
                                                                            <td>{{$data[0]->blockageLocation->blk_end_utm->getLng()}}</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <td colspan="2" class="text-center" style="background-color:#C0C0C0">????????????????????????????????????????????????????????????????????????</td>
                                                                            <td colspan="3"  class="text-center" style="background-color:#C0C0C0">??????????????? (????????????)</td>
                                                                            <td colspan="3"  class="text-center" style="background-color:#C0C0C0">????????? (????????????)</td>
                                                                            <td colspan="3"  class="text-center" style="background-color:#C0C0C0">????????????????????????????????????</td>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td colspan="2">?????????????????????????????????????????????????????????????????????????????????????????????????????????</td>
                                                                            <td colspan="3"  class="text-center" >{{ checkZero($pastData->width)}}</td>
                                                                            <td colspan="3"  class="text-center" >{{checkZero($pastData->depth) }}</td>
                                                                            <td colspan="3"  class="text-center" >{{ checkZero($pastData->slop) }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="2">?????????????????????????????????????????????????????????????????????????????????????????????</td>
                                                                            <td colspan="3"  class="text-center" >{{ checkZero($current_start->width) }}</td>
                                                                            <td colspan="3"  class="text-center" >{{ checkZero($current_start->depth) }}</td>
                                                                            <td colspan="3"  class="text-center" >{{checkZero($current_start->slop) }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="11">??????????????????????????????????????????????????????????????????????????????????????????????????????????????????</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="2"> - ??????????????????????????????</td>
                                                                            <td colspan="3"  class="text-center">{{ checkZero($current_narrow_new->waterway->width )}} </td>
                                                                            <td colspan="3"  class="text-center">{{ checkZero($current_narrow_new->waterway->depth) }}</td>
                                                                            <td colspan="3"  class="text-center">{{ checkZero($current_narrow_new->waterway->slop) }} </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td rowspan="2"> - ??????????????????????????????</td>
                                                                            <td>??????????????????</td>
                                                                            <td colspan="3" style="border: none;"> ???????????????????????????????????????????????????</td>
                                                                            <td colspan="2" class="text-center"> {{ checkZero($current_narrow_new->round->diameter)}} </td> 
                                                                            <td>????????????</td>
                                                                            <td> ???????????????????????? </td>
                                                                            <td class="text-center"> {{ checkZero($current_narrow_new->round->num) }} </td>
                                                                            <td> ????????????</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>??????????????????????????????</td>
                                                                            <td>??????????????? </td>
                                                                            <td class="text-center">{{ checkZero($current_narrow_new->square->width) }}  </td>
                                                                            <td>????????????</td>
                                                                            <td>????????? </td>
                                                                            <td class="text-center"> {{ checkZero($current_narrow_new->square->high)}} </td>
                                                                            <td> ????????????</td>
                                                                            <td>???????????????????????? </td>
                                                                            <td class="text-center">{{ checkZero($current_narrow_new->square->num)}}  </td>
                                                                            <td>????????????</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="2"> - ???????????????</td>
                                                                            <td colspan="9"> {{ checkZero($current_narrow_new->other->detail) }} </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="2">?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</td>
                                                                            <td class="text-center" colspan="3">{{ checkZero($current_end->width)  }}</td>
                                                                            <td class="text-center" colspan="3">{{ checkZero($current_end->depth)}} </td>
                                                                            <td class="text-center" colspan="3">{{ checkZero($current_end->slope) }}</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                                <table  width=90% style="margin-left: 20px;">
                                                                        <tr>
                                                                            <tr>
                                                                                <td colspan="2"><b>????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????? </b> {{checkZero($data[0]->blk_length_type)}} </td>
                                                                                <td ><b>?????????????????????????????????????????????</b> {{checkZero($data[0]->blk_surface)}}</td>
                                                                                <td ><b>?????????????????????????????????????????????????????????????????????</b> {{checkZero($data[0]->blk_surface_detail)}}</td>
                                                                            </tr>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width=20%><b>??????????????????????????????????????????????????? </b> {{ checkDamage($damageData->flood,$damageData->waste,$damageData->other->level)}}</td>
                                                                            <td width=30%><b>???????????????</b> {{checklevel($damageData->flood,$damageData->waste,$damageData->other->level)}}</td>
                                                                            <td><b>??????????????????????????????????????????????????????????????????????????? </b> {{checkZero($data[0]->damage_frequency)}} </td>
                                                                        </tr>
                                                                </table>
                                                                <table  width=90% style="margin-left: 20px;">
                                                                        <tr>
                                                                            <td colspan="3"><b>????????????????????????????????????????????????????????????????????????</b></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="1" width=15%> &nbsp;&nbsp;&nbsp;> <b>?????????????????????????????????</b></td>
                                                                            <td colspan="2">{{checkZero($nut)}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td  width=15% valign="top"> &nbsp;&nbsp;&nbsp;> <b>???????????????????????????</b></td>
                                                                            <td width=3% valign="top"> ?????????</td>
                                                                            <td >
                                                                                <?php 
                                                                                    $n=0;
                                                                                        for($i=0;$i<5;$i++){
                                                                                            if($hum[$i]!=NULL){
                                                                                                echo $hum[$i]."<br>";
                                                                                            }else{
                                                                                                $n=$n+1;
                                                                                            }
                                                                                        }
                                                                                    if($n==5){
                                                                                        echo "-";
                                                                                    }
                                                                                ?>
                                                                            </td>
                                                                        </tr>
                                                                </table>
                                            
                                                                <table width=90% style="margin-left: 20px;">
                                                                    <tr>
                                                                        <td width=20%> <b>????????????????????????????????????????????????</b> {{checkProbleLevel($problem[0]->prob_level)}}</td>
                                                                        <td><b>?????????????????????</b> {{checkZero($problem[0]->prob_level)}}</td>
                                                                        <td><b>???????????????????????????????????????????????????????????????????????????</b> {{checkZero($solution_id[0]->responsed_dept)}}</td>
                                                                    </tr>
                                                                        <tr>
                                                                            <td><b>????????????????????? </b>{{$solution_id[0]->sol_how}}</td>
                                                                            <td colspan="2"><b>??????????????????????????????????????????</b> {{checkZero($solution_id[0]->result)}} </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="3"><b>???????????????????????????????????????????????????????????????????????????????????????????????????????????????</b> {{checkPlan($project_id[0]->proj_status,$project_id[0]->proj_year,$project_id[0]->proj_char,$project_id[0]->proj_budget)}}</td>
                                                                        </tr>
                                                                </table>
                                                                <br><br>
                                                                <h3><span class="number">2 </span>  ???????????????????????????????????? </h3> 

                                                                <table class="table table-bordered">
                                                                    
                                                                    <tbody>
                                                                        <tr>
                                                                            <?php 
                                                                            if($photo_has==1){?>
                                                                                <td align="center"> 
                                                                                    <img src="{{asset($photo_Blockage[0]->thumbnail_name) }}">
                                                                                </td>
                                                                                <td align="center">
                                                                                    <img src="{{asset($photo_Blockage[1]->thumbnail_name) }}">
                                                                                </td>
                                                                            <?php } ?>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <br><br>
                                                                <h3><span class="number">3 </span>  ??????????????????????????????????????????????????????  </h3> 
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <td colspan="2" style="background-color:#C0C0C0">???????????????????????????????????????????????????????????????????????????????????????</td>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="text-center" style="background-color:#C0C0C0" widht=30%>??????????????????????????????????????????????????????????????????????????????</td>
                                                                            <td class="text-center" style="background-color:#C0C0C0" >?????????????????????????????????????????????????????????????????????</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td  ><textarea rows="8" cols="50" style="color:#000;" id="survey_problem" name="survey_problem"> {{checkZero($expert[0]->survey_problem)}} </textarea></td>
                                                                            <td ><textarea rows="8" cols="50" id="survey_solution" name="survey_solution" style="color:#000;"> {{checkZero($expert[0]->survey_solution)}} </textarea></td>                                                                           
                                                                        </tr>
                                                                       
                                                                    </tbody>
                                                                    
                                                                </table>
                                                                <h3><span class="number">4 </span>  ?????????????????????????????????????????????????????????????????????  </h3> 
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <td colspan="2" style="background-color:#C0C0C0">?????????????????????????????????????????????????????????????????????????????????????????????</td>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="text-center" style="background-color:#C0C0C0" widht=30%>??????????????????????????????????????????????????????????????????????????????</td>
                                                                            <td class="text-center" style="background-color:#C0C0C0" >????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td  ><textarea rows="8" cols="50" style="color:#000;" id="problem" name="problem"> {{checkZero($expert[0]->exp_problem)}} </textarea></td>
                                                                            <td rowspan="3">
                                                                                <table class="table table-bordered">
                                                                                    <tr>
                                                                                        <td>??????????????????????????????????????? : </td>
                                                                                        <td><input type="text"  id="exp_slope" name="exp_slope" value='{{checkZero($expert[0]->exp_slope)}}'></td>
                                                                                        <td></td>
                                                                                    </tr>    
                                                                                    <tr>
                                                                                        <td>A =</td>
                                                                                        <td><input type="text" id="exp_area" name="exp_area" value=' {{checkZero($expert[0]->exp_area)}}'></td>
                                                                                        <td>???????????????????????????????????????</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> L0 =</td>
                                                                                        <td><input type="text" id="exp_L0" name="exp_L0" value=' {{checkZero($expert[0]->exp_L0)}}'></td>
                                                                                        <td>????????????????????????</td>
                                                                                    </tr>
                                                                                
                                                                                    <tr>
                                                                                        <td> H =</td>
                                                                                        <td><input type="text" id="exp_H" name="exp_H" value=' {{checkZero($expert[0]->exp_H)}}'></td>
                                                                                        <td>????????????</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> C  =</td>
                                                                                        <td><input type="text" id="exp_C" name="exp_C" value=' {{checkZero($expert[0]->exp_C)}}'></td>
                                                                                        <td></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> tc  =</td>
                                                                                        <td><input type="text" id="exp_tc" name="exp_tc" value=' {{checkZero($expert[0]->exp_tc)}}'></td>
                                                                                        <td>?????????????????????</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> I  =</td>
                                                                                        <td><input type="text" id="exp_I" name="exp_I" value=' {{checkZero($expert[0]->exp_I)}}'></td>
                                                                                        <td>???????????????????????????</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> ???????????????????????????????????????????????????  =</td>
                                                                                        <td><input type="text" id="exp_maxflow" name="exp_maxflow" value=' {{checkZero($expert[0]->exp_maxflow)}}'></td>
                                                                                        <td>m<sup>3</sup>/s</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> Return period  =</td>
                                                                                        <td><input type="text" id="exp_returnPeriod" name="exp_returnPeriod" value=' {{checkZero($expert[0]->exp_returnPeriod)}}'></td>
                                                                                        <td>??????</td>
                                                                                    </tr>

                                                                                </table>  
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center" style="background-color:#C0C0C0">???????????????????????????????????????????????????????????????????????????????????????????????????????????????</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td ><textarea rows="8" cols="50" id="exp_solution" name="exp_solution" style="color:#000;"> {{checkZero($expert[0]->exp_solution)}} </textarea></td>
                                                                        </tr>
                                                                        
                                                                    </tbody>
                                                                    
                                                                </table>
                                                                <h3><span class="number">5 </span>  ???????????????????????????  </h3> 
                                                                <div>
                                                                <input type="radio" id="status_approve1" name="status_approve" value="1" {{checksame($data[0]->status_approve,"1")}}/><label for="status_approve1"> ?????????????????????????????????????????? </label> <br>
                                                                    <input type="radio" id="status_approve0" name="status_approve" value="0" {{checksame($data[0]->status_approve,"0")}}/><label for="status_approve0"> ??????????????????????????????????????????????????? </label>
                                                                </div>
                                                                <br>
                                                                <button type="submit" class="butsummit" >????????????????????????????????????</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                                
                                
                        </div>
                      
                
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

<script src="{{ asset('js/location.js') }}"></script>
<script src="{{ asset('js/showhide.js') }}"></script>
<script src="{{ asset('js/chooseLocation.js') }}"></script>
<script src="{{ asset('js/validateNewForm.js') }}"></script>


</body>
</html>
