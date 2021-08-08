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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap4.css')}}">
    <!-- leaflet -->
    <link rel="stylesheet" href="{{ asset('css/leaflet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    {{-- <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" />
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" type="text/css"> --}}
    <style>
     p{
         text-indent: 2.5em;
     }
     </style>

</head>
<body>
    <div class="dashboard-main-wrapper">
        @include('includes.headmenu')
        {{-- @include('includes.header') --}}
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
      
                <div class="container-fluid dashboard-content" style="margin-bottom:-40px;">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <!-- ============================================================== -->
                            <!-- icon fontawesome solid  -->
                            <!-- ============================================================== -->
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="card-title" style="font-size:1.5vw;">โครงการพัฒนาระบบสารสนเทศเตรียมความพร้อมเพื่อรับมือภัยน้ำท่วมและดินถล่ม จังหวัดเชียงราย</h2>
                                    
                                </div>
                                <div class="card-body" >
                                    <div class="row">
                                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1" ></div>
                                        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10" >
                                            <font style="font-size:1vw"> 
                                                <b>วัตถุประสงค์ของโครงการ</b> คือ พัฒนาระบบข้อมูลสารสนเทศของสิ่งกีดขวางทางน้ำในลำน้ำคูคลองและถนนที่มีปัญหาการกีดขวางทางน้ำในพื้นที่จังหวัดเชียงราย 
                                                พร้อมวิธีการแก้ไขปัญหาการกีดขวางทางน้ำ โดยใช้ความรู้ในทางวิชาการร่วมกับองค์ความรู้ของชุมชน เพื่อเป็นแนวทางการแก้ไขปัญหาน้ำท่วมที่เหมาะสม 
                                                และพัฒนาระบบสารสนเทศเขตเสี่ยงภัยดินถล่มบริเวณสถานที่ท่องเที่ยวสำคัญที่เป็นลาดเชิงเขา ในจังหวัดเชียงราย เพื่อวางแผนการใช้พื้นที่ซึ่งเสี่ยงต่อปัญหาจากดินถล่ม
                                            
                                                <br><br>
                                         
                                                <li>    <b>กิจกรรมหลักที่ 1</b> : 	การพัฒนาระบบข้อมูลของสิ่งกีดขวางทางน้ำในลำน้ำคูคลองและถนน 
                                                        และวิธีการแก้ไขปัญหาการกีดขวางทางน้ำแต่ละแห่งในพื้นที่ของจังหวัดเชียงราย
                                                </li>
                                                <li>    <b>กิจกรรมหลักที่ 2 </b> :	การพัฒนาระบบสารสนเทศเขตเสี่ยงภัยดินถล่มบริเวณสถานที่ท่องเที่ยวสำคัญ
                                                        ที่เป็นลาดเชิงเขาเพื่อวางแผนการใช้พื้นที่ซึ่งเสี่ยงต่อปัญหาจากดินถล่ม 
                                                </li>
                                            </font>
                                                <br><br>
                                                <font style="font-size:1vw"> 
                                                    <b> ที่มาและความสำคัญของโครงการ </b>
                                                    <br> <br> 
                                                    <p >ปัญหาน้ำท่วมและดินถล่มก่อให้เกิดความสูญเสียต่อชีวิตและทรัพย์สินของประชาชนเป็นจำนวนมาก จากรายงานสรุปความเสียหายจากอุทกภัยโดยสำนักงานป้องกันและบรรเทาสาธารณภัยจังหวัดเชียงราย แสดงให้เห็นว่ามีการใช้งบทดลองราชการเพิ่มขึ้นเพื่อบรรเทาความเดือดร้อนจากปัญหาน้ำท่วมและดินถล่ม ดังนั้นจึงมีความจำเป็นที่จะต้องพัฒนาระบบเตรียมความพร้อมเพื่อรับมือภัยน้ำท่วมและดินถล่มจังหวัดเชียงราย ที่สามารถให้ทุกภาคส่วนใช้วางแผนในการรับมือได้อย่างทันท่วงที รวมทั้งลดความเสียหายทำให้การใช้งบทดลองราชการให้กับผู้ประสบภัยน้อยลง</p>
                                                    <p>สืบเนื่องจาก ปี พ.ศ. 2557 จังหวัดเชียงรายได้ร่วมกับกรมทรัพยากรน้ำได้จัดทำโครงการบริหารจัดการและพัฒนาทรัพยากรน้ำแบบบูรณาการ สำหรับเป็นเครื่องมือในการบริหารจัดการและกำหนดทิศทางของการพัฒนาทรัพยากรน้ำของจังหวัด โดยมีข้อมูลในระดับชุมชน ตำบล อำเภอ และบูรณาการสู่แผนบริหารจัดการทรัพยากรน้ำของจังหวัดในภาพรวม โดยได้สร้างเครือข่ายการบริหารจัดการน้ำร่วมกันในระดับพื้นที่ และกระบวนการมีส่วนร่วมของทุกภาคส่วน เพื่อรองรับการบริหารจัดการทรัพยากรน้ำในพื้นที่ของจังหวัดอย่างยั่งยืน และสนองตอบความต้องการของประชาชนทุกภาคส่วนอย่างเป็นระบบโดยรวม โดยปัญหาหนึ่งในที่พบมากและประชาชนต้องการให้มีการแก้ไข คือ การอนุรักษ์และพัฒนาลำน้ำคูคลองให้กลับมาทำหน้าที่ได้อย่างเดิม โดยปัญหาที่เกิดกับลำน้ำคูคลองที่เห็นได้ชัดและเป็นปัญหาหนึ่งที่ต้องได้รับการแก้ไขโดยด่วน ได้แก่ ปัญหาการกีดขวางทางน้ำ การถูกบุกรุกของลำน้ำคูคลอง ถนนขวางทางน้ำ จนทำให้ลำน้ำขาดศักยภาพการระบายน้ำ เกิดปัญหาน้ำท่วมและน้ำเน่าเสีย โดยปัญหานี้จะเพิ่มและรุนแรงมากขึ้นเมื่อมีการขยายตัวของชุมชนเมืองอย่างรวดเร็วและเกิดปัญหาการกีดขวางทางน้ำในลำน้ำคูคลองจำนวนมากกระจายทั่ว โดยในแต่ละปีทางภาครัฐต้องใช้งบประมาณจำนวนมากในการบรรเทาปัญหาน้ำท่วมจากการกีดขวางทางน้ำ ซึ่งเป็นการแก้ไขปัญหาเฉพาะหน้าไม่มีความยั่งยืน การแก้ไขปัญหาดังกล่าวให้ได้ผลนั้น จำเป็นจะต้องใช้องค์ความรู้ด้านวิชาการร่วมกับองค์ความรู้ของชุมชนในฐานะเจ้าของพื้นที่ ในการวางแผนแก้ปัญหาการกีดขวางทางน้ำอย่างเป็นระบบต่อเนื่องกันตลอดลำน้ำ ดังนั้นเพื่อสนับสนุนการอนุรักษ์และพัฒนาลำน้ำคูคลอง ทางระบายน้ำให้กลับมาทำหน้าที่ได้อย่างเดิม โดยสามารถแก้ไขปัญหาที่เกิดกับลำน้ำคูคลอง จึงจำเป็นต้องจัดทำระบบฐานข้อมูลสารสนเทศของลำน้ำคูคลอง และถนน โดยเฉพาะปัญหาการกีดขวางทางน้ำ ตำแหน่งและลักษณะที่ถูกบุกรุก ลุกล้ำ เพื่อนำไปเป็นข้อมูลสำคัญในกำหนดรูปแบบของการวางแผนแก้ไขปัญหาลำน้ำคูคลองถูกบุกรุกได้อย่างมีประสิทธิภาพโดยกระบวนการการมีส่วนร่วมของชุมชน และลงมือปฏิบัติการแก้ไขปัญหาโดยหน่วยงานราชการ องค์กรปกครองส่วนท้องถิ่น และชุมชน  </p>
                                                    <p>และด้วยบริเวณสถานที่ท่องเที่ยวที่สำคัญของจังหวัดเชียงราย ส่วนใหญ่ตั้งอยู่ในบริเวณภูมิประเทศลาดชันของพื้นที่ที่เป็นภูเขา ซึ่งมีแนวโน้มในการพังทลายของบริเวณดังกล่าวทั้งในส่วนที่เป็นดินตัดและดินถม โดยเฉพาะในที่ที่มีประชากรอาศัยอยู่ โดยการพังทลายของพื้นที่ลาดจะเกิดขึ้นในฤดูฝนเนื่องจากปัจจัยหลายๆอย่าง ในปัจจุบันจังหวัดเชียงรายยังไม่มีแผนที่เขตเสี่ยงภัยดินถล่ม (Landslide hazard zonation map) ของบริเวณพื้นที่ลาดชันเหล่านี้ ซึ่งการแก้ไขโดยส่วนใหญ่เป็นเพียงการซ่อมแซมและจัดการบริเวณที่มีการพังทลายเฉพาะหน้า ภายหลังจากการเกิดการพังทลายแล้ว จากการที่ไม่มีระบบการจัดการกับการพังทลายของบริเวณความลาดอย่างมีประสิทธิภาพในปัจจุบัน ทำให้เกิดความไม่ปลอดภัยกับผู้อยู่อาศัยและนักท่องเที่ยว อีกทั้งต้องเสียงบประมาณและเวลาในการจัดการบริเวณที่มีการพังทลายแล้ว ดังนั้นการพัฒนาแผนที่เขตเสี่ยงภัยดินถล่มบริเวณสถานที่ท่องเที่ยวที่สำคัญที่เป็นลาดเชิงเขาจึงเป็นเครื่องมือที่มีประสิทธิภาพในการประเมินความเสี่ยงของการพังทลายของพื้นลาดเชิงเขาได้อย่างรวดเร็ว เพื่อให้การจัดการและบริหารงานของสถานที่ท่องเที่ยวอยู่อยู่ในพื้นที่เสี่ยงภัยดินถล่มของจังหวัดเชียงรายเป็นไปอย่างมีประสิทธิภาพมากยิ่งขึ้น</p>
                                                    <p>การเตรียมความพร้อมเพื่อรับมือภัยน้ำท่วมและดินถล่มจังหวัดเชียงรายอย่างเป็นระบบ ได้แก่ ระบบข้อมูลของสิ่งกีดขวางทางน้ำในลำน้ำคูคลองและถนน และกำหนดรูปแบบวิธีการแก้ไขปัญหาการกีดขวางทางน้ำในแต่ละแห่ง โดยกระบวนการมีส่วนร่วมของชุมชน มีการรวบรวมตำแหน่งที่เกิดปัญหาการกีดขวางทางน้ำและวิธีการแก้ปัญหา มีการวางแผนการระบายน้ำให้เป็นระบบต่อเนื่องกัน ไม่ให้เกิดปัญหากับพื้นที่ด้านท้ายน้ำ และมีระบบการจัดการเสถียรภาพความลาดบริเวณสถานที่ท่องเที่ยวสำคัญที่เป็นลาดเชิงเขา เพื่อวางแผนการใช้พื้นที่ซึ่งเสี่ยงต่อปัญหาจากดินถล่ม จะสามารถทำให้ลดความเสียหายจากภัยน้ำท่วมและดินถล่มได้อย่างถูกหลักวิชาการ</p>
                                                </font>

                                            
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end icon fontawesome solid  -->
                            <!-- ============================================================== -->
                         
                        </div>
                    </div>
                    
                </div>
                @include('includes.foot')
      
        <!-- ============================================================== -->
        <!-- end main wrapper -->
        <!-- ============================================================== -->

       
    </div>


</body>
</html>
