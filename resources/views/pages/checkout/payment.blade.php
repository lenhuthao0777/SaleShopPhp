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
			<h4 style="margin:40px 0; font-size:20px; color:#696763">Chọn Hình Thức Thanh Toán</h4>
            <form method="POST" action="{{URL::to('/order-place')}}">
            {{csrf_field()}}
			<div class="payment-options">
					
					<span>
						<label><input name="payment_option" value="2" type="checkbox"> Thanh Toán Khi Giao Hàng(COD)</label>
					</span>
					
                    <span>
                    <label><input style="margin-top:-17px"  type="submit" value="Đặt Hàng" name="send_order_place" class="btn btn-primary btn-sm"></label>
                    </span>
				</div>
                
            </form>
		</div>
</section> <!--/#cart_items-->
@endsection