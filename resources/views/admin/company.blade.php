@extends('layouts.template')


@section('title')
เกี่ยวกับเรา
@stop

     @section('stylesheet')
     @stop('stylesheet')


    @section('content')

    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
     
            <div class="content-wrapper">
                <button type="button" class="btn btn-success btn-fw" style="float: right">เพิ่มร้านค้า</button>
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
            </div>
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">บริษัทและร้านค้า (3)</h4>

                                <div class="table-responsive ">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>merchant ID</th>
                                                <th>บริษัท/ร้านค้า</th>
                                                <th>ชื่อผู้ติดต่อ</th>
                                                <th>ประเภทร้านค้า</th>
                                                <th>ช่องทางการชำระเงิน</th>
                                                <th>สถานะ</th>
                                                <th>การใช้งาน</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>                                                                                                                               
                                            <tr access_id="fd5467f4-9a21-4152-8306-07435a5166f0">
                                                <td>M10001</td>
                                                <td>เทสเตอร์ จำกัด</td>
                                                <td>ศิรินทรา เศรษฐีอนันต์</td>
                                                <td>ประเภทร้านค้า1</td>
                                                <td>PromptPay, credit Card (QR Credit), Alipay, Wechat</td>
                                                <td><label class="badge badge-warning">Test</label></td>
                                                <td>
                                                        <input type="checkbox" class="switch_2" checked>   
                                                </td>
                                            </tr>

                                            <tr access_id="fd5467f4-9a21-4152-8306-07435a5166f0">
                                                <td>M10002</td>
                                                <td>เทสเตอร์ จำกัด2</td>
                                                <td>ศิรินทรา เศรษฐีอนันต์</td>
                                                <td>ประเภทร้านค้า2</td>
                                                <td>PromptPay, credit Card (QR Credit), Alipay, Wechat</td>
                                                <td><label class="badge badge-success">Production</label></td>
                                                <td>
                                                        <input type="checkbox" class="switch_2" checked>   
                                                </td>
                                            </tr>

                                            <tr access_id="fd5467f4-9a21-4152-8306-07435a5166f0">
                                                <td>M10003</td>
                                                <td>กาญจนาการค้า</td>
                                                <td>วศิน กาญจนาวงษ์</td>
                                                <td>ประเภทร้านค้า3</td>
                                                <td>PromptPay, credit Card (QR Credit)</td>
                                                <td><label class="badge badge-warning">Test</label></td>
                                                <td>
                                                        <input type="checkbox" class="switch_2" checked>   
                                                </td>
                                            </tr>

                                          
                                           
                                        </tbody>
                                    </table>

                                </div>
                                <div class="row">
                                    <div class="col-6 d-flex"><p class="mar-r-5">ดู</p> 
                                    <form class="forms-sample">
                                      <input type="hidden"  >
                                        <select class="form-control mar-r-5"  style="width:60px;">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="5">5</option>
                                          <option value="10">10</option>
                                        </select> 
                                    </form>
                                        <p class="mar-r-5">รายการต่อหน้า </p> 
                                        <small class="text-muted mar-r-5">1-2 รายการ จาก 2 รายการ</small>
                                    </div>
                                    <div class="col-6">
                                    <nav class="pull-right">
                                        <ul class="pagination">
                                         
                                                <li class="page-item  active">
                                                    <a class="page-link">1</a>
                                                </li>
                                         
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




    @endsection

    @section('scripts')
    @stop('scripts')