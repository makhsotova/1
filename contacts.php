<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <title>The Tattooist</title>
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
                                    <a title="About Us" href="about-us-1.php">About Us</a>
                                  
                                </li>
                                <li>
                                    <a title="Portfolio" href="#">Portfolio</a>
									<ul>
                                        <li class="selected"><a title="Alexsandra Masiuk" href="artist.php">Alexsandra Masiuk</a></li>
										<li class="selected"><a title="Sasha Unisex" href="artist2.php">Sasha UNIQUE</a></li>
										
                                    </ul>
									
                                   
                                </li>
                                
                                <li><a title="Jotnal" href="journal.php">Journal</a></li>
                                <li class="selected"><a title="Contacts" href="contacts.php">Contacts</a></li>
								<li> <a title="Appointment" href="appointment.php">Appoinment</a></li>
                            </ul>
                        </nav>

                        <!-- ============ Main Navigation - END ============ -->

                    </div>
                </div>

                <h2 id="page-title">Contacts</h2>
            </header>

            <!-- ============ Main Header - END ============ -->

            <div id="main">



                <div id="contacts-bar" class="row"> </div>

           

                                <!-- ============ Works - START ============ -->

                <div class="section">

                    <div class="content container">

                        <div class="works">

                            <div class="work col-md-4 col-sm-6">

                                <div class="work-thumb">
                                    <img src="img/cn/work-image-1.jpg" alt="Work 01">
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/cn/work-image-1.jpg"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="work col-md-4 col-sm-6">

                                <div class="work-thumb">
                                    <img src="img/cn/work-image-2.jpg" alt="Work 02">
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/cn/work-image-2.jpg"></a>
                                        <a class="info-link" href="#"></a>
                                    </div>
                                </div>
                                <div class="info-work testimonial">
                                    
                                   <div class="name">Testimonial A</div>
                                </div>

                            </div>

                            <div class="work col-md-4 col-sm-6">

                                <div class="work-thumb">
                                    <img src="img/cn/work-image-3.jpg" alt="Work 03">
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/cn/work-image-3.jpg"></a>
                                        <a class="info-link" href="#"></a>
                                    </div>
                                </div>
                                <div class="info-work">
                                    <p>
                                        hello
										</p>
                                   <div class="name">John Doe <small>, the Artist</small></div>
                                </div>

                            </div>

                            

                               
                            
                            
                        </div>

                    </div>

                </div>

                <!-- ============ Works - END ============ -->
				
				

                <div class="section">

                    <div class="content container">

                        <h2 class="focus-title">We search new tattoo masters</h2>
						

                        
                        <!-- ============ Contact Form - START ============ -->

                       <form class="contact-form row" action="regcheck.php" method="post" href="regcheck.php">
                            <div class="col-md-6">
                                <label><strong>Full Name *</strong>
                                    <input class="required" type="text" name="name">
                                </label> 
								<label><strong>Email *</strong>
                                    <input class="required" type="text" name="email">
                                </label>
						 <label><strong>Phone number*</strong>
                                    <input class="required" type="text" name="tel">
                                </label>

                              
                                
                            </div>
                            <div class="col-md-6">
                                <label><strong>What is your tattoo style </strong>
                                    <textarea class="required" name="message"></textarea>
                                </label>
                                <p>( <strong>*</strong> ) = Mandatory field</p>
                              <input class="submit btn md" type="submit" name="submit" value="Send Message">
                            </div>
                           <input type="hidden" name="form_type" value="contact"> 
                        </form>
						
					
                        <!-- ============ Contact Form - END ============ -->

                    </div>

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

       

    </body>
</html>