@extends('layouts.master')

@section('content')


			<div role="main" class="main">
				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="/index">Home</a></li>
									<li class="active">Blog</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Results:</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-9">
							<div class="blog-posts">
								@foreach($providers as $provider)
								<article class="post post-medium">
									<div class="row">

										<div class="col-md-5">
											<div class="post-image">
												<div class="owl-carousel" data-plugin-options='{"items":1}'>
													<div>
														<div class="img-thumbnail">
															<img class="img-responsive" src="/img/blog/blog-image-1.jpg" alt="">
														</div>
													</div>
													<div>
														<div class="img-thumbnail">
															<img class="img-responsive" src="/img/blog/blog-image-2.jpg" alt="">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-7">

											<div class="post-content">
												<div>
													<h2>{{ link_to_action('ProviderController@show', $provider->company_name, $provider->id) }}</h2>
												</div>
												<div>
													<input value="0" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" data-id="{{ $provider->id }}">
													<div id="ajax-message"></div>
												</div>
												<div><a href="tel:+1{{{preg_replace('/\D+/', '', ($provider->phone))}}}">{{{ $provider->phone }}}</a></div>
												<strong><div>{{{ucwords($provider->address)}}}</div>
												<div>{{{ucwords($provider->city)}}}, {{{strtoupper($provider->state)}}} {{{$provider->zip_code}}}</div>
												<div><a href="http://maps.google.com/maps?q={{{ str_replace('+', ' ', ($provider->address)) }}},+{{{ str_replace('+', ' ', ($provider->city)) }}},+{{{str_replace('+', ' ', ($provider->state))}}},+{{{ $provider->zip }}}">View Map</a></div>
												<div><a href='http://{{{$provider->website}}}'>Visit Website</a></div>
												</strong>
												<p>{{{$provider->description}}}</p>
											</div>
										</div>

									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="post-meta">
												<span><i class="icon icon-calendar"></i> January 10, 2013 </span>
												<span><i class="icon icon-user"></i> By <a href="#">John Doe</a> </span>
												{{ link_to_action('ProviderController@show', 'Read more...', $provider->id, array('class' => 'btn btn-xs btn-primary pull-right')) }}
											</div>
										</div>
									</div>
								</article>
								@endforeach
								<!-- PAGINATION -->
								<span class="pagination pagination-lg pull-right">
									{{ $providers->appends(array('search' => Input::get('search')))->links() }}
								</span>
							</div>
						</div>

						<div class="col-md-3">
							<aside class="sidebar">

								<form>
									<div class="input-group input-group-lg">
										<input class="form-control" placeholder="Search..." name="s" id="s" type="text">
										<span class="input-group-btn">
											<button type="submit" class="btn btn-primary btn-lg"><i class="icon icon-search"></i></button>
										</span>
									</div>
								</form>

								<hr />

								<h4>Categories</h4>
								<ul class="nav nav-list primary push-bottom">
									<li><a href="#">Design</a></li>
									<li><a href="#">Photos</a></li>
									<li><a href="#">Videos</a></li>
									<li><a href="#">Lifestyle</a></li>
									<li><a href="#">Technology</a></li>
								</ul>
                                <div class="tabs">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#popularPosts" data-toggle="tab"><i class="icon icon-star"></i> Popular</a></li>
                                        <li><a href="#recentPosts" data-toggle="tab">Recent</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="popularPosts">
                                            <ul class="simple-post-list">
                                                <li>
                                                    <div class="post-image">
                                                        <div class="img-thumbnail">
                                                            <a href="blog-single.html">
                                                                <img src="/img/blog/blog-thumb-1.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="post-info">
                                                        <a href="blog-single.html">Nullam Vitae Nibh Un Odiosters</a>
                                                        <div class="post-meta">
                                                             Jan 10, 2013
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="post-image">
                                                        <div class="img-thumbnail">
                                                            <a href="blog-single.html">
                                                                <img src="/img/blog/blog-thumb-2.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="post-info">
                                                        <a href="blog-single.html">Vitae Nibh Un Odiosters</a>
                                                        <div class="post-meta">
                                                             Jan 10, 2013
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="post-image">
                                                        <div class="img-thumbnail">
                                                            <a href="blog-single.html">
                                                                <img src="/img/blog/blog-thumb-3.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="post-info">
                                                        <a href="blog-single.html">Odiosters Nullam Vitae</a>
                                                        <div class="post-meta">
                                                             Jan 10, 2013
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="recentPosts">
                                            <ul class="simple-post-list">
                                                <li>
                                                    <div class="post-image">
                                                        <div class="img-thumbnail">
                                                            <a href="blog-single.html">
                                                                <img src="/img/blog/blog-thumb-2.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="post-info">
                                                        <a href="blog-single.html">Vitae Nibh Un Odiosters</a>
                                                        <div class="post-meta">
                                                             Jan 10, 2013
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="post-image">
                                                        <div class="img-thumbnail">
                                                            <a href="blog-single.html">
                                                                <img src="/img/blog/blog-thumb-3.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="post-info">
                                                        <a href="blog-single.html">Odiosters Nullam Vitae</a>
                                                        <div class="post-meta">
                                                             Jan 10, 2013
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="post-image">
                                                        <div class="img-thumbnail">
                                                            <a href="blog-single.html">
                                                                <img src="/img/blog/blog-thumb-1.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="post-info">
                                                        <a href="blog-single.html">Nullam Vitae Nibh Un Odiosters</a>
                                                        <div class="post-meta">
                                                             Jan 10, 2013
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <hr />

                                <h4>About Us</h4>
                                <p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. </p>

                            </aside>
                        </div>
                    </div>

                </div>

            </div>


@stop


@section('bottomscript')
<script src="/star-rating/js/star-rating.min.js" type="text/javascript"></script>
<script>
    jQuery(document).ready(function () {
        $(".rating").rating();
    });

    $('.rating').on('rating.change', function(event, value) {
    	console.log('I clicked stars!');
    	console.log(value);

    	var providerId = $(this).data('id');
    	var starRating = value;

	     $.ajax({
	        url: "/rate-provider",
	        type: "POST",
	        data: {
	        	'provider_id': providerId,
	        	'star_rating': starRating
	        },
	        dataType: "json",
	        success: function (data) {
	            $('#ajax-message').html(data.message);
	        }
	    });
    
    });
</script>


@stop
