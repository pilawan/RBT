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

                <div class="row">

                    <div class="col-md-4">

                        <div class="form-group">
                            <form class="form-horizontal" action="{{ url('regis') }}" method="GET" enctype="multipart/form-data">
                                <label>ค้นหา</label>
                                <div class="input-group">
                                    <input type="text" class="form-control"
                                        placeholder="ชื่อ-นามสกุล ผู้ติดต่อ ร้านค้า เบอร์โทร"
                                        aria-label="Recipient's username" name="search" value="{{ $search }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-sm btn-primary" type="submit">ค้นหา</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="col-md-2">

                        <div class="form-group">
                            <form class="forms-sample" method="GET" action="{{ url('regis') }}" enctype="multipart/form-data">
                            <label>ช่องทางการชำระเงิน</label>
                            {{-- {{ csrf_field() }} --}}
                            <select class="form-control" id="exampleSelectGender"name="PaymentChannel" onchange="this.form.submit()">
                                <option value="ทั้งหมด">ทั้งหมด</option>
                                <option value="PromptPay" 
                                @if( $payment == "PromptPay")
                                selected='selected'
                                @endif
                                  >PromptPay</option>

                                  <option value="CreditCard" 
                                  @if( $payment == "CreditCard")
                                  selected='selected'
                                  @endif
                                    >CreditCard</option> 

                                    <option value="Airpay" 
                                    @if( $payment == "Airpay")
                                    selected='selected'
                                    @endif
                                      >Airpay</option>  

                                      <option value="Wechat" 
                                      @if( $payment == "Wechat")
                                      selected='selected'
                                      @endif
                                        >Wechat</option>  
                                {{-- <option value="PromptPay">PromptPay</option> --}}
                                {{-- <option value="CreditCard">CreditCard</option> --}}
                                {{-- <option value="Airpay">Airpay</option> --}}
                                {{-- <option value="Wechat">Wechat</option> --}}
                            </select>
                            </form>
                        </div>

                    </div>
                    <div class="col-md-2">

                        <div class="form-group">

                            <label>สถานะ</label>
                            <select class="form-control" id="exampleSelectGender">
                                <option value="{{$status}}">ทั้งหมด</option>
                                <option>รอการติดต่อ</option>
                                <option>เอกสารไม่ครบ</option>
                                <option>ผ่าน</option>
                                <option>ติดต่อไม่ได้</option>
                                <option>ไม่ผ่าน</option>

                            </select>

                        </div>

                    </div>
                    <div class="col-md-0"></div>
                    <div class="col-md-2">

                        <div class="form-group">

                            <label>วันที่เริ่มต้น</label>
                            <div id="-datepicker-popup" class="input-group date datepicker">
                                <input type="text" class="form-control" value="31 ต.ค. 2564">
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
                                            @if(isset($data))
                                            @foreach($data as $u)
                                       
                                            <tr access_id="{{$u['id']}}">
                                                <td>{{$u['registerDateTime']}}</td>
                                                <td>{{$u['contactName']}}  </td>
                                                <td>{{$u['merchantName']}}</td>
                                                <td>{{$u['tel']}}</td>
                                                <td>Biller ID</td>
                                                <td>{{$u['paymentChannel']}}</td>

                                                @if($u['registerState'] == "เอกสารไม่ครบ"||$u['registerState'] == "รอการติดต่อ")
                                                <td><label class="badge badge-warning">{{$u['registerState']}}</label></td>
                                                 @endif

                                                @if($u['registerState'] == "ไม่ผ่าน"||$u['registerState'] == "ติดต่อไม่ได้")
                                                <td><label class="badge badge-danger">{{$u['registerState']}}</label></td>
                                                @endif

                                                @if($u['registerState'] == "ผ่าน")
                                                <td><label class="badge badge-success">{{$u['registerState']}}</label></td>
                                                @endif 
                                                <td>
                                                    <a href="{{ url('inform/'.$u['id']) }}" class="btn btn-outline-primary btn-sm">ดู/แก้ไข</a>
                                                <button class="btn btn-outline-danger edit_btn">ลบ</button>
                                                </td>
                                            </tr>
                                        
                                      

                                            @endforeach
                                            @endif
                  
                                        </tbody>
                                    </table>

                                </div>
                                <div class="row">
                                    <div class="col-6 d-flex"><p class="mar-r-5">ดู</p> 
                                    <form class="forms-sample" method="GET" action="{{ url('regis') }}" enctype="multipart/form-data">
                                      {{ csrf_field() }}
                                        <select class="form-control mar-r-5" name="totalshow" onchange="this.form.submit()" style="width:80px;">
                                          <option value="10" 
                                          @if( $totalshow == 10)
                                            selected='selected'
                                            @endif
                                            >10</option>
                                          <option value="20" @if( $totalshow == 20)
                                            selected='selected'
                                            @endif>20</option>
                                          <option value="50" @if( $totalshow == 50)
                                            selected='selected'
                                            @endif>50</option>
                                          <option value="100" @if( $totalshow == 100)
                                            selected='selected'
                                            @endif>100</option>
                                        </select> 
                                    </form>
                                        <p class="mar-r-5">รายการต่อหน้า </p> 
                                        <small class="text-muted mar-r-5">{{ $data->currentPage() }}-{{ $data->lastPage() }} รายการ จาก {{ $data->lastPage() }} รายการ</small>
                                    </div>
                                    <div class="col-6">
                                      <nav class="pull-right">
                                        @if ($data->lastPage() > 1)
                                        <ul class="pagination">
                                            <li class="page-item {{ ($data->currentPage() == 1) ? ' disabled' : '' }}">
                                                <a class="page-link" href="{{ url('/regis').$data->url(1) }}&totalshow={{ $totalshow }}">Previous</a>
                                            </li>
                                            @for ($i = 1; $i <= $data->lastPage(); $i++)
                                                <li class="page-item {{ ($data->currentPage() == $i) ? ' active' : '' }}">
                                                    <a class="page-link" href="{{ url('/regis').$data->url($i) }}&totalshow={{ $totalshow }}">{{ $i }}</a>
                                                </li>
                                            @endfor
                                            <li class="page-item {{ ($data->currentPage() == $data->lastPage()) ? ' disabled' : '' }}">
                                                <a class="page-link" href="{{ url('/regis').$data->url($data->currentPage()+1) }}&totalshow={{ $totalshow }}" >Next</a>
                                            </li>
                                        </ul>
                                        @endif
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