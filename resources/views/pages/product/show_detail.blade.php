@extends('layout')
@section('content')
@foreach($product_details as $key => $value)
<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					
					<div class="left-sidebar">
						<h2>DANH MỤC</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
						@foreach($category as $key => $cate)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></h4>
								</div>
							</div>
						@endforeach	
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>THƯƠNG HIỆU</h2>
							<div class="brands-name">
							@foreach($brand as $key => $brand)
								<ul class="nav nav-pills nav-stacked">
									<li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand->brand_id)}}"> <span class="pull-right">(50)</span>{{$brand->brand_name}}</a></li>
									
								</ul>
							@endforeach	
							</div>
						</div><!--/brands_products-->
						
						
					
					</div>
						
						
						
						
					
				</div>
				
				<div class="col-sm-9 padding-right">
					
					
				<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{asset('public/uploads/product/'.$value->product_image)}}" alt="" />
								
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="{{asset('public/frontend/images/imgsmarlwhite.PNG')}}" alt=""></a>
										  <a href=""><img src="{{asset('public/frontend/images/imgsmarlwhite.PNG')}}" alt=""></a>
										  <a href=""><img src="{{asset('public/frontend/images/imgsmarlwhite.PNG')}}" alt=""></a>
										</div>
										
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="{{asset('public/frontend/images/new.jpg')}}" class="newarrival" alt="" />
								
								<h2>{{$value->product_name}}</h2>
								
								<p>ID: {{$value->product_id}}</p>
								<img src="{{asset('public/frontend/images/rating.png')}}" alt="" />

								<form action="{{URL::to('/save-cart')}}" method="POST">
									{{csrf_field()}}
								<span>
									
									<span>{{number_format($value->product_price).' '.'VNĐ'}}</span>
									<label>Số Lượng:</label>
									<input name="qty" type="number" min="1" value="1" />
									<input name="productid_hidden" type="hidden" min="1" value="{{$value->product_id}}" />
									<button type="submit" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Vào Giỏ Hàng
									</button>
								</span>
								</form>
								<p><b>Tình Trạng:</b> Còn Hàng</p>
								<p><b>Hình Thức:</b> New</p>
								<p><b>Thương Hiệu:</b> {{$value->brand_name}}</p>
								<p><b>Danh Mục:</b> {{$value->category_name}}</p>
								<a href=""><img src="{{asset('public/frontend/images/share.png')}}" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->

                    <div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a  href="#details" data-toggle="tab">Mô Tả Sản Phẩm</a></li>
								<li><a href="#companyprofile" data-toggle="tab">Chi Tiết Sản Phẩm</a></li>
								
								<li ><a href="#reviews" data-toggle="tab">Đánh Giá</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="details" >
								<p>{!!$value->product_content!!}</p>
								
								
								
							</div>
							
							<div class="tab-pane fade" id="companyprofile" >
								<p>{!!$value->product_desc!!}</p>
								
								
								
							</div>
							
							
							
							<div class="tab-pane fade" id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<p><b>Write Your Review</b></p>
									
									<form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
										<textarea name="" ></textarea>
										<b>Rating: </b> <img src="public/frontend/images/rating.png" alt="" />
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
@endforeach
                    <div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Gợi Ý</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									
										
@foreach($relate as $key => $related)	
<a href="{{URL::to('/chi-tiet-san-pham/'.$related->product_id)}}">
										<div class="col-sm-4">
											<div class="product-image-wrapper">
												<div class="single-products">
													<div class="productinfo text-center">
														<img src="{{URL::to('public/uploads/product/'.$related->product_image)}}" alt="" />
														<h2>{{number_format($related->product_price).' '.'VNĐ'}}</h2>
														<p>{{$related->product_name}}</p>
														
													</div>
										
												</div>
											</div>
										</div>
@endforeach			
										
									</div>
								
								
								
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
					
					
				</div>
			</div>
		</div>
	</section>
@endsection