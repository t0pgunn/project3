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

  <?php include "nav-portfolio.php" ?>



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
    	                <div class="gallary-item" data-toggle="modal" data-target="#myModal">
    	                    <div class="hover-bg">
    	                        <a href="#">

    	                            <img src="http://placehold.it/660x450/CCC/FFF" class="img-responsive" alt="...">
    	                            <p class="text-center">U of R Website</p>
    	                        </a>

    	                </div>
    	            </div>
                </div>

    	            <div class="col-sm-6 col-md-3 photography art">
                      <div class="gallary-item" data-toggle="modal" data-target="#myModal">
                          <div class="hover-bg">
                              <a href="#">

                                  <img src="http://placehold.it/660x450/CCC/FFF" class="img-responsive" alt="...">
                                  <p class="text-center">Cinemagraphs</p>
                              </a>

                      </div>
                  </div>
    	            </div>

    	            <div class="col-sm-6 col-md-3 branding">
                      <div class="gallary-item" data-toggle="modal" data-target="#myModal">
                          <div class="hover-bg">
                              <a href="#">

                                  <img src="http://placehold.it/660x450/CCC/FFF" class="img-responsive" alt="...">
                                  <p class="text-center">Processing Sketches</p>

                              </a>

                      </div>
                  </div>
    	            </div>

    	            <div class="col-sm-6 col-md-3 branding">
                      <div class="gallary-item" data-toggle="modal" data-target="#myModal">
                          <div class="hover-bg">
                              <a href="#">

                                  <img src="http://placehold.it/660x450/CCC/FFF" class="img-responsive" alt="...">
                                  <p class="text-center">Event Posters</p>
                              </a>

                      </div>
                  </div>
    	            </div>

    	            <div class="col-sm-6 col-md-3 web">
                      <div class="gallary-item" data-toggle="modal" data-target="#myModal">
                          <div class="hover-bg">
                              <a href="#">

                                  <img src="http://placehold.it/660x450/CCC/FFF" class="img-responsive" alt="...">
                                  <p class="text-center">Album Covers</p>

                              </a>

                      </div>
                  </div>
    	            </div>

    	            <div class="col-sm-6 col-md-3 art">
                      <div class="gallary-item" data-toggle="modal" data-target="#myModal">
                          <div class="hover-bg">
                              <a href="#">

                                  <img src="http://placehold.it/660x450/CCC/FFF" class="img-responsive" alt="...">
                                  <p class="text-center">Processing Sketches</p>

                              </a>

                      </div>
                  </div>
    	            </div>

    	            <div class="col-sm-6 col-md-3 photography web">
                      <div class="gallary-item" data-toggle="modal" data-target="#myModal">
                          <div class="hover-bg">
                              <a href="#">

                                  <img src="http://placehold.it/660x450/CCC/FFF" class="img-responsive" alt="...">
                                  <p class="text-center">Jasmine</p>

                              </a>

                      </div>
                  </div>
    	            </div>

    	            <div class="col-sm-6 col-md-3 web">
                      <div class="gallary-item" data-toggle="modal" data-target="#myModal">
                          <div class="hover-bg">
                              <a href="#">

                                  <img src="http://placehold.it/660x450/CCC/FFF" class="img-responsive" alt="...">
                                  <p class="text-center">Event Apparel</p>

                              </a>

                      </div>
                  </div>
    	            </div>
                  <div class="col-sm-6 col-md-3 web">
                      <div class="gallary-item" data-toggle="modal" data-target="#myModal">
                          <div class="hover-bg">
                              <a href="#">

                                  <img src="http://placehold.it/660x450/CCC/FFF" class="img-responsive" alt="...">
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




<!--Modals-->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>













</body>

</html>