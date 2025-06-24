<!-- Carousel -->	
<div id="theme-carousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#theme-carousel" data-slide-to="0" class="active"></li>
		<li data-target="#theme-carousel" data-slide-to="1"></li>
		<li data-target="#theme-carousel" data-slide-to="2"></li>
	</ol>
	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<img src="<?= base_url('assets/frontend/images/carousel2.jpg');?>" alt="carousel2" style="width:100%" />
			<div class="carousel-caption">
				<h2>"A special thought for a better career"</h2>
				<p>OCGAPU</p>
			</div>
		</div>
		<div class="item">
			<img src="<?= base_url('assets/frontend/images/carousel1.jpg');?>" alt="carousel1" style="width:100%" />
			<div class="carousel-caption">
				<h2>What does it come from?</h2>
				<p>No matter where you are in your career, chances are you're in need of a little motivation to get to the next step—to go for the job you'll actually love waking up for, to ask for that promotion, or to just push through a rough day.</p>
			</div>
		</div>
		<div class="item">
			<img src="<?= base_url('assets/frontend/images/carousel3.jpg');?>" alt="carousel3" style="width:100%">
			<div class="carousel-caption">
				<h2>Why do we use it?</h2>
				<p>Our finest moments are most likely to occur when we are feeling deeply uncomfortable, unhappy, or unfulfilled. For it is only in such moments, propelled by our discomfort, that we are likely to step out of our ruts and start searching for different ways or truer answers.</p>
			</div>
		</div>
	</div>
	<!-- Controls -->
	<a class="left carousel-control" href="#theme-carousel" role="button" data-slide="prev">
        <div class="carousel-control-arrow">&#8249;</div>
	</a>
	<a class="right carousel-control" href="#theme-carousel" role="button" data-slide="next">
        <div class="carousel-control-arrow">&#8250;</div>
	</a>
</div>