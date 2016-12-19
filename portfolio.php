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
    	                <div class="gallary-item" data-toggle="modal" data-target="#myModal1">
    	                    <div class="hover-bg">
    	                        <a href="#">

    	                            <img src="http://placehold.it/660x450/CCC/FFF" class="img-responsive" alt="...">
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

                                  <img src="http://placehold.it/660x450/CCC/FFF" class="img-responsive" alt="...">
                                  <p class="text-center">Cinemagraphs</p>
                              </a>

                      </div>
                  </div>
    	            </div>


    	            <div class="col-sm-6 col-md-3 branding">
                      <div class="gallary-item" data-toggle="modal" data-target="#myModal4">
                          <div class="hover-bg">
                              <a href="#">

                                  <img src="http://placehold.it/660x450/CCC/FFF" class="img-responsive" alt="...">
                                  <p class="text-center">Event Posters</p>
                              </a>

                      </div>
                  </div>
    	            </div>

    	            <div class="col-sm-6 col-md-3 branding art">
                      <div class="gallary-item" data-toggle="modal" data-target="#myModal5">
                          <div class="hover-bg">
                              <a href="#">

                                  <img src="http://placehold.it/660x450/CCC/FFF" class="img-responsive" alt="...">
                                  <p class="text-center">Album Covers</p>

                              </a>

                      </div>
                  </div>
    	            </div>

    	            <div class="col-sm-6 col-md-3 art web">
                      <div class="gallary-item" data-toggle="modal" data-target="#myModal6">
                          <div class="hover-bg">
                              <a href="#">

                                  <img src="http://placehold.it/660x450/CCC/FFF" class="img-responsive" alt="...">
                                  <p class="text-center">Jasmine</p>

                              </a>

                      </div>
                  </div>
    	            </div>

    	            <div class="col-sm-6 col-md-3 branding">
                      <div class="gallary-item" data-toggle="modal" data-target="#myModal7">
                          <div class="hover-bg">
                              <a href="#">

                                  <img src="http://placehold.it/660x450/CCC/FFF" class="img-responsive" alt="...">
                                  <p class="text-center">Event Apparel</p>

                              </a>

                      </div>
                  </div>
    	            </div>
                  <div class="col-sm-6 col-md-3 web">
                      <div class="gallary-item" data-toggle="modal" data-target="#myModal8">
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

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">University of Rochester Sustainability Program Website</h4>
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

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Cinemagraphs</h4>
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

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Processing Sketches</h4>
      </div>
      <div class="modal-body">


        <p>I had created several sketches in processing while learning the language in Introcudtion to Digital Art, so I worked to rewrite them to work with the p5.js language so I could put them on the webpage. Each sketch serves as an experimental doodle to practice writing in Processing, JavaScript, and HTML. </p>



        <a href="http://www.gunnze.me"><img src="css/images/worms.jpg" alt="worms sketch" class="img-responsive" alt="worms"></a>
        <p class="port-label"><a href="http://www.gunnze.me">Worms</a></p>

        <a href="http://www.gunnze.me/pi"><img src="css/images/pi.jpg" alt="worms sketch" class="img-responsive" alt="pi"></a>
        <p class="port-label"><a href="http://www.gunnze.pi">Pi</a></p>

        <a href="http://www.gunnze.me/moon"><img src="css/images/moon.jpg" alt="worms sketch" class="img-responsive" alt="moon"></a>
        <p class="port-label"><a href="http://www.gunnze.me/moon">Moon</a></p>


        <div class="panel-footer">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-2">
            <span class="label label-default">HTML</span>
            <span class="label label-default">CSS</span>
            <span class="label label-default">Photoshop</span>
            <span class="label label-default">Illustrator</span>
            <span class="label label-default">Processing</span>
            <span class="label label-default">JavaScript</span>
          </div>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Event Posters</h4>
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

<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Album Covers</h4>
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

<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Jasmine</h4>
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

<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Event Apparel</h4>
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

<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">ConnectTA</h4>
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
