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
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">ประเภทร้านค้า(5)</h4>

                                <div class="table-responsive ">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ประเภทร้านค้า</th>
                                                <th>จำนวน</th>
                                                <th>การใช้งาน</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>                                                                                                                               
                                            <tr access_id="fd5467f4-9a21-4152-8306-07435a5166f0">
                                                <td>ประเภทร้านค้า1</td>
                                                <td>5</td>
                                                <td>
                                                        <input type="checkbox" class="switch_2" checked>   
                                                </td>
                                            </tr>
                                            <tr access_id="fd5467f4-9a21-4152-8306-07435a5166f0">
                                                <td>ประเภทร้านค้า2</td>
                                                <td>5</td>
                                                <td>
                                                        <input type="checkbox" class="switch_2" checked>   
                                                </td>
                                            </tr>
                                            <tr access_id="fd5467f4-9a21-4152-8306-07435a5166f0">
                                                <td>ประเภทร้านค้า3</td>
                                                <td>5</td>
                                                <td>
                                                        <input type="checkbox" class="switch_2" checked>   
                                                </td>
                                            </tr>
                                            <tr access_id="fd5467f4-9a21-4152-8306-07435a5166f0">
                                                <td>ประเภทร้านค้า4</td>
                                                <td>5</td>
                                                <td>
                                                        <input type="checkbox" class="switch_2" checked>   
                                                </td>
                                            </tr>       
                                        </tbody>
                                    </table>

                                </div>
                                <div class="row">
                                    <div class="col-6 d-flex"><p class="mar-r-5">ดู</p> 
                                    <form class="forms-sample" method="GET" action="http://127.0.0.1:8000/regis" enctype="multipart/form-data">
                                      <input type="hidden" name="_token" value="r3leURzqUYf2FsgLhAugI7tlmJrTS8denx7zaGYy">
                                        <select class="form-control mar-r-5" name="totalshow" onchange="this.form.submit()" style="width:80px;">
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
                                            {{-- <li class="page-item  disabled">
                                                <a class="page-link" href="http://127.0.0.1:8000/admin/regi/?page=1">Previous</a>
                                            </li> --}}
                                                <li class="page-item  active">
                                                    <a class="page-link">1</a>
                                                </li>
                                                {{-- <li class="page-item ">
                                                    <a class="page-link" href="http://127.0.0.1:8000/admin/regi/?page=2">2</a>
                                                </li>
                                            <li class="page-item ">
                                                <a class="page-link" href="http://127.0.0.1:8000/admin/regi/?page=2">Next</a>
                                            </li> --}}
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