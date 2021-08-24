@extends('layouts.app_bloker')

@section('content')
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
                            <h2 class="pageheader-title">ข้อมูลสภาพปัญหาและแนวทางการแก้ไขปัญหาเบื้องต้นของตำแหน่งสิ่งกีดขวาง จังหวัดเชียงราย</h2>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="dashboard-short-list">
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- basic table  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">ข้อเสนอแนะและแนวทางการแก้ไขปัญหาโดยผู้เชี่ยวชาญ</h5>
                                <div class="card-body">
                                    <div class="table-responsive" align="center">
                                        <table class="table table-striped table-bordered first" width=80% >
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>รหัส</th>
                                                    <th>ลำน้ำ</th>
                                                    <th>ที่ตั้ง</th>
                                                    <th>วันที่สำรวจ</th>
                                                    <th>ผู้สำรวจ</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php for($i = 0;$i < count($data);$i++){?>
                                                    <tr align="center">
                                                        <td >{{$i+1}}</td>
                                                        <td data-label="รหัส">{{$data[$i]->blk_code}}</td>
                                                        <td align="left" data-label="ลำน้ำ">{{$data[$i]->river_name}}, {{$data[$i]->river_main}} </td>
                                                        <td align="left" data-label="หมู่บ้าน">{{$data[$i]->blk_village}} ต.{{$data[$i]->blk_tumbol}} อ.{{$data[$i]->blk_district}}</td>
                                                        <td data-label="วันที่สำรวจ">{{$data[$i]->created_at}}</td>
                                                        <td data-label="ผู้สำรวจ">{{$data[$i]->blk_user_name}}</td>
                                              
                                                        
                                                        <td data-label="">
                                                                {{-- <div class="btn-group ml-auto">
                                                                  
                                                                    <a href='{{ asset('/reportBlockage') }}/{{$data[$i]->blk_id}}' > <button class="btn btn-outline-primary waves-effect" title="รายละเอียด" ><i class="fas fa-eye"></i>  รายละเอียด</button>&nbsp;  </a>
                                                               </div> --}}
                                                                <div class="btn-group ml-auto">
                                                                    <a href='{{ asset('expert/report/') }}/{{$data[$i]->blk_id}}' >  <button class="btn btn-outline-primary waves-effect" title="รายละเอียด" ><i class="fas fa-edit"></i> แก้ไขข้อมูล</button>&nbsp;&nbsp;   </a>
                                                                    <a href='{{ asset('expert/photo/') }}/{{$data[$i]->blk_id}}' >  <button class="btn btn-outline-primary waves-effect" title="เลือกรูปภาพ" ><i class="fas fa-images"></i> เลือกรูปภาพ</button> &nbsp; </a>
                                                                    {{-- <a href='{{ asset('/reportBlockage') }}/{{$data[$i]->blk_id}}' > <button class="btn btn-sm btn-outline-light"><i class="fas fa-eye"></i> รายละเอียด</button> </a> --}}
                                                                    <a href='{{ asset('/report/pdf/') }}/{{$data[$i]->blk_id}}' >  <button class="btn btn-outline-primary waves-effect"><i class="fas fa-eye"></i> รายงาน</button> </a>
                                                                    
                                                                </div>
                                                        </td>
                                                                                          
                                                    </tr>
                                                <?php }?>
                                               
                                            </tbody>
                                          
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic table  -->
                        <!-- ============================================================== -->
                    </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->


    </div>

@endsection
