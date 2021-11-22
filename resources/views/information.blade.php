@extends('layouts.template')


@section('title')
เกี่ยวกับเรา
@stop

     @section('stylesheet')
     @stop('stylesheet')


    @section('content')
    {{-- @if(isset($data_tatal))
    @foreach($data_tatal as $u) --}}

    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <h4 style="padding-bottom: 12px;">{{$u['merchantName']}}</h4>
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 grid-margin">
                                        <h4 class="card-title">ข้อมูลการสมัคร</h4>
                                    </div>
                                    <div class="col-6 grid-margin ">
                                        <label class="badge badge-warning " style="float: right">รอติดต่อกลับ</label>
                                    </div>
                                </div>
                                <div class="form-group row">

                                    <div class="col-lg-3">
                                        <h6>วันที่</h6>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class=" text-muted mb-2">29 ต.ค. 2564</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <h6>ชื่อผู้ติดต่อ</h6>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class=" text-muted mb-2">  เศรษฐีอนันต์</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <h6>อีเมล</h6>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class=" text-muted mb-2">sirintra@gmail.com</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <h6 class="mb-2">เบอร์โทร</h6>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class=" text-muted mb-2">083-903-2345</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <h6>ประเภทองค์กร</h6>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class=" text-muted mb-2">นิติบุคคล</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <h6>ชื่อร้านค้า</h6>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class=" text-muted mb-2">เทสเตอร์จำกัด</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <h6>เว็บไซต์เพจ</h6>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-primary mb-2" href="#" style="padding: 0;">www.sample.com</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <h6>ประเภทกิจการ</h6>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class=" text-muted mb-2">ประเภทกิจการ1</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">บริการที่ต้องการสมัคร</h4>
                                    <div class="col-lg-8">
                                        <p class=" text-muted card-description mb-0">QR Payment</p>
                                    </div>
                                
                            </div>
                        </div>
                    </div>

                    

                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" >ช่องทางการชำระเงินที่สมัคร</h4>
                                <div class="form-group row">
                                    <div class="col-lg-8">
                                        <p class=" text-muted card-description mb-0">PrompPay, Credit Card (QR Credit). Alipay, WeChat</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 grid-margin">

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">เอกสารการสมัคร</h4>
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <p class=" text-muted ">กรุณาอัปโหลดเอกสารให้ครบตามที่ระบุไว้ด้านล่าง และ</p>
                                            <p class="text-danger">เซ็นเอกสารสำเนาถูกต้อง กรณีเป็นเอกสารของบริษัท
                                                โปรดประทับตราบริษัทให้เรียบร้อย</p>
                                        </div>
                                        <p class=" text-muted"> รองรับไฟล์ doc,docx,pdf,jpeg,png </p>

                                        <div class="col-12 grid-margin">
                                            <div class="card" style="border: #ccc solid 1px;">
                                                <div class="card-body card-body-10">


                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="d-inline-block pt-3">
                                                            <div class="d-md-flex">

                                                                <div class="d-inline-block pt-3">
                                                                    <div class="d-md-flex">
                                                                        <h6 class="mb-0">1. หนังสือรับรองบริษัท
                                                                            อายุไม่เกิน 3 เดือน</h6>

                                                                    </div>
                                                                    <p class=" text-primary ml-2" href="#">
                                                                        คลิกเพื่อดูเอกสาร
                                                                    </p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="d-inline-block">

                                                            <button type="button" class="btn btn-outline-primary "
                                                                style="float: right;">ดาวน์โหลดเอกสาร</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 grid-margin">
                                            <div class="card" style="border: #ccc solid 1px;">
                                                <div class="card-body card-body-10">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="d-inline-block pt-3">
                                                            <div class="d-md-flex">

                                                                <div class="d-inline-block pt-3">
                                                                    <div class="d-md-flex">
                                                                        <h6>2. ทะเบียนภาษีมูลค่าเพิ่ม (กพ.20)</h6>

                                                                    </div>
                                                                    <p class="text-danger text-danger-pad">
                                                                        ยังไม่ได้อัปโหลด</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="d-inline-block">

                                                            <button type="button" class="btn btn-outline-primary "
                                                                style="float: right;">ดาวน์โหลดเอกสาร</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 grid-margin">
                                            <div class="card" style="border: #ccc solid 1px;">
                                                <div class="card-body card-body-10">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="d-inline-block pt-3">
                                                            <div class="d-md-flex">

                                                                <div class="d-inline-block pt-3">
                                                                    <div class="d-md-flex">
                                                                        <h6>3. สำเนาบัตรประชาชันผู้มีอำนาจลงนาม
                                                                            (ส่งหลายไฟล์พร้อมกันได้)
                                                                        </h6>
                                                                    </div>
                                                                    <p class=" text-primary ml-2" href="#">
                                                                        คลิกเพื่อดูเอกสาร
                                                                    </p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="d-inline-block">

                                                            <button type="button" class="btn btn-outline-primary "
                                                                style="float: right;">ดาวน์โหลดเอกสาร</button>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-12 grid-margin">
                                            <div class="card" style="border: #ccc solid 1px;">
                                                <div class="card-body card-body-10">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="d-inline-block pt-3">
                                                            <div class="d-md-flex">

                                                                <div class="d-inline-block pt-3">
                                                                    <div class="d-md-flex">
                                                                        <h6>4. ภาพถ่ายสำนักงานทั้งภายในและภายนอก
                                                                            พร้อมป้ายบริษัท
                                                                            และสินค้าที่จำหน่าย รวมถึงแผนที่ </h6>
                                                                    </div>
                                                                    <p class=" text-primary ml-2" href="#">
                                                                        คลิกเพื่อดูเอกสาร
                                                                    </p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="d-inline-block">

                                                            <button type="button" class="btn btn-outline-primary "
                                                                style="float: right;">ดาวน์โหลดเอกสาร</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 grid-margin">
                                            <div class="card" style="border: #ccc solid 1px;">
                                                <div class="card-body card-body-10">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="d-inline-block pt-3">
                                                            <div class="d-md-flex">

                                                                <div class="d-inline-block pt-3">
                                                                    <div class="d-md-flex">
                                                                        <h6>5. หน้าสมุดบัญชีธนาคารที่จะใช้ในการรับเงิน
                                                                            (1 บัญชีต่อ Biller ID
                                                                            เท่านั้น)</h6>
                                                                    </div>
                                                                    <p class=" text-primary ml-2" href="#">
                                                                        คลิกเพื่อดูเอกสาร
                                                                    </p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="d-inline-block">

                                                            <button type="button" class="btn btn-outline-primary "
                                                                style="float: right;">ดาวน์โหลดเอกสาร</button>

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


                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body ">
                                <h4 class="card-title">สถานะ</h4>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">สถานะการติดต่อ</label>
                                            <div class="col-sm-7">
                                                <select class="form-control">
                                                    <option>รอการติดต่อ</option>
                                                    <option>รอดำเนินการ</option>
                                                </select>

                                            </div>
                                            <label class="col-sm-3 col-form-label">sale</label>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group row">

                                            <input class="form-control" placeholder="side01" value="side01"
                                                style="width: 350px;"></input>

                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary btn-sm"
                                    style="float: right;">บันทึก</button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
 {{-- @endforeach
 @endif --}}
    </div>


    {{-- <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <script src="vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/template.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <script src="js/todolist.js"></script>
    <script src="../../js/jquery-file-upload.js"></script>
    <!-- End custom js for this page--> --}}



    @endsection

    @section('scripts')
    @stop('scripts')