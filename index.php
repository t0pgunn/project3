

<!-- This website has a long scrolly homepage with 3 sections and a page for the portfolio.
The site uses the bootstrap framework and a plugin to scroll the home page. The portfolio
uses a jquery plugin to present and arrange the works, also using bootstrap modals. The contact
form validates every slot and also checks that the email is valid, and then writes it to the table
in the database. A few includes are used like the nav bar, the footer, and the modals,  since the
portfolio page was so long when they were included. I chose to use basic SMACSS architexture when
writing it. There is also a thank you page which the user is taken to after submitting the for.
Some of the stuff on the portfolio page links to my personal site / server since it wouldve been
too much space for the class server. Only Validation errors are role declarations.-->





<!DOCTYPE html>

<html lang="en">



<head>



  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="Project 3">

  <meta name="author" content="Gunnar Zemering">



  <title>Gunnar Zemering</title>



  <!-- Bootstrap Core CSS -->

  <link href="css/bootstrap.css" rel="stylesheet">



  <!-- Custom CSS -->

  <link href="css/styles.css" rel="stylesheet">





</head>





<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">



  <?php include "inc/nav-home.php" ?>



  <!-- Intro Section and full page width slideshow -->

  <section id="intro" class="intro-section">



    <div id="myCarousel" class="carousel slide" data-ride="carousel">





      <!-- Wrapper for slides -->

      <div class="carousel-inner" role="listbox">

        <div class="item active">

          <img src="css/images/hero1.jpg" alt="jasmine" width="2560" height="1080">

        </div>



        <div class="item">

          <img src="css/images/hero2.jpg" alt="cds" width="2560" height="1080">

        </div>



        <div class="item">

          <img src="css/images/hero3.jpg" alt="Flower" width="2560" height="1080">

        </div>





      </div>

    </div>



      <div class="container">

        <div class="row">

          <div class="col-sm-6">

            <h1>Welcome</h1>

            <p class="addpad">My name is Gunnar Zemering, I am a third year student at the University of Rochester studying Digital Media Science and Computer Science. I graduate in Spring 2018, over time accumulating a courselist focusing on web design, digital art, web development, digital media production and branding. </p>

          </div>



          <div class="col-sm-6">

            <p class="addpad"> On this site you can read my complete list of accomplishments and skills, as well as see some of the work I have been creating on the <a href="portfolio.php">portfolio page.</a> Feel free to contact me with any messages or requests.</p>

            <div class="addpad"> <a class="btn btn-default page-scroll" href="#about">Learn More</a></div>

          </div>



        </div>

      </div>

  </section>



    <!-- About Section and Resume-->

  <section id="about" class="about-section">

      <div class="container">

        <div class="row">

          <div class="col-lg-12">



            <h1>About me</h1>


<!-- I chose to use a panel to make it easier to arrange information -->

            <div class="panel">

              <div class="panel-heading">

                <div class="text-center">

                  <div class="row">

                    <div class="col-lg-9">

                      <h2 class="pull-left">Academics</h2>

                    </div>

                    <div class="col-lg-3">

                      <h3 class="pull-right">

                        <small><em>Gunnar Zemering<br>University of Rochester</em></small>

                      </h3>

                    </div>

                  </div>

                </div>

              </div>



              <div class="panel-body course-list">



                <h4 class="pull-left">University of Rochester</h4>



                <p class="pull-left text-left">First year focus on mechanical engineering, studying classes teaching the physical, chemical, and structural properties of various materials, as well as chemistry, physics, economics, and multiple calculus courses. </p>

                <p class="pull-left text-left">Second year focus on digital media studies, studying classes teaching the history of digital media, graphic design, 3D modeling and rapid prototyping, game design and immersive technologies, web design, photography, video production, and digital art. </p>

                <p class="pull-left text-left">Minor focus on computer science, studying classes teaching Java, HTML, CSS, JavaScript, Matlab, and Python.</p>





              </div>


<!-- Cool badge list of skills -->

              <div class="panel-footer">

                <h4>Skills</h4>

                <div class="row">

                  <div class="col-sm-8 col-sm-offset-2">

                    <span class="label label-default">Java</span>

                    <span class="label label-default">HTML</span>

                    <span class="label label-default">CSS</span>

                    <span class="label label-default">Matlab</span>

                    <span class="label label-default">Python</span>

                    <span class="label label-default">Photoshop</span>

                    <span class="label label-default">Illustrator</span>

                    <span class="label label-default">After Effects</span>

                    <span class="label label-default">Lightroom</span>

                    <span class="label label-default">Final Cut Pro</span>

                    <span class="label label-default">Cinema4D</span>

                    <span class="label label-default">Unreal Engine</span>

                    <span class="label label-default">Eclipse</span>

                    <span class="label label-default">Processing</span>

                    <span class="label label-default">Arduino</span>

                    <span class="label label-default">Atom</span>

                    <span class="label label-default">Word</span>

                    <span class="label label-default">PowerPoint</span>

                    <span class="label label-default">Excel</span>

                    <span class="label label-default">PHP</span>

                    <span class="label label-default">JavaScript</span>

                  </div>

                </div>

              </div>


<!-- Second chunk of info -->

              <div class="panel-heading heading-two">

                <div class="text-center">

                  <div class="row">

                    <div class="col-lg-9">

                      <h2 class="pull-left">Coursework</h2>

                    </div>

                    <div class="col-lg-3">

                      <h3 class="pull-right">

                        <small><em>Digital Media Studies<br>Class of 2018</em></small>

                      </h3>

                    </div>

                  </div>

                </div>

              </div>



              <div class="panel-body">

                <!-- Course List Columns -->

                <div class="row course-list">



                  <div class="col-sm-3 close-columns">

                    <h3>Digital Media</h3>

                    <ul class="list-group">

                      <li class="list-group-item">Digital Media Toolkit</li>

                      <li class="list-group-item">Digital Art</li>

                      <li class="list-group-item">Advanced Digital Art</li>

                      <li class="list-group-item">Photography</li>

                      <li class="list-group-item">Introduction to Digital Media Studies</li>

                      <li class="list-group-item">Design in the Digital Age</li>

                      <li class="list-group-item">Introduction to Visual Culture and Analysis</li>

                    </ul>

                  </div>



                  <div class="col-sm-3">

                    <h3>Computer Science</h3>

                    <ul class="list-group">

                      <li class="list-group-item">Web Design and Development</li>

                      <li class="list-group-item">Advanced Web Design and Development</li>

                      <li class="list-group-item">The Art of Programming</li>

                      <li class="list-group-item">The Science of Programming</li>

                      <li class="list-group-item">Engineering Computing</li>



                    </ul>

                  </div>



                  <div class="col-sm-3">

                    <h3>Mathematics</h3>

                    <ul class="list-group">

                      <li class="list-group-item">Calculus BC</li>

                      <li class="list-group-item">Calculus II</li>

                      <li class="list-group-item">Multidimensional Calculus</li>



                    </ul>

                  </div>



                  <div class="col-sm-3">

                    <h3>Science</h3>

                    <ul class="list-group">

                      <li class="list-group-item">Chemisty</li>

                      <li class="list-group-item">The Engineering of Bridges</li>

                      <li class="list-group-item">Mechanics</li>

                      <li class="list-group-item">Principles of Economics</li>
			</ul>

                    </div>



                  </div>



                  <div class="pull-right">



                    <a class="btn btn-default btn-lg page-scroll" href="#contact">Contact Me</a>

                    <a class="btn btn-default btn-lg page-scroll" href="portfolio.php">View Portfolio</a>





                  </div>



                </div>



              </div>





            </div>

          </div>

        </div>

      </section>





      <!-- Contact FormS -->

      <section id="contact" class="contact-section">

        <div class="container">

          <div class="row">

            <div class="col-lg-12">

              <h1>Contact Me</h1>

            </div>



            <div class="row">

              <div class="col-lg-12 col-centered">

                <!-- A bootstrap form that writes only if everything validates -->

                <form class="form-horizontal" role="form" name="myForm" onsubmit="return(validate()&&validateEmail());" action="database-write.php" method="post">





                  <div class="form-group">

                    <label for="name" class="col-sm-1 control-label" >Name</label>

                    <div class="col-sm-11">

                      <input type="text" class="form-control" id="name" name="name" placeholder="" value="">

                    </div>

                  </div>





                  <div class="form-group">

                    <label for="email" class="col-sm-1 control-label" >Email</label>

                    <div class="col-sm-11">

                      <input type="text" class="form-control" id="email" name="email" placeholder="" value="">

                    </div>

                  </div>



                  <div class="form-group">

                    <label for="phone" class="col-sm-1 control-label" >Phone Number</label>

                    <div class="col-sm-11">

                      <input type="text" class="form-control" id="phone" name="phone" placeholder="" value="">

                    </div>

                  </div>



                  <div class="form-group">

                    <label for="message" class="col-sm-1 control-label" >Message</label>

                    <div class="col-sm-11">

                      <textarea class="form-control" rows="4" id="message" name="message"></textarea>

                    </div>

                  </div>



                  <div class="form-group">

                    <div class="col-sm-12">

                      <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">

                    </div>

                  </div>





                </form>





              </div>

            </div>

          </div>

        </div>

        </section>





<!-- Footer -->

        <?php



        include "inc/footer.php"



        ?>











<!-- jQuery -->

<script src="js/jquery.js"></script>



<!-- Bootstrap Core JavaScript -->

<script src="js/bootstrap.min.js"></script>



<!-- Scrolling Nav JavaScript -->

<script src="js/jquery.easing.min.js"></script>

<script src="js/scrolling-nav.js"></script>

<script type="text/javascript">

// Validate function


function validate(){



  if( document.myForm.name.value == "" )

  {

    alert( "Please provide a name!" );

    document.myForm.name.focus() ;

    return false;

  }



  if( document.myForm.email.value == "" )

  {

    alert( "Please provide an email" );

    document.myForm.email.focus() ;

    return false;

  }



  if( document.myForm.phone.value == "" )

  {

    alert( "Please provide a phone number" );

    document.myForm.phone.focus() ;

    return false;

  }



  if( document.myForm.message.value == "" )

  {

    alert( "Your message is blank" );

    document.myForm.message.focus() ;

    return false;

  }





  return( true );



}



function validateEmail(){



  var emailID = document.myForm.email.value;

  atpos = emailID.indexOf("@");

  dotpos = emailID.lastIndexOf(".");



  if (atpos < 1 || ( dotpos - atpos < 2 )) {



    alert("Please enter correct email ID ____@____.___")

    document.myForm.email.focus() ;

    return false;

  }



  return( true );

}

</script>





</body>



</html>
