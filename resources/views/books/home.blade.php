@extends('layouts.interface')

@section('intContent')
	<section class="vbox">
		<section class="scrollable padder-lg w-f-md" id="bjax-target">
			<!-- Discover -->
			<div class="row">
				<div class="col-xs-12">
					<a href="#" class="pull-right text-muted m-t-lg" data-toggle="class:fa-spin" ><i class="icon-refresh i-lg  inline" id="refresh"></i></a>
					<h2 class="font-thin m-b">Discover 
						<span class="musicbar animate inline m-l-sm" style="width:20px;height:20px">
							<span class="bar1 a1 bg-primary lter"></span>
							<span class="bar2 a2 bg-info lt"></span>
							<span class="bar3 a3 bg-success"></span>
							<span class="bar4 a4 bg-warning dk"></span>
							<span class="bar5 a5 bg-danger dker"></span>
						</span>
					</h2>

					<div class="row row-sm">
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
						<div class="item">
							<div class="pos-rlt">
								<div class="bottom">
									<span class="badge bg-info m-l-sm m-b-sm">03:20</span>
								</div>
								<div class="item-overlay opacity r r-2x bg-black">
									<div class="text-info padder m-t-sm text-sm">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o text-muted"></i>
									</div>
									<div class="center text-center m-t-n">
										<a href="#"><i class="icon-control-play i-2x"></i></a>
									</div>
									<div class="bottom padder m-b-sm">
										<a href="#" class="pull-right">
											<i class="fa fa-heart-o"></i>
										</a>
										<a href="#">
											<i class="fa fa-plus-circle"></i>
										</a>
									</div>
								</div>
								<a href="#"><img src="{{ URL::asset('images/p1.jpg') }}" alt="" class="r r-2x img-full"></a>
							</div>
							<div class="padder-v">
								<a href="#" class="text-ellipsis">Tempered Song</a>
								<a href="#" class="text-ellipsis text-xs text-muted">Miaow</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
						<div class="item">
							<div class="pos-rlt">
								<div class="item-overlay opacity r r-2x bg-black active">
									<div class="text-info padder m-t-sm text-sm">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o text-muted"></i>
										<i class="fa fa-star-o text-muted"></i>
									</div>
									<div class="center text-center m-t-n">
										<a href="#" data-toggle="class">
											<i class="icon-control-play i-2x text"></i>
											<i class="icon-control-pause i-2x text-active"></i>
										</a>
									</div>
									<div class="bottom padder m-b-sm">
										<a href="#" class="pull-right active" data-toggle="class">
											<i class="fa fa-heart-o text"></i>
											<i class="fa fa-heart text-active text-danger"></i>
										</a>
										<a href="#" data-toggle="class">
											<i class="fa fa-plus-circle text"></i>
											<i class="fa fa-check-circle text-active text-info"></i>
										</a>
									</div>
								</div>
								<a href="#"><img src="{{ URL::asset('images/p2.jpg') }}" alt="" class="r r-2x img-full"></a>
							</div>
							<div class="padder-v">
								<a href="#" class="text-ellipsis">Vivamus vel tincidunt libero</a>
								<a href="#" class="text-ellipsis text-xs text-muted">Lauren Taylor</a>
							</div>
						</div>
					</div>
					<div class="clearfix visible-xs"></div>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
						<div class="item">
							<div class="pos-rlt">
								<div class="item-overlay opacity r r-2x bg-black">
									<div class="text-info padder m-t-sm text-sm">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o text-muted"></i>
									</div>
									<div class="center text-center m-t-n">
										<a href="#"><i class="icon-control-play i-2x"></i></a>
									</div>
									<div class="bottom padder m-b-sm">
										<a href="#" class="pull-right">
											<i class="fa fa-heart-o"></i>
										</a>
										<a href="#">
											<i class="fa fa-plus-circle"></i>
										</a>
									</div>
								</div>
								<a href="#"><img src="{{ URL::asset('images/p3.jpg') }}" alt="" class="r r-2x img-full"></a>
							</div>
							<div class="padder-v">
								<a href="#" class="text-ellipsis">Morbi id neque quam liquam sollicitudin</a>
								<a href="#" class="text-ellipsis text-xs text-muted">Allen JH</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
						<div class="item">
							<div class="pos-rlt">
								<div class="item-overlay opacity r r-2x bg-black">
									<div class="text-info padder m-t-sm text-sm">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o text-muted"></i>
									</div>
									<div class="center text-center m-t-n">
										<a href="#"><i class="icon-control-play i-2x"></i></a>
									</div>
									<div class="bottom padder m-b-sm">
										<a href="#" class="pull-right">
											<i class="fa fa-heart-o"></i>
										</a>
										<a href="#">
											<i class="fa fa-plus-circle"></i>
										</a>
									</div>
								</div>
								<div class="top">
									<span class="pull-right m-t-n-xs m-r-sm text-white">
										<i class="fa fa-bookmark i-lg"></i>
									</span>
								</div>
								<a href="#"><img src="{{ URL::asset('images/p4.jpg') }}" alt="" class="r r-2x img-full"></a>
							</div>
							<div class="padder-v">
								<a href="#" class="text-ellipsis">Tincidunt libero</a>
								<a href="#" class="text-ellipsis text-xs text-muted">Amanda Conlan</a>
							</div>
						</div>
					</div>
					<div class="clearfix visible-xs"></div>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
						<div class="item">
							<div class="pos-rlt">
								<div class="item-overlay opacity r r-2x bg-black">
									<div class="text-info padder m-t-sm text-sm">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o text-muted"></i>
									</div>
									<div class="center text-center m-t-n">
										<a href="#"><i class="icon-control-play i-2x"></i></a>
									</div>
									<div class="bottom padder m-b-sm">
										<a href="#" class="pull-right">
											<i class="fa fa-heart-o"></i>
										</a>
										<a href="#">
											<i class="fa fa-plus-circle"></i>
										</a>
									</div>
								</div>
								<a href="#"><img src="{{ URL::asset('images/p5.jpg') }}" alt="" class="r r-2x img-full"></a>
							</div>
							<div class="padder-v">
								<a href="#" class="text-ellipsis">Fermentum diam</a>
								<a href="#" class="text-ellipsis text-xs text-muted">Nisa Colen</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
						<div class="item">
							<div class="pos-rlt">
								<div class="top">
									<span class="pull-right m-t-sm m-r-sm badge bg-info">6</span>
								</div>
								<div class="item-overlay opacity r r-2x bg-black">
									<div class="text-info padder m-t-sm text-sm">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o text-muted"></i>
									</div>
									<div class="center text-center m-t-n">
										<a href="#"><i class="icon-control-play i-2x"></i></a>
									</div>
									<div class="bottom padder m-b-sm">
										<a href="#" class="pull-right">
											<i class="fa fa-heart-o"></i>
										</a>
										<a href="#">
											<i class="fa fa-plus-circle"></i>
										</a>
									</div>
								</div>
								<a href="#"><img src="{{ URL::asset('images/p6.jpg') }}" alt="" class="r r-2x img-full"></a>
							</div>
							<div class="padder-v">
								<a href="#" class="text-ellipsis">Habitant</a>
								<a href="#" class="text-ellipsis text-xs text-muted">Dan Doorack</a>
							</div>
						</div>
					</div>
					<div class="clearfix visible-xs"></div>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
						<div class="item">
							<div class="pos-rlt">
								<div class="item-overlay opacity r r-2x bg-black">
									<div class="text-info padder m-t-sm text-sm">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o text-muted"></i>
									</div>
									<div class="center text-center m-t-n">
										<a href="#"><i class="icon-control-play i-2x"></i></a>
									</div>
									<div class="bottom padder m-b-sm">
										<a href="#" class="pull-right">
											<i class="fa fa-heart-o"></i>
										</a>
										<a href="#">
											<i class="fa fa-plus-circle"></i>
										</a>
									</div>
								</div>
								<div class="top">
									<span class="pull-right m-t-sm m-r-sm badge bg-white">12</span>
								</div>
								<a href="#"><img src="{{ URL::asset('images/p7.jpg') }}" alt="" class="r r-2x img-full"></a>
							</div>
							<div class="padder-v">
								<a href="#" class="text-ellipsis">Vivamus vel tincidunt libero</a>
								<a href="#" class="text-ellipsis text-xs text-muted">Ligula H</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
						<div class="item">
							<div class="pos-rlt">
								<div class="item-overlay opacity r r-2x bg-black">
									<div class="text-info padder m-t-sm text-sm">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o text-muted"></i>
									</div>
									<div class="center text-center m-t-n">
										<a href="#"><i class="icon-control-play i-2x"></i></a>
									</div>
									<div class="bottom padder m-b-sm">
										<a href="#" class="pull-right">
											<i class="fa fa-heart-o"></i>
										</a>
										<a href="#">
											<i class="fa fa-plus-circle"></i>
										</a>
									</div>
								</div>
								<a href="#"><img src="{{ URL::asset('images/p8.jpg') }}" alt="" class="r r-2x img-full"></a>
							</div>
							<div class="padder-v">
								<a href="#" class="text-ellipsis">Aliquam sollicitudin venenati</a>
								<a href="#" class="text-ellipsis text-xs text-muted">James East</a>
							</div>
						</div>
					</div>
					<div class="clearfix visible-xs"></div>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
						<div class="item">
							<div class="pos-rlt">
								<div class="item-overlay opacity r r-2x bg-black">
									<div class="text-info padder m-t-sm text-sm">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o text-muted"></i>
									</div>
									<div class="center text-center m-t-n">
										<a href="#"><i class="icon-control-play i-2x"></i></a>
									</div>
									<div class="bottom padder m-b-sm">
										<a href="#" class="pull-right">
											<i class="fa fa-heart-o"></i>
										</a>
										<a href="#">
											<i class="fa fa-plus-circle"></i>
										</a>
									</div>
								</div>
								<a href="#"><img src="{{ URL::asset('images/p9.jpg') }}" alt="" class="r r-2x img-full"></a>
							</div>
							<div class="padder-v">
								<a href="#" class="text-ellipsis">Lementum ligula vitae</a>
								<a href="#" class="text-ellipsis text-xs text-muted">Lauren Taylor</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
						<div class="item">
							<div class="pos-rlt">
								<div class="item-overlay r r-2x bg-light dker active">
									<div class="text-info padder m-t-sm text-sm">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o text-muted"></i>
									</div>
									<div class="center text-center m-t-n">
										<a href="#" data-toggle="class" class="active">
											<i class="icon-control-play i-2x text"></i>
											<i class="icon-control-pause i-2x text-active"></i>
										</a>
									</div>
									<div class="bottom padder m-b-sm">
										<a href="#" class="pull-right" data-toggle="class">
											<i class="fa fa-heart-o text"></i>
											<i class="fa fa-heart text-active text-danger"></i>
										</a>
										<a href="#" class="active" data-toggle="class">
											<i class="fa fa-plus-circle text"></i>
											<i class="fa fa-check-circle text-active text-info"></i>
										</a>
									</div>
								</div>
								<a href="#"><img src="{{ URL::asset('images/p10.jpg') }}" alt="" class="r r-2x img-full"></a>
							</div>
							<div class="padder-v">
								<a href="#" class="text-ellipsis">Egestas dui nec fermentum </a>
								<a href="#" class="text-ellipsis text-xs text-muted">Chris Fox</a>
							</div>
						</div>
					</div>
					<div class="clearfix visible-xs"></div>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
						<div class="item">
							<div class="pos-rlt">
								<div class="item-overlay opacity r r-2x bg-black">
									<div class="text-info padder m-t-sm text-sm">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o text-muted"></i>
									</div>
									<div class="center text-center m-t-n">
										<a href="#"><i class="icon-control-play i-2x"></i></a>
									</div>
									<div class="bottom padder m-b-sm">
										<a href="#" class="pull-right">
											<i class="fa fa-heart-o"></i>
										</a>
										<a href="#">
											<i class="fa fa-plus-circle"></i>
										</a>
									</div>
								</div>
								<a href="#"><img src="{{ URL::asset('images/p11.jpg') }}" alt="" class="r r-2x img-full"></a>
							</div>
							<div class="padder-v">
								<a href="#" class="text-ellipsis">Aliquam sollicitudin venenatis ipsum</a>
								<a href="#" class="text-ellipsis text-xs text-muted">Jack Jason</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
						<div class="item">
							<div class="pos-rlt">
								<div class="item-overlay opacity r r-2x bg-black">
									<div class="text-info padder m-t-sm text-sm">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o text-muted"></i>
									</div>
									<div class="center text-center m-t-n">
										<a href="#"><i class="icon-control-play i-2x"></i></a>
									</div>
									<div class="bottom padder m-b-sm">
										<a href="#" class="pull-right">
											<i class="fa fa-heart-o"></i>
										</a>
										<a href="#">
											<i class="fa fa-plus-circle"></i>
										</a>
									</div>
								</div>
								<a href="#"><img src="{{ URL::asset('images/p12.jpg') }}" alt="" class="r r-2x img-full"></a>
							</div>
							<div class="padder-v">
								<a href="#" class="text-ellipsis">Vestibulum ullamcorper</a>
								<a href="#" class="text-ellipsis text-xs text-muted">MM &amp; DD</a>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
			<!-- /Discover -->

			<!-- NewSongs/TopSongs -->
			<div class="row">
				<!-- NewSongs -->
				<div class="col-md-7">
					<h3 class="font-thin">New Songs</h3>
					<div class="row row-sm">
						<div class="col-xs-6 col-sm-3">
							<div class="item">
								<div class="pos-rlt">
									<div class="item-overlay opacity r r-2x bg-black">
										<div class="center text-center m-t-n">
											<a href="#"><i class="fa fa-play-circle i-2x"></i></a>
										</div>
									</div>
									<a href="#"><img src="{{ URL::asset('images/a2.png') }}" alt="" class="r r-2x img-full"></a>
								</div>
								<div class="padder-v">
									<a href="#" class="text-ellipsis">Spring rain</a>
									<a href="#" class="text-ellipsis text-xs text-muted">Miaow</a>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3">
							<div class="item">
								<div class="pos-rlt">
									<div class="item-overlay opacity r r-2x bg-black">
										<div class="center text-center m-t-n">
											<a href="#"><i class="fa fa-play-circle i-2x"></i></a>
										</div>
									</div>
									<a href="#"><img src="{{ URL::asset('images/a3.png') }}" alt="" class="r r-2x img-full"></a>
								</div>
								<div class="padder-v">
									<a href="#" class="text-ellipsis">Hope</a>
									<a href="#" class="text-ellipsis text-xs text-muted">Miya</a>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3">
							<div class="item">
								<div class="pos-rlt">
									<div class="item-overlay opacity r r-2x bg-black">
										<div class="center text-center m-t-n">
											<a href="#"><i class="fa fa-play-circle i-2x"></i></a>
										</div>
									</div>
									<a href="#"><img src="{{ URL::asset('images/a8.png') }}" alt="" class="r r-2x img-full"></a>
								</div>
								<div class="padder-v">
									<a href="#" class="text-ellipsis">Listen wind</a>
									<a href="#" class="text-ellipsis text-xs text-muted">Soyia Jess</a>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3">
							<div class="item">
								<div class="pos-rlt">
									<div class="item-overlay opacity r r-2x bg-black">
										<div class="center text-center m-t-n">
											<a href="#"><i class="fa fa-play-circle i-2x"></i></a>
										</div>
									</div>
									<a href="#"><img src="{{ URL::asset('images/a9.png') }}" alt="" class="r r-2x img-full"></a>
								</div>
								<div class="padder-v">
									<a href="#" class="text-ellipsis">Breaking me</a>
									<a href="#" class="text-ellipsis text-xs text-muted">Pett JA</a>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3">
							<div class="item">
								<div class="pos-rlt">
									<div class="item-overlay opacity r r-2x bg-black">
										<div class="center text-center m-t-n">
											<a href="#"><i class="fa fa-play-circle i-2x"></i></a>
										</div>
									</div>
									<a href="#"><img src="{{ URL::asset('images/a1.png') }}" alt="" class="r r-2x img-full"></a>
								</div>
								<div class="padder-v">
									<a href="#" class="text-ellipsis">Nothing</a>
									<a href="#" class="text-ellipsis text-xs text-muted">Willion</a>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3">
							<div class="item">
								<div class="pos-rlt">
									<div class="item-overlay opacity r r-2x bg-black">
										<div class="center text-center m-t-n">
											<a href="#"><i class="fa fa-play-circle i-2x"></i></a>
										</div>
									</div>
									<a href="#"><img src="{{ URL::asset('images/a6.png') }}" alt="" class="r r-2x img-full"></a>
								</div>
								<div class="padder-v">
									<a href="#" class="text-ellipsis">Panda Style</a>
									<a href="#" class="text-ellipsis text-xs text-muted">Lionie</a>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3">
							<div class="item">
								<div class="pos-rlt">
									<div class="item-overlay opacity r r-2x bg-black">
										<div class="center text-center m-t-n">
											<a href="#"><i class="fa fa-play-circle i-2x"></i></a>
										</div>
									</div>
									<a href="#"><img src="{{ URL::asset('images/a7.png') }}" alt="" class="r r-2x img-full"></a>
								</div>
								<div class="padder-v">
									<a href="#" class="text-ellipsis">Hook Me</a>
									<a href="#" class="text-ellipsis text-xs text-muted">Gossi</a>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3">
							<div class="item">
								<div class="pos-rlt">
									<div class="item-overlay opacity r r-2x bg-black">
										<div class="center text-center m-t-n">
											<a href="#"><i class="fa fa-play-circle i-2x"></i></a>
										</div>
									</div>
									<a href="#"><img src="{{ URL::asset('images/a5.png') }}" alt="" class="r r-2x img-full"></a>
								</div>
								<div class="padder-v">
									<a href="#" class="text-ellipsis">Tempered Song</a>
									<a href="#" class="text-ellipsis text-xs text-muted">Miaow</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /NewSongs -->

				<!-- TopSongs -->
				<div class="col-md-5">
					<h3 class="font-thin">Top Songs</h3>
					<div class="list-group bg-white list-group-lg no-bg auto">
						<a href="#" class="list-group-item clearfix">
							<span class="pull-right h2 text-muted m-l">1</span>
							<span class="pull-left thumb-sm avatar m-r">
								<img src="{{ URL::asset('images/a4.png') }}" alt="...">
							</span>
							<span class="clear">
								<span>Little Town</span>
								<small class="text-muted clear text-ellipsis">by Chris Fox</small>
							</span>
						</a>
						<a href="#" class="list-group-item clearfix">
							<span class="pull-right h2 text-muted m-l">2</span>
							<span class="pull-left thumb-sm avatar m-r">
								<img src="{{ URL::asset('images/a5.png') }}" alt="...">
							</span>
							<span class="clear">
								<span>Lementum ligula vitae</span>
								<small class="text-muted clear text-ellipsis">by Amanda Conlan</small>
							</span>
						</a>
						<a href="#" class="list-group-item clearfix">
							<span class="pull-right h2 text-muted m-l">3</span>
							<span class="pull-left thumb-sm avatar m-r">
								<img src="{{ URL::asset('images/a6.png') }}" alt="...">
							</span>
							<span class="clear">
								<span>Aliquam sollicitudin venenatis</span>
								<small class="text-muted clear text-ellipsis">by Dan Doorack</small>
							</span>
						</a>
						<a href="#" class="list-group-item clearfix">
							<span class="pull-right h2 text-muted m-l">4</span>
							<span class="pull-left thumb-sm avatar m-r">
								<img src="{{ URL::asset('images/a7.png') }}" alt="...">
							</span>
							<span class="clear">
								<span>Aliquam sollicitudin venenatis ipsum</span>
								<small class="text-muted clear text-ellipsis">by Lauren Taylor</small>
							</span>
						</a>
						<a href="#" class="list-group-item clearfix">
							<span class="pull-right h2 text-muted m-l">5</span>
							<span class="pull-left thumb-sm avatar m-r">
								<img src="{{ URL::asset('images/a8.png') }}" alt="...">
							</span>
							<span class="clear">
								<span>Vestibulum ullamcorper</span>
								<small class="text-muted clear text-ellipsis">by Dan Doorack</small>
							</span>
						</a>
					</div>
				</div>
				<!-- /TopSongs -->
			</div>
			<!-- /NewSongs/TopSongs -->
		</section>

		<!-- Player -->
		<footer class="footer bg-dark">
			<div id="jp_container_N">
				<div class="jp-type-playlist">
					<div id="jplayer_N" class="jp-jplayer hide"></div>
					<div class="jp-gui">
						<div class="jp-video-play hide">
							<a class="jp-video-play-icon">play</a>
						</div>
						<div class="jp-interface">
							<div class="jp-controls">
								<div><a class="jp-previous"><i class="icon-control-rewind i-lg"></i></a></div>
								<div>
									<a class="jp-play"><i class="icon-control-play i-2x"></i></a>
									<a class="jp-pause hid"><i class="icon-control-pause i-2x"></i></a>
								</div>
								<div><a class="jp-next"><i class="icon-control-forward i-lg"></i></a></div>
								<div class="hide"><a class="jp-stop"><i class="fa fa-stop"></i></a></div>
								<div><a class="" data-toggle="dropdown" data-target="#playlist"><i class="icon-list"></i></a></div>
								<div class="jp-progress hidden-xs">
									<div class="jp-seek-bar dk">
										<div class="jp-play-bar bg-info"></div>
										<div class="jp-title text-lt">
											<ul>
												<li></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="hidden-xs hidden-sm jp-current-time text-xs text-muted"></div>
								<div class="hidden-xs hidden-sm jp-duration text-xs text-muted"></div>
								<div class="hidden-xs hidden-sm">
									<a class="jp-mute" title="mute"><i class="icon-volume-2"></i></a>
									<a class="jp-unmute hid" title="unmute"><i class="icon-volume-off"></i></a>
								</div>
								<div class="hidden-xs hidden-sm jp-volume">
									<div class="jp-volume-bar dk">
										<div class="jp-volume-bar-value lter"></div>
									</div>
								</div>
								<div>
									<a class="jp-shuffle" title="shuffle"><i class="icon-shuffle text-muted"></i></a>
									<a class="jp-shuffle-off hid" title="shuffle off"><i class="icon-shuffle text-lt"></i></a>
								</div>
								<div>
									<a class="jp-repeat" title="repeat"><i class="icon-loop text-muted"></i></a>
									<a class="jp-repeat-off hid" title="repeat off"><i class="icon-loop text-lt"></i></a>
								</div>
								<div class="hide">
									<a class="jp-full-screen" title="full screen"><i class="fa fa-expand"></i></a>
									<a class="jp-restore-screen" title="restore screen"><i class="fa fa-compress text-lt"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="jp-playlist dropup" id="playlist">
						<ul class="dropdown-menu aside-xl dker">
							<!-- The method Playlist.displayPlaylist() uses this unordered list -->
							<li class="list-group-item"></li>
						</ul>
					</div>
					<div class="jp-no-solution hide">
						<span>Update Required</span>
						To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
					</div>
				</div>
			</div>
		</footer>
		<!-- /Player -->
	</section>
@endsection
