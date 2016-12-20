<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Gunnar Zemering - Portfolio">

    <title>Gunnar Zemering - Portfolio</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/portfolio.css" rel="stylesheet">

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>


<body>

<?php include "inc/nav-portfolio.php" ?>



<div class="portfoliocontainer">

    <section>
        <div class="gallary animate-grid">
            <div class="container">
    			<div class="row">
    				<div class="col-xs-12 col-md-offset-3">
    					<div class="categories">
    						<ul>
    							<li>
    								<ol>
    									<li><a href="#" data-filter="*" class="active">All</a></li>
    									<li><a href="#" data-filter=".web">Web Design</a></li>
    									<li><a href="#" data-filter=".photography">Photography</a></li>
    									<li><a href="#" data-filter=".art">Digital Art</a></li>
    									<li><a href="#" data-filter=".branding">Branding</a></li>
    								</ol>
    							</li>
    						</ul>
    					</div>
    				</div>
    			</div>

    	        <div class="row gallary-thumbs">

    	            <div class="col-sm-6 col-md-3 web">
    	                <div class="gallary-item" data-toggle="modal" data-target="#myModal1">
    	                    <div class="hover-bg">
    	                        <a href="#">

    	                            <img src="css/images/uofr.jpg" class="img-responsive" alt="...">
    	                            <p class="text-center">U of R Website</p>
    	                        </a>

    	                </div>
    	            </div>
                </div>

                <div class="col-sm-6 col-md-3 art web">
                    <div class="gallary-item" data-toggle="modal" data-target="#myModal3">
                        <div class="hover-bg">
                            <a href="#">

                                <img src="css/images/processing.jpg" class="img-responsive" alt="...">
                                <p class="text-center">Processing Sketches</p>

                            </a>

                    </div>
                </div>
                </div>

    	            <div class="col-sm-6 col-md-3 photography art">
                      <div class="gallary-item" data-toggle="modal" data-target="#myModal2">
                          <div class="hover-bg">
                              <a href="#">

                                  <img src="css/images/cinemagraphs.jpg" class="img-responsive" alt="...">
                                  <p class="text-center">Cinemagraphs</p>
                              </a>

                      </div>
                  </div>
    	            </div>


    	            <div class="col-sm-6 col-md-3 branding">
                      <div class="gallary-item" data-toggle="modal" data-target="#myModal4">
                          <div class="hover-bg">
                              <a href="#">

                                  <img src="css/images/posters.jpg" class="img-responsive" alt="...">
                                  <p class="text-center">Event Posters</p>
                              </a>

                      </div>
                  </div>
    	            </div>

    	            <div class="col-sm-6 col-md-3 branding art">
                      <div class="gallary-item" data-toggle="modal" data-target="#myModal5">
                          <div class="hover-bg">
                              <a href="#">

                                  <img src="css/images/albums.jpg" class="img-responsive" alt="...">
                                  <p class="text-center">Album Covers</p>

                              </a>

                      </div>
                  </div>
    	            </div>

    	            <div class="col-sm-6 col-md-3 art web">
                      <div class="gallary-item" data-toggle="modal" data-target="#myModal6">
                          <div class="hover-bg">
                              <a href="#">

                                  <img src="css/images/jasmine.jpg" class="img-responsive" alt="...">
                                  <p class="text-center">Jasmine</p>

                              </a>

                      </div>
                  </div>
    	            </div>

    	            <div class="col-sm-6 col-md-3 branding">
                      <div class="gallary-item" data-toggle="modal" data-target="#myModal7">
                          <div class="hover-bg">
                              <a href="#">

                                  <img src="css/images/shirts.jpg" class="img-responsive" alt="...">
                                  <p class="text-center">Event Apparel</p>

                              </a>

                      </div>
                  </div>
    	            </div>
                  <div class="col-sm-6 col-md-3 web">
                      <div class="gallary-item" data-toggle="modal" data-target="#myModal8">
                          <div class="hover-bg">
                              <a href="#">

                                  <img src="css/images/connecta.jpg" class="img-responsive" alt="...">
                                  <p class="text-center">ConnectTA</p>

                              </a>

                      </div>
                  </div>
                  </div>

    	        </div>
    	    </div>
    	</div>
    </section>


  </div>


<!-- Javascript plugin for portfolio -->
<script type="text/javascript" src="http://www.designbootstrap.com/livedemos/2015/02/04/pink/assets/js/jquery.isotope.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        var $container = $('.animate-grid .gallary-thumbs');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        $('.animate-grid .categories a').click(function() {
            $('.animate-grid .categories .active').removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });
    });

    </script>



<?php

include "inc/modals.php"

?>




<?php

include "inc/footer.php"

 ?>

</body>

</html>
