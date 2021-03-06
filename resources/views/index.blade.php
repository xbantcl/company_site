@extends('app')
@section('content')
<!--start-slider-->
<div class="slider-bg">
    <div class="container">
        <div class="grid-1">
            <div class="col-md-5 left-grid-1 wow bounceInLeft" data-wow-delay="0.4s">
                <h1>欢迎</h1>
                <h2>参观</h2><h3>森瑞</h3>
            </div>
            <div class="col-md-7 right-grid-1 wow bounceInRight" data-wow-delay="0.7s">
                <div class="slider">
                    <div class="callbacks_container">
                        <ul class="rslides" id="slider">
                            <li>
                                <img src="images/slide1.png" class="img-responsive" alt="" />
                            </li>
                            <li>
                                <img src="images/slide2.png" class="img-responsive" alt="" />
                            </li>
                            <li>
                                <img src="images/slide3.png" class="img-responsive" alt="" />
                            </li>
                            <li>
                                <img src="images/slide1.png" class="img-responsive" alt="" />
                            </li>
                         </ul>
                    </div>
                </div>
            </div>
            </script><script src="js/responsiveslides.min.js"></script>
            <script>
                $(function () {
                    $("#slider").responsiveSlides({
                        auto: true,
                        nav: true,
                        speed: 500,
                        namespace: "callbacks",
                        pager: true,
                    });
                });
            </script>
        </div>
    <div class="clearfix"> </div>
    </div>
</div>
<!--//end-slider-->
<!--start-services-->
<div id="about" class="service-section">
	<div class="container">
		<div class="serve-grids wow bounceIn animated" data-wow-delay="0.4s">
			<div class="col-md-4 services-section-grid">
				<div class="services-section-grid-head">
					<div class="service-icon">
						<i class="rocket"></i>
					</div>
					<div class="service-icon-heading">
						<h4>Events Planning</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
				<div class="col-md-4 services-section-grid">
				<div class="services-section-grid-head">
					<div class="service-icon">
						<i class="plan"></i>
					</div>
					<div class="service-icon-heading">
						<h4>MASTERING DESIGN</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
				<div class="col-md-4 services-section-grid lost">
				<div class="services-section-grid-head">
					<div class="service-icon">
						<i class="book"></i>
					</div>
					<div class="service-icon-heading">
						<h4>EXPERT DEVELOPERS</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
			<div class="serve-grids two  wow bounceIn animated" data-wow-delay="0.4s">
			<div class="col-md-4 services-section-grid act">
				<div class="services-section-grid-head">
					<div class="service-icon">
						<i class="arrow"></i>
					</div>
					<div class="service-icon-heading">
						<h4>ATTENSION TO DETAILS</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
				<div class="col-md-4 services-section-grid">
				<div class="services-section-grid-head">
					<div class="service-icon">
						<i class="download"></i>
					</div>
					<div class="service-icon-heading">
						<h4>ANOTHER COOL SERVICE.</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
				<div class="col-md-4 services-section-grid lost">
				<div class="services-section-grid-head">
					<div class="service-icon">
						<i class="cloud"></i>
					</div>
					<div class="service-icon-heading">
						<h4>Events Planning</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--//end-services-->
    <!--start-mid-section-->
    <div class="container">
        <div class="mid-section"></div>
    </div>
    <!--//end-mid-section-->
    <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >网页模板</a></div>
	<!--/port-section-->
	<div id="features" class="port-section">
		<div class="container">
		<h2>THE PORTFOLIO</h2>
			<div class="port-grids">
				<div class="col-md-3 port-grid wow zoomInLeft animated">
					<a href="/proudct/show"><img src="images/p1.jpg" class="img-responsive" alt="" /></a>
					<div class="box_type">WEB DESIGN</div>
					<div class="box-hover">
						<ul class="port-icons">
						<li><i class="per"></i></li>
						<li><i class="loca"></i></li>
						</ul>
					</div>
					<div class="text">
						<a href="portfolio.html"><h3>I am an amazing project</h3></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis nulla amet. turpis. </p>
					</div>
				</div>
				<div class="col-md-3 port-grid wow zoomInLeft animated" >
					<a href="portfolio.html"><img src="images/p2.jpg" class="img-responsive" alt="" /></a>
					<div class="box_type">WEB DESIGN</div>
					<div class="box-hover">
						<ul class="port-icons">
						<li><i class="per"></i></li>
						<li><i class="loca"></i></li>
						</ul>
					</div>
					<div class="text">
						<a href="portfolio.html"><h3>I am an amazing project</h3></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis nulla amet. turpis. </p>
					</div>
				</div>
				<div class="col-md-3 port-grid wow zoomInRight animated">
					<a href="portfolio.html"><img src="images/p3.jpg" class="img-responsive" alt="" /></a>
					<div class="box_type">WEB DESIGN</div>
					<div class="box-hover">
						<ul class="port-icons">
						<li><i class="per"></i></li>
						<li><i class="loca"></i></li>
						</ul>
					</div>
					<div class="text">
						<a href="portfolio.html"><h3>I am an amazing project</h3></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis nulla amet. turpis. </p>
					</div>
				</div>
				<div class="col-md-3 port-grid lost wow zoomInRight animated">
					<a href="portfolio.html"><img src="images/p4.jpg" class="img-responsive" alt="" /></a>
					<div class="box_type">WEB DESIGN</div>
					<div class="box-hover">
						<ul class="port-icons">
						<li><i class="per"></i></li>
						<li><i class="loca"></i></li>
						</ul>
					</div>
					<div class="text">
						<a href="portfolio.html"><h3>I am an amazing project</h3></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis nulla amet. turpis. </p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
    <!--start-bottom-section-->
    <div class="container">
        <div class="bottom-section"></div>
    </div>
    <!--//end-bottom-section-->
	<!--/start-blog-section-->
	<div id="blog" class="blog-section">
		<div class="container">
		<h3>OUR BLOGGY</h3>
			<div class="blog-grids">
				<div class="col-md-8 blog-left">
				   <div class="col-md-6 left-img wow bounceInLeft animated" data-wow-delay="0.4s">
						<a href="single.html"><img src="images/b1.jpg" class="img-responsive" alt="" /></a>
						<a href="single.html"><h4>Just a cool blog post title here.</h4></a>
						<ul class="blog-icons">
							<li><i class="pencil"></i></li>
							<li><i class="date"></i></li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis nulla vel dolor ultrices blandit nec sit amet. turpis, ipsum dolor sit amet, consectetur adipiscing elit. </p>
						<a class="read" href="single.html">Read more <span> </span></a>
				   </div>
						   <div class="col-md-6 left-img two wow bounceIn animated" data-wow-delay="0.4s">
							<a href="single.html"><img src="images/b2.jpg" class="img-responsive" alt="" /></a>
							<a href="single.html"><h4>Just a cool blog post title here.</h4></a>
								<ul class="blog-icons">
									<li><a href="single.html"><i class="cam"></i></a></li>
									<li><i class="date"></i></li>
								</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis nulla vel dolor ultrices blandit nec sit amet. turpis, ipsum dolor sit amet, consectetur adipiscing elit. </p>
								<a class="read" href="single.html">Read more <span> </span></a>
						 </div>
				    </div>
				<div class="col-md-4 testimonal wow bounceInRight animated" data-wow-delay="0.4s">
						<h3>testimonials</h3>
					<div class="test-grid">
						<div class="col-md-3 test-img">
						<img src="images/t1.jpg" class="img-responsive" alt="" />
						</div>
						<div class="col-md-9 test-text">
							<h4>Very pleased with the cool services provided.</h4>
							<p>Linda Scott / Webdesigner <a href="#">http://www.mywebsite.com</a></p>
						</div>
					<div class="clearfix"> </div><p class="test"><span> </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis nulla vel dolor ultrices blandit nec sit amet. turpis. </p>
					</div>
							<div class="test-grid second">
						<div class="col-md-3 test-img">
						<img src="images/p3.jpg" class="img-responsive" alt="" />
						</div>
						<div class="col-md-9 test-text">
							<h4>Very pleased with the cool services provided.</h4>
							<p>Linda Scott / Webdesigner <a href="#">http://www.mywebsite.com</a></p>
						</div>
					<div class="clearfix"> </div><p class="test"><span> </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis nulla vel dolor ultrices blandit nec sit amet. turpis. </p>
					</div>
				<div class="clearfix"> </div>
			</div>
			 <div class="clearfix"> </div>
		</div>
	</div>
</div>
@endsection