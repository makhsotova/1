<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <title>The Tattooist | Appointment Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

        <div class="wrapper">

            <!-- ============ Main Header - START ============ -->

            <header id="master-header">
                <div class="top-header">

                    <div class="container">

                        <h1 id="logo">
                            <a href="index.php">
                                <img src="img/logo.png" alt="The Tattooist - Tattoo Studio">
                            </a>
                        </h1>
                        <!-- ============ Main Navigation - START ============ -->

                                                <a id="nav-toggle" href="#"><span></span></a>
                        <nav id="nav-menu">
                            <ul>
                                <li>
                                    <a title="About Us 1 Page" href="about-us-1.php">About Us</a>
                                    
                                </li>
                                <li>
                                    <a title="Portfolio" href="#">Portfolio</a>
									<ul>
                                        <li><a title="Artist Page 1" href="artist.php">Alexsandra Masiuk</a></li>
										<li><a title="Artist Page 2" href="artist2.php">Sasha UNIQUE</a></li>
                                    </ul>
                                                                       
                                   
                                </li>
                                <li>
                                   
                                    
                                </li>
                                <li><a title="Jornal" href="journal.php">Jornal</a></li>
                                <li><a title="Contacts Page" href="contacts.php">Contacts</a></li>
								
			        <li class="selected"><a title="Appointment Page" href="appointment.php">Appointment</a></li>
                                
                            </ul>
                        </nav>

                        <!-- ============ Main Navigation - END ============ -->

                    </div>
                </div>

                <h2 id="page-title">Appointment <span>Page</span></h2>
            </header>

            <!-- ============ Main Header - END ============ -->

            <div id="main">

          

                <div id="contacts-bar" class="row">                 
                </div>

          

                <div class="section">

                    <div class="content container">

                        <div class="col-md-4">

                            <h2 class="focus-title">Request an appointment</h2>

                            <p>Here you should choose part of body, size, colorfull of not will be you tattoo. Also you write small description about tattoo. We will read your query, call you and say when you will have a session.</p>

                            
                            <h3>Our Studio</h3>

                            <div id="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2908.059398136846!2d76.66723851548342!3d43.20824347913897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38834f7675d8a6c3%3A0x7b7d14aec270c056!2z0KPQvdC40LLQtdGA0YHQuNGC0LXRgiDQodGD0LvQtdC50LzQsNC9INCU0LXQvNC40YDQtdC70Y8!5e0!3m2!1sru!2skz!4v1463501287446" width="300" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>

                        </div>

                        <!-- ============ Appointment Form - START ============ -->

                        <div class="col-md-8">

                            <form class="contact-form" action="appdata.php" href="appdata.php" method="post">

                                <label>
                                    <strong>First Name and Last name *</strong>
                                    <input class="required" type="text" name="name">
                                </label>

                                <label>
                                    <strong>Email *</strong>
                                    <input class="required" type="text" name="email">
                                </label>
                                <label>
                                    <strong>Phone Number *</strong>
                                    <input class="required" type="text" name="number">
                                </label>
                                <label>
                                    <strong>Part of the Body</strong>
                                  <input class="required" type="text" name="body">
                                </label>

                                <label><strong>Tattoo Size *</strong> (ex: 5x4)
                                    <input class="required" type="text" name="size">
                                </label>
                         
                                <label><strong>Tattoo Description *</strong>
                                    <textarea class="required" name="description"></textarea>
                                </label>
                          
                               

                                <hr>
                                <p>( <strong>*</strong> ) = Mandatory field</p>
                                <input class="submit btn md" type="submit" name="submit" value="Request Appointment">
                                <input type="hidden" name="form_type" value="appointment">

                            </form>

                        </div>

                        <!-- ============ Appointment Form - END ============ -->

                    </div>

                </div>


            <!-- ============ Footer - START ============ -->

            <footer class="dark">

                <div class="container">

                    <div class="row">

                        <div class="footer-col col-md-4 col-sm-6">

                            <h3 class="focus-title">About Us</h3>
                            <p><img width="200" class="align-center" src="img/logo.png" alt="THE TATTOOIST - Tattoo Studio"></p>
                            <p>Currently working at a PRIVATE STUDIO in Las Vegas, Nevada. We are dedicated to providing a clean, safe, and enjoyable experience for our client. We provide a friendly, knowledgeable staff that does great artwork without any of that "star" attitude. Just stop by and you'll be pleasantly surprised at the service we provide!
                     
                        </div>

                        <div class="footer-col col-md-4 col-sm-6">

                            <h3 class="focus-title"><i class="fa fa-clock-o"></i>Working Days</h3>
                            <dl class="working-days">
                                <dt>Monday</dt>
                                <dd>10:00 - 19:00</dd>
                                <dt>Tuesday</dt>
                                <dd>10:00 - 19:00</dd>
                                <dt>Wednesday</dt>
                                <dd>10:00 - 19:00</dd>
                                <dt>Thursday</dt>
                                <dd>10:00 - 19:00</dd>
                                <dt>Friday</dt>
                                <dd>10:00 - 19:00</dd>
                                <dt>Saturday</dt>
                                <dd>10:00 - 19:00</dd>
                                <dt>Sunday</dt>
                                <dd>CLOSED</dd>
                            </dl>

                        </div>

                        <div class="footer-col footer-contacts col-md-4 col-sm-12">

                            <div class="contact-item"><span>THE TATTOOIST - Tattoo Studio</span> <strong>1234 Our Awesome Street, Our Awesome City, OAS 123456</strong></div>
                            <div class="contact-item"><span>Phone:</span> <strong>(00) 123 456789</strong></div>
                            <div class="contact-item"><span>Email:</span> <strong><a href="#">email@domain.com</a></strong></div>
                            <div class="contact-item">
                                <span>Follow us on:</span>
                                <ul class="social-links">
                                    <li><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a title="Google+" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a title="Instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="copyright">
                    &copy; 2015 - <strong>THE TATTOOIST - Tattoo Studio</strong>
                </div>

            </footer>

            <!-- ============ Footer - END ============ -->

        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/common.js"></script>
        <script src="js/config.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Map Scripts -->
        <script src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
        <script src="js/map.js"></script>

    </body>
</html>
