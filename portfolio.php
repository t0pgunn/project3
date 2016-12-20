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
        <p>Working with the sustainability and web development deportment at the University of Rochester, we redesigned the site to be more modern, easier to read, and easier navigate. The site plans to launch sometime in 2017.</p>
      <img src="css/images/website.jpg" alt="website" class="img-responsive"></a>
      </div>

      <div class="panel-footer">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-3">
          <span class="label label-default">HTML</span>
          <span class="label label-default">CSS</span>
          <span class="label label-default">Word</span>
          <span class="label label-default">PowerPoint</span>
          <span class="label label-default">JavaScript</span>
        </div>
      </div>
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
        <p>A set of 5 cinemagraphs created for the exhibit "Gumption", for Introduction to photography. Each work consists of a still, yet continuously moving photograph which is complimented by a soundscape. <a href="http://gunnze.me/weekes">Click here </a>to view all five in full resolution with sound.</p>

        <div style='position:relative;padding-bottom:57%'><iframe src='https://gfycat.com/ifr/FastHeftyIbadanmalimbe' frameborder='0' scrolling='no' width='100%' height='100%' style='position:absolute;top:0;left:0;' allowfullscreen></iframe></div>

        <div style='position:relative;padding-bottom:57%'><iframe src='https://gfycat.com/ifr/DelightfulGivingChimpanzee' frameborder='0' scrolling='no' width='100%' height='100%' style='position:absolute;top:0;left:0;' allowfullscreen></iframe></div>

        <div style='position:relative;padding-bottom:57%'><iframe src='https://gfycat.com/ifr/SmoothParchedAruanas' frameborder='0' scrolling='no' width='100%' height='100%' style='position:absolute;top:0;left:0;' allowfullscreen></iframe></div>

        <div style='position:relative;padding-bottom:57%'><iframe src='https://gfycat.com/ifr/FrightenedEarnestBoutu' frameborder='0' scrolling='no' width='100%' height='100%' style='position:absolute;top:0;left:0;' allowfullscreen></iframe></div>

        <div style='position:relative;padding-bottom:57%'><iframe src='https://gfycat.com/ifr/GrandioseBrownKomododragon' frameborder='0' scrolling='no' width='100%' height='100%' style='position:absolute;top:0;left:0;' allowfullscreen></iframe></div>

      </div>


      <div class="panel-footer">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-2">
          <span class="label label-default">Photoshop</span>
          <span class="label label-default">After Effects</span>
          <span class="label label-default">Lightroom</span>
          <span class="label label-default">Final Cut Pro</span>
        </div>
      </div>
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



        <a href="http://www.gunnze.me"><img src="css/images/worms.jpg" alt="worms sketch" class="img-responsive"></a>
        <p class="port-label"><a href="http://www.gunnze.me">Worms</a></p>

        <a href="http://www.gunnze.me/pi"><img src="css/images/pi.jpg" alt="pi sketch" class="img-responsive"></a>
        <p class="port-label"><a href="http://www.gunnze.pi">Pi</a></p>

        <a href="http://www.gunnze.me/moon"><img src="css/images/moon.jpg" alt="moon sketch" class="img-responsive"></a>
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
      <p>Examples of posters, flyers, and invitations for events such as parties, formals, and concerts. </p>
      <br>
      <img src="css/images/poster1.jpg" alt="new years" class="img-responsive">
      <br>
      <img src="css/images/poster2.jpg" alt="concert" class="img-responsive">
      <br>
      <img src="css/images/poster3.jpg" alt="halloween" class="img-responsive">
      <br>
      <img src="css/images/invite.jpg" alt="invitation" class="img-responsive">
      </div>

      <div class="panel-footer">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-3">

          <span class="label label-default">Photoshop</span>
          <span class="label label-default">Illustrator</span>

        </div>
      </div>
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

        <p>Music branding, artwork, and album covers.</p>
        <p>Album Cover for <a href="http://lukemetzlermusic.com/">Luke Metzler</a></p>
        <img src="css/images/home.jpg"class="img-responsive" alt="home">

        <br>

        <div class="row">

          <div class="col-md-12">

            <p>Album Covers designed for Jai Paul using the <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#myModal6" > Jasmine project</a>, and 3D rendered in Cinema4D.</p>

          </div>

          <div class="col-xs-6">
            <img src="css/images/cover1.jpg" alt="=cover1" class="img-responsive">
            <img src="css/images/cover3.jpg" alt="cover3" class="img-responsive">

          </div>
          <div class="col-xs-6">
            <img src="css/images/cover2.jpg" alt="cover2" class="img-responsive">
            <img src="css/images/cover4.jpg" alt="cover3" class="img-responsive">

          </div>
        </div>
      </div>

            <div class="panel-footer">
            <div class="row">
              <div class="col-sm-10 col-sm-offset-3">
                <span class="label label-default">Photoshop</span>
                <span class="label label-default">Illustrator</span>
                <span class="label label-default">Cinema4D</span>
                <span class="label label-default">Processing</span>
              </div>
            </div>
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
        <p>Jasmine is a work-in-progress application built in p5.js that uses the volume of certain frequencies in a song to generate artwork. Through coding, math, and a little bit of randomness, Jasmine will create colorful and lively artwork that compliments the music it is listening to. Due to the nature of music, each song will generate completely unique artwork. With variable colors, shapes, and sizes, Jasmine can give an identity to songs without one.</p>

        <div style='position:relative;padding-bottom:57%'><iframe src='https://gfycat.com/ifr/DownrightHonorableHarborporpoise' frameborder='0' scrolling='no' width='100%' height='100%' style='position:absolute;top:0;left:0;' allowfullscreen></iframe></div>

        <p><a href="http://www.gunnze.me/jasmine/">Learn more and try it yourself.</a> (WIP)</p>
        <p>I plan to explain this project more and how it works when I have time.</p>
        <p>Prints:</p>


      </div>

      <div class="panel-footer">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-2">
          <span class="label label-default">HTML</span>
          <span class="label label-default">CSS</span>
          <span class="label label-default">Python</span>
          <span class="label label-default">Photoshop</span>
          <span class="label label-default">Illustrator</span>
          <span class="label label-default">Processing</span>
          <span class="label label-default">JavaScript</span>
        </div>
      </div>
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


      <div class="panel-footer">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-4">

          <span class="label label-default">Photoshop</span>
          <span class="label label-default">Illustrator</span>

        </div>
      </div>
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
        <p>Th purpose of this project was to redesign the TA hiring and management system for the University of Rochester. My project team wanted a clean and simple design since professors tend to use an excel spreadsheet to keep track of current TA’s and LAB assignment times. Additionally, we wanted to make it easy to access and find information on how to apply for a TA position, and allow for better communication between TA’s, professors, and administrator to have an open dialogue that  decreases the number of complaints between users. </p>
        <img src="css/images/homep.jpg" alt="home" class="img-responsive">
        <p>The Welcome Page is meant to welcome users into the program. Design is kept clean in order to keep tasks concentrated. From the home page, current users can log in right away, or new users can learn more about the service through the What We Do page. </p>
        <img src="css/images/info.jpg" alt="info" class="img-responsive">
        <p>The second page, titled “What We Do”, will quickly send new users to the most common information they usually need when getting started. The Easy to Sign up Tab will help them connect their blackboard account to the program or connect with IT if they do not have one. The communication tab elaborates on the overall purpose of the program, and the simplified work management page will tell the new user about some of the services that the program provides. </p>
        <img src="css/images/login.jpg" alt="login" class="img-responsive">
        <p>A login page, integrated through Blackboard, for accessing the ConnecTa dashboard.</p>
        <img src="css/images/dashboard.jpg" alt="dashboard" class="img-responsive">
        <p>The first page that will show up upon login, titled the Dashboard. The dashboard allows the user to see their calendar for upcoming events, message a contact quickly, view recent announcements, or quickly jump over to their blackboard homepage.</p>
        <img src="css/images/work.jpg" alt="work" class="img-responsive">
        <p>Under the work panel, users can easily find work, manage current work, and view work related announcements.</p>
        <img src="css/images/contact.jpg" alt="contact" class="img-responsive">
        <p>The contacts page is where users can reach out to TA’s, professors, and their workshop peers and labmates if they need help with something.</p>



      </div>

      <div class="panel-footer">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-2">
          <span class="label label-default">Java</span>
          <span class="label label-default">HTML</span>
          <span class="label label-default">CSS</span>
          <span class="label label-default">Photoshop</span>
          <span class="label label-default">Atom</span>
          <span class="label label-default">Word</span>
          <span class="label label-default">PowerPoint</span>
          <span class="label label-default">JavaScript</span>
        </div>
      </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>












<?php

include "inc/footer.php"

 ?>

</body>

</html>
