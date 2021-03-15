<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
	<ol class="carousel-indicators carousel-indicators-numbers">
		<li data-target="#carousel" data-slide-to="0" class="active"></li>
		<li data-target="#carousel" data-slide-to="1"></li>
		<li data-target="#carousel" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
		<div class="carousel-item active">
			<a href="#">
				<picture>
					<source srcset="<?= base_url('img/header/PPB UIN Header-01.png') ?>" media="(min-width: 1400px)">
					<source srcset="<?= base_url('img/header/PPB UIN Header-02.png') ?>" media="(min-width: 769px)">
					<source srcset="<?= base_url('img/header/PPB UIN Header-03.png') ?>" media="(min-width: 577px)">
					<img srcset="<?= base_url('img/header/PPB UIN Header-04.png') ?>" alt="responsive image" class="d-block img-fluid">
				</picture>

				<!-- <div class="carousel-caption">
					<div>
						<h2>Digital Craftsmanship</h2>
						<p>We meticously build each site to get results</p>
						<span class="btn btn-sm btn-outline-secondary">Learn More</span>
					</div>
				</div> -->
			</a>
		</div>
		<!-- /.carousel-item -->
		<div class="carousel-item">
			<a href="#">
				<picture>
					<source srcset="<?= base_url('img/header/Berita 2 Header-01.png') ?>" media="(min-width: 1400px)">
					<source srcset="<?= base_url('img/header/Berita 2 Header-02.png') ?>" media="(min-width: 769px)">
					<source srcset="<?= base_url('img/header/Berita 2 Header-03.png') ?>" media="(min-width: 577px)">
					<img srcset="<?= base_url('img/header/Berita 2 Header-04.png') ?>" alt="responsive image" class="d-block img-fluid">
				</picture>

				<!-- <div class="carousel-caption justify-content-center align-items-center">
					<div>
						<h2>Every project begins with a sketch</h2>
						<p>We work as an extension of your business to explore solutions</p>
						<span class="btn btn-sm btn-outline-secondary">Our Process</span>
					</div>
				</div> -->
			</a>
		</div>
		<!-- /.carousel-item -->
		<div class="carousel-item">
			<a href="#">
				<picture>
					<source srcset="<?= base_url('img/header/Berita 1 Header-01.png') ?>" media="(min-width: 1400px)">
					<source srcset="<?= base_url('img/header/Berita 1 Header-02.png') ?>" media="(min-width: 769px)">
					<source srcset="<?= base_url('img/header/Berita 1 Header-03.png') ?>" media="(min-width: 577px)">
					<img srcset="<?= base_url('img/header/Berita 1 Header-04.png') ?>" alt="responsive image" class="d-block img-fluid">
				</picture>

				<div class="carousel-caption justify-content-center align-items-center">
					<div>
						<h2>Performance Optimization</h2>
						<p>We monitor and optimize your site's long-term performance</p>
						<span class="btn btn-sm btn-secondary">Learn How</span>
					</div>
				</div>
			</a>
		</div>
		<!-- /.carousel-item -->
	</div>

</div>
<!-- /.carousel -->
<!-- /.container -->



</section>
<section class="service1 bag1">
	<div class="container">
		<div class="row">
			<div class="col-4 col-sm-4 col-md-4 mt-5 mb-5">
				<h1 class="judul">PUSAT BAHASA UIN JAKARTA</h1>
				<h2></h2>
				<p class="display">Pusat Pembelajaran Kebahasaan Internasional </p>
				<a class="btn btn1 " href="<?= base_url('profile') ?>" role="button">
					<p>MORE</p>
				</a>
			</div>
		</div>
	</div>
</section>

</section>
<section class="service2">
	<div class="container">
		<div class="row text-right">
			<div class="col-4 col-sm-4 col-md-4 mt-5 mb-5">
				<h1 class="judul"></h1>
				<p class="display"></p>
				</a>
			</div>
			<div class="col-4 col-sm-4 col-md-4 mt-5 mb-5">
				<h1 class="judul"></h1>
				<p class="display"></p>
				</a>
			</div>
			<div class="col-4 col-sm-4 col-md-4 mt-5 mb-5">
				<h1 class="judul">LAYANAN PUSAT BAHASA</h1>
				<p class="display">Melayani Pelatihan dan Tes Bahasa Asing</p>
				<a class="btn btn1 " href="<?= base_url('layanan') ?>" role="button">
					<p>MORE</p>
				</a>
			</div>
		</div>
	</div>

</section>

<section class="service1 bag2">
	<div class="container">
		<div class="row">
			<div class="col-4 col-sm-4 col-md-4 mt-5 mb-5">
				<h1 class="judul">TERJEMAH PUSAT BAHASA</h1>

				<p class="display">Melayani Terjemah Dokumen maupun Non-dokumen</p>
				<a class="btn btn1 " href="<?= base_url('terjemah') ?>" role="button">
					<p>MORE</p>
				</a>
			</div>
		</div>
	</div>
</section>

<section class="announce">
	<div class="container mt-5 mb-5">
		<div class="row">
			<div class="col-md-8">
				<p class="font-weight-bold border-bottom mb-5">INFO PPB</p>
				<div class="card-deck">
					<div class="card">
						<img class="card-img-top" src="<?= base_url('img/caption.jpeg'); ?>" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						</div>
					</div>
					<div class="card">
						<img class="card-img-top" src="<?= base_url('img/caption.jpeg'); ?>" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						</div>
					</div>
					<div class="card">
						<img class="card-img-top" src="<?= base_url('img/caption.jpeg'); ?>" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						</div>
					</div>
				</div>

			</div>
			<div class="col-md-4 ">
				<a class="twitter-timeline" data-height="500" href="https://twitter.com/PPB_UIN_Jkt?ref_src=twsrc%5Etfw">Tweets by PPB_UIN_Jkt</a>
				<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>

		</div>
	</div>
	<?= $this->endSection() ?>