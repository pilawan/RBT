@extends('layouts.template')


    <title>หน้าสมัครร้านค้า</title>


     {{-- @include('layouts.inc-style') --}}
     @section('stylesheet')
    

    



  


    @section('content')


    
  

    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">

                <div class="row">

                    <div class="col-md-4">

                        <div class="form-group">
                            <form class="form-horizontal">
                                <label>ค้นหา</label>
                                <div class="input-group">
                                    <input type="text" class="form-control"
                                        placeholder="ชื่อ-นามสกุล ผู้ติดต่อ ร้านค้า เบอร์โทร"
                                        aria-label="Recipient's username">
                                    <div class="input-group-append">
                                        <button class="btn btn-sm btn-primary" type="button">ค้นหา</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="col-md-2">

                        <div class="form-group">

                            <label>ช่องทางการชำระเงิน</label>
                            <select class="form-control" id="exampleSelectGender">
                                <option>ทั้งหมด</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>

                        </div>

                    </div>
                    <div class="col-md-2">

                        <div class="form-group">

                            <label>สถานะ</label>
                            <select class="form-control" id="exampleSelectGender">
                                <option>ทั้งหมด</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>

                        </div>

                    </div>
                    <div class="col-md-0"></div>
                    <div class="col-md-2">

                        <div class="form-group">

                            <label>วันที่เริ่มต้น</label>
                            <div id="-datepicker-popup" class="input-group date datepicker">
                                <input type="text" class="form-control">
                                <span class="input-group-addon input-group-append border-left">
                                    <span class="icon-calendar input-group-text"></span>
                                </span>
                            </div>

                        </div>

                    </div>


                    <div class="col-md-2">

                        <div class="form-group">

                            <label>วันที่เริ่มต้น</label>
                            <div id="datepicker-popup" class="input-group date datepicker">
                                <input type="text" class="form-control" value="31 ต.ค. 2564">
                                <span class="input-group-addon input-group-append border-left">
                                    <span class="icon-calendar input-group-text"></span>
                                </span>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">การสมัครของร้านค้า</h4>

                                <div class="table-responsive ">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>วันที่</th>
                                                <th>ชื่อผู้ติดต่อ</th>
                                                <th>ร้านค้า</th>
                                                <th>เบอร์โทร</th>
                                                <th>ประเภทการสมัคร</th>
                                                <th>ช่องทางการชำระเงินที่สมัคร</th>
                                                <th>สถานะ</th>
                                                <th>ตัวดำเนินการ</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>29 ต.ค. 2564</td>
                                                <td>ศิรินทรา เศรษฐีอนันต์</td>
                                                <td>เทสเตอร์ จำกัด</td>
                                                <td>083-903-2345</td>
                                                <td>Biller ID</td>
                                                <td>PrompPay, Credit Card (QR Credit). Alipay, WeChat</td>
                                                <td><label class="badge badge-warning">รอดำเนินการ</label></td>
                                                <td>
                                                    <button type="button"
                                                        class="edit_btn btn btn-outline-primary ">ดู/แก้ไข</button>
                                                    <button type="button"
                                                        class="btn btn-outline-danger edit_btn">ลบ</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>29 ต.ค. 2564</td>
                                                <td>วศิน กาญจนาวงษ์</td>
                                                <td>กาญจนาการค้า</td>
                                                <td>090-509-5654</td>
                                                <td>Biller ID</td>
                                                <td>Alipay, WeChat</td>
                                                <td><label class="badge badge-warning">เอกสารไม่ครบ</label></td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-outline-primary edit_btn">ดู/แก้ไข</button>
                                                    <button type="button"
                                                        class="btn btn-outline-danger edit_btn">ลบ</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>27 ต.ค. 2564</td>
                                                <td>อธิคุณ อนัตพิศัย</td>
                                                <td>อีซี่โพสแอนต์โมบายจำกัด</td>
                                                <td>090-509-5654</td>
                                                <td>Biller ID</td>
                                                <td>Alipay, WeChat</td>
                                                <td><label class="badge badge-success">ผ่าน</label></td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-outline-primary edit_btn">ดู/แก้ไข</button>
                                                    <button type="button"
                                                        class="btn btn-outline-danger edit_btn">ลบ</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>26 ต.ค. 2564</td>
                                                <td>มานะ วงศาโรตน์</td>
                                                <td>M-commerc co.,Ltd</td>
                                                <td>083-555-3435</td>
                                                <td>Biller ID</td>
                                                <td>Alipay, WeChat</td>
                                                <td><label class="badge badge-danger">ติดต่อไม่ได้</label></td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-outline-primary edit_btn">ดู/แก้ไข</button>
                                                    <button type="button"
                                                        class="btn btn-outline-danger edit_btn">ลบ</button>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>25 ต.ค. 2564</td>
                                                <td>ภัทร พูลจำเริญ</td>
                                                <td>ภัทรพูลจำเริญ จำกัด</td>
                                                <td>080-999-9999</td>
                                                <td>Biller ID, API</td>
                                                <td>Alipay, WeChat</td>
                                                <td><label class="badge badge-danger">ไม่ผ่าน</label></td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-outline-primary edit_btn">ดู/แก้ไข</button>
                                                    <button type="button"
                                                        class="btn btn-outline-danger edit_btn">ลบ</button>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>

                                </div>
                                <div class="row">
                                    <div class="col-6 d-flex">
                                        <p class="mar-r-5">ดู</p>

                                        <form class="forms-sample ">

                                            <select class="form-control" name="tatalshow" style="width:60px;">

                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </form>
                                        <p class="mar-r-5">รายการต่อหน้า</p>
                                        <small class="text-muted "> 1-6 รายการ จาก 6 รายการ</small>

                                    </div>
                                    <div class="col-6">
                                        <nav>
                                            <ul class="pagination d-flex justify-content-end ">
                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>

                                            </ul>
                                        </nav>

                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>


                </div>

            </div>
        </div>

    </div>
    

    
    

