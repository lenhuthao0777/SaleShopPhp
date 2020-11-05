@extends('layout')
@section('content')
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('/trang-chu')}}">Home</a></li>
				  <li class="active">Thanh Toán Giỏ Hàng</li>
				</ol>
			</div>

			
			

			<div class="register-req">
				<p>Hãy Đăng Ký Hoặc Đăng Nhập Để Thanh Toán Giỏ Hàng Và Xem Lại Lịch Sử Mua Hàng</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					
					<div class="col-sm-10 clearfix">
						<div class="bill-to">
							<p>Thông Tin Mua Hàng</p>
							<div class="form-one">
								<form action="{{URL::to('/save-checkout-customer')}}" method="POST">
								{{ csrf_field() }}
									<input type="text" name="shipping_email" placeholder="Email">
									<input type="text" name="shipping_name" placeholder="Họ Tên">
									<input type="text" name="shipping_phone" placeholder="Số Điện Thoại">
									<input type="text" name="shipping_address" placeholder="Địa Chỉ">
									
									<textarea name="shipping_notes"  placeholder="Ghi Chú Khi Đặt Hàng" rows="16"></textarea>
									<input type="submit" value="Thanh Toán" name="send_order" class="btn btn-primary btn-sm">
									
								</form>
							</div>
							<div class="form-two">
								<form>
									<input type="text" placeholder="Nhập Mã Giảm Giá">
									
									
									
								</form>
							</div>
						</div>
					</div>
									
				</div>
			</div>
			<div class="review-payment">
				<h2>Xem Lại giỏ Hàng</h2>
			</div>

			
			<div class="table-responsive cart_info">
			<?php
			$content = Cart::content();
			
			
			?>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Hình Ảnh</td>
							<td class="description">Mô Tả</td>
							<td class="price">Giá</td>
							<td class="quantity">Số Lượng</td>
							<td class="total">Tổng Tiền</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
@foreach($content as $v_content)
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{URL::to('public/uploads/product/'.$v_content->options->image)}}" width="50" alt="" /></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$v_content->name}}</a></h4>
								<p>ID: {{$v_content->id}}</p>
							</td>
							<td class="cart_price">
								<p>{{number_format($v_content->price).' '.'VNĐ'}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<form action="{{URL::to('/update-cart-quantity')}}" method="POST">
									{{ csrf_field() }}
									<input class="cart_quantity_input" type="text" name="cart_quantity" value="{{$v_content->qty}}" >
									<input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
									<input type="submit" value="Cập Nhật" name="update_qty" class="btn btn_default btn-sm">
									</form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"></p>
								<?php 
									$subtotal = $v_content->price * $v_content->qty;
									echo number_format($subtotal).' '.' VNĐ';
								?>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
@endforeach
						
					</tbody>
				</table>
			</div>
</section> <!--/#cart_items-->
@endsection