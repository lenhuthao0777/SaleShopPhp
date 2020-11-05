@extends('admin_layout')
@section('admin_content')
        <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
    Thông Tin Khách Hàng
    </div>
    
    <div class="table-responsive">

                <?php
                $message = Session::get('message');
                if($message){
                  echo $message; 
                  Session::put('message',null);
                }
                ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            
            <th>Tên Khách Hàng</th>
            <th>Số Điện Thoại</th>
            <th>Email</th>
            
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
         
          <tr>
            
            <td>{{$order_by_id->customer_name}}</td>
            <td>{{$order_by_id->customer_phone}}</td>
            <td>{{$order_by_id->customer_email}}</td>
           
            
            
            
          </tr>
          
        </tbody>
      </table>
    </div>
    
  </div>
</div>
<br></br>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
    Thông Tin Giao Hàng 
    </div>
    
    <div class="table-responsive">

                <?php
                $message = Session::get('message');
                if($message){
                  echo $message; 
                  Session::put('message',null);
                }
                ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            
            <th>Tên Khách Hàng</th>
            <th>Số Điện Thoại</th>
            <th>Địa Chỉ</th>
            
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
         
          <tr>
            
            <td>{{$order_by_id->shipping_name}}</td>
            <td>{{$order_by_id->shipping_phone}}</td>
            <td>{{$order_by_id->shipping_address}}</td>
           
            
            
            
          </tr>
          
        </tbody>
      </table>
    </div>
    
  </div>
</div>
<br></br>

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
    Chi Tiết Đơn Hàng
    </div>
    
    <div class="table-responsive">

                <?php
                $message = Session::get('message');
                if($message){
                  echo $message; 
                  Session::put('message',null);
                }
                ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            
            <th>Tên Sản Phẩm</th>
            <th>Số Lượng</th>
            <th>Giá</th>
            <th>Tổng Tiền</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
         
          <tr>
            
            <td>{{$order_by_id->product_name}}</td>
            <td>{{$order_by_id->product_sales_quantity}}</td>
            <td>{{$order_by_id->product_price}}</td>
            <td>{{$order_by_id->order_total}}</td>
            
            
            
          </tr>
          
        </tbody>
      </table>
    </div>
    
  </div>
</div>
@endsection