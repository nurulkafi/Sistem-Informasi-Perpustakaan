<!DOCTYPE html>
<html lang="en">
  @extends('homepage.head')
  <body>

    @extends('homepage.navbar')
    <!-- END nav -->
		
		<div class="hero-wrap js-fullheight" style="background-image:url({{asset('assets/homepage/images/perpus2.jpg')}});">
      
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
        	<h3 class="v">V-Perpus - Time to get book</h3>
        	<h3 class="vr">Since - 2020</h3>
          <div class="col-md-11 ftco-animate text-center">
            <h1>V-PERPUS</h1>
            <h2><span>All In One</span></h2>
          </div>
          <div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-down"></span></div>
						</a>
					</div>
        </div>
      </div>
    </div>

    <div class="goto-here"></div>
    

    <section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big">Book</h1>
            <h2 class="mb-4">Our books</h2>
          </div>
        </div>    		
    	</div>
    	<div class="container-fluid">
    		<div class="row">
    			@foreach($books as $book)
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="{{$book->getCover()}}" height="500px" ></a>
    					<div class="text py-3 px-3">
    						<h3><a href="#">Judul : {{$book->judul}}</a></h3>
    						<h3><a href="#"> Deskripsi : {{Str::limit($book->deskripsi,50)}}</a></h3>
                <h3><a href="#">Penulis : {{$book->author->name}}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>Sisa Buku : {{$book->qty}}</span></p>
		    					</div>
	    					</div>
	    				    					<div class="rating">
	    							<p>
	    								<span class="ion-ios-star-outline"></span>
	    								<span class="ion-ios-star-outline"></span>
	    								<span class="ion-ios-star-outline"></span>
	    								<span class="ion-ios-star-outline"></span>
	    								<span class="ion-ios-star-outline"></span>
	    							</p>
	    						</div>
	    					<hr>
    						<p class="bottom-area d-flex">
    							<a href="#" class="add-to-cart"><span>Pinjam <i class="ion-ios-add ml-1"></i></span></a>
    							<a href="#" class="ml-auto"><span><i class="ion-ios-pricetags "></i>Beli Buku</span></a>
    						</p>
    					</div>
    				</div>
    			</div>
    			@endforeach
    		</div>
    	</div>
    </section>

    <footer class="ftco-footer bg-light ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">KAHFI PERPUS</h2>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Desa Cigondewah Hilir ,Kec Margaasih ,Kab Bandung , Jawa Barat,Indonesia</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">081947178477</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">nurulkafi18@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('assets/homepage/js/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/homepage/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{ asset('assets/homepage/js/popper.min.js')}}"></script>
  <script src="{{ asset('assets/homepage/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets/homepage/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{ asset('assets/homepage/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset('assets/homepage/js/jquery.stellar.min.js')}}"></script>
  <script src="{{ asset('assets/homepage/js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('assets/homepage/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ asset('assets/homepage/js/aos.js')}}"></script>
  <script src="{{ asset('assets/homepage/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{ asset('assets/homepage/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{ asset('assets/homepage/js/scrollax.min.js')}}"></script>
  <script src="{{ asset('assets/homepage/js/main.js')}}"></script>
    
  </body>
</html>