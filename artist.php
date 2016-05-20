<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <title>The Tattooist |Artist Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body id="page-artist">

        <div class="wrapper">

            <!--Main Header - START -->

            <header id="master-header">
                <div class="top-header">
                    
                    <div class="container">

                        <h1 id="logo">
                            <a href="index.php">
                                <img src="img/logo.png" alt="The Tattooist - Tattoo Studio">
                            </a>
                        </h1>

                        <!-- Main Navigation - START  -->

                        <a id="nav-toggle" href="#"><span></span></a>
                        <nav id="nav-menu">
                            <ul>
                                <li>
                                    <a title="About Us 1 Page" href="about-us-1.php">About Us</a>
                                    
                                </li>
 <li>
                                    <a title="Portfolio" href="#">Portfolio</a>
									<ul>
                                        <li class="selected"><a title="Artist Page" href="artist.php">Alexsandra Masiuk</a></li>
										<li class="selected"><a title="Artist Page" href="artist2.php">Sasha UNI</a></li>
										
                                    </ul>
                                   

                                <li><a title="journal" href="journal.php">Journal</a></li>
                                <li><a title="Contacts Page" href="contacts.php">Contacts</a></li>
								<li><a title="Appointment" href="appointment.php">Appoinment</a></li>
                               
                            </ul>
                        </nav>

                        <!-- ============ Main Navigation - END ============ -->

                    </div>
                </div>

                <h2 id="page-title">Sasha Masyuk</h2>
                
            </header>

            <!-- ============ Main Header - END ============ -->

            <div id="main">

                <!-- ============ Contacts Bar - START ============ -->

                <div id="contacts-bar" class="row">
                    <div class="address col-md-6"><strong>THE TATTOOIST - Tattoo Studio</strong>, 1234 Our Awesome Street, Our Awesome City, OAS 123456</div>
                    <div class="other col-md-6">
                        <span class="contact"><i class="fa fa-phone"></i>Phone: <strong>(00) 123 456789</strong></span>
                        <span class="contact"><i class="fa fa-envelope"></i>Email: <a href="mailto:email@domain.com"><strong>email@domain.com</strong></a></span>
                    </div>
                </div>

                <!-- ============ Contacts Bar - END ============ -->

                <!-- ============ Artist Description - START ============ -->

                <div class="section">

                    <div class="content container">

                        <div class="full row">

                            <div class="col-md-6">

                                <p><strong>Hi, my name is Alexsandra Masiuk!</strong> 
Artist , illustrator , tattoo - Artist
Alexander Masuk

I'm working on my sketches , only in black , the stylistic direction of my work can look at albums with the finished work .
Sketch can be made to order .
                                <h4>Get in touch!</h4>
                                <ul class="social-links">
                                    <li><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a title="Google+" href="#"><i class="fa fa-google-plus"></i></a></li>

                                    <li><a title="LinkedIn" href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>

                                

                            </div>

                            <div class="col-md-6">

                                <img src="img/st/artist.jpg" alt="Tattoo Artist">

                                <!-- ============ Appointment Form - START ============ -->

                                <form id="request" class="contact-form popup mfp-hide" action="mailer/appointment.php" method="post">

                                    <div class="head"><img src="img/logo.png" alt="logo"></div>
                                    <h3 class="focus-title"><i class="fa fa-thumb-tack"></i><span>Request an appointment to</span> Tattoo Artist Name</h3>

                                    <label>
                                        <strong>First Name *</strong>
                                        <input class="required" type="text" name="first_name">
                                    </label>
                                    <label>
                                        <strong>Last Name *</strong>
                                        <input class="required" type="text" name="last_name">
                                    </label>
                                    <label>
                                        <strong>Email *</strong>
                                        <input class="required" type="text" name="email">
                                    </label>
                                    <label>
                                        <strong>Phone Number *</strong>
                                        <input class="required" type="text" name="phone">
                                    </label>
                                    <label>
                                        <strong>Part of the Body</strong>
                                        <select name="part_body">
                                            <option value="Leg">Leg</option>
                                            <option value="Calf">Calf</option>
                                            <option value="Ankle">Ankle</option>
                                            <option value="Foot">Foot</option>
                                            <option value="Arm">Arm</option>
                                            <option value="Forearm">Forearm</option>
                                            <option value="Wrist">Wrist</option>
                                            <option value="Hand">Hand</option>
                                            <option value="Nek">Nek</option>
                                            <option value="Head">Head</option>
                                            <option value="Back">Back</option>
                                            <option value="Buttocks">Buttocks</option>
                                            <option value="Genitals">Genitals</option>
                                            <option class="other" value="Other">Other (Specify below)</option>
                                        </select>
                                    </label>
                                    <label id="other" class="hidden-field">
                                        <strong>Specific Part of Body</strong>
                                        <input type="text" name="custom">
                                    </label>
                                    <label><strong>Tattoo Size *</strong> (ex: 5x4)
                                        <input class="required" type="text" name="size">
                                    </label>
                                    <div class="radio label">
                                        <strong>Tattoo Color</strong>
                                        <label>
                                            <input type="radio" value="Black &amp; White" name="color" checked>
                                            <span class="radio-replacer"></span>
                                            <span>Black &amp; White</span>
                                        </label>
                                        <label>
                                            <input class="required" type="radio" value="Color" name="color">
                                            <span class="radio-replacer"></span>
                                            <span>Color</span>
                                        </label>
                                    </div>
                                    <label><strong>Tattoo Description *</strong>
                                        <textarea class="required" name="description"></textarea>
                                    </label>
                                    <hr>
                                     <label>
                                        <input class="required" type="checkbox" name="check">
                                        <span class="checkbox-replacer"></span>
                                        <strong>Check to authorize the system *</strong>
                                    </label>
                                    <hr>
                                    <p>( <strong>*</strong> ) = Mandatory field</p>
                                    <input class="submit btn md" type="submit" name="submit" value="Request Appointment">
                                    <input type="hidden" name="artist" value="Artist Name">
                                    <input type="hidden" name="form_type" value="appointment">

                                </form>

                                <!-- ============ Appointment Form - END ============ -->

                            </div>

                        </div>

                    </div>

                </div>

                <!-- ============ Artist Description - END ============ -->

                <!-- ============ Artist Works - START ============ -->

                <div id="latest-works" class="section">

                    <div class="section-title">
                        <h2>Latest Works</h2>
                    </div>

                    <div class="content container">

                        <div class="works">

                            <div class="work col-md-2 col-sm-6">

                                <div class="work-thumb">
                                    <img src="img/st/work-image-1.jpg" alt="Work 01">
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/st/work-image-1.jpg"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="work col-md-2 col-sm-6">

                                <div class="work-thumb">
                                    <img src="img/st/work-image-11.jpg" alt="Work 02">
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/st/work-image-11.jpg"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="work col-md-2 col-sm-6">

                                <div class="work-thumb">
                                    <img src="img/st/work-image-3.jpg" alt="Work 03">
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/st/work-image-3.jpg"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="work col-md-2 col-sm-6">

                                <div class="work-thumb">
                                    <img src="img/st/work-image-4.jpg" alt="Work 04">
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/st/work-image-4.jpg"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="work col-md-2 col-sm-6">

                                <div class="work-thumb">
                                    <img src="img/st/work-image-5.jpg" alt="Work 05">
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/st/work-image-5.jpg"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="work col-md-2 col-sm-6">

                                <div class="work-thumb">
                                    <img src="img/st/work-image-6.jpg" alt="Work 06">
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/st/work-image-6.jpg"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="work col-md-2 col-sm-6">

                                <div class="work-thumb">
                                    <img src="img/st/work-image-7.jpg" alt="Work 07">
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/st/work-image-7.jpg"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="work col-md-2 col-sm-6">

                                <div class="work-thumb">
                                    <img src="img/st/work-image-8.jpg" alt="Work 08">
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/st/work-image-8.jpg"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="work col-md-2 col-sm-6">

                                <div class="work-thumb">
                                    <img src="img/st/work-image-9.jpg" alt="Work 09">
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/st/work-image-9.jpg"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="work col-md-2 col-sm-6">

                                <div class="work-thumb">
                                    <img src="img/st/work-image-10.jpg" alt="Work 10">
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/st/work-image-10.jpg"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="work col-md-2 col-sm-6">

                                <div class="work-thumb">
                                    <img src="img/st/work-image-111.jpg" alt="Work 11">
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/st/work-image-111.jpg"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="work col-md-2 col-sm-6">

                                <div class="work-thumb">
                                    <img src="img/st/work-image-12.jpg" alt="Work 12">
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/st/work-image-12.jpg"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="work col-md-2 col-sm-6">

                                <div class="work-thumb">
                                    <img src="img/st/work-image-13.jpg" alt="Work 13">
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/st/work-image-13.jpg"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="work col-md-2 col-sm-6">

                                <div class="work-thumb">
                                    <img src="img/st/work-image-14.jpg" alt="Work 14">
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/st/work-image-14.jpg"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="work col-md-2 col-sm-6">

                                <div class="work-thumb">
                                    <img src="img/st/work-image-15.jpg" alt="Work 15">
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/st/work-image-15.jpg"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="work col-md-2 col-sm-6">

                                <div class="work-thumb">
                                    <img src="img/st/work-image-16.jpg" alt="Work 16">
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/st/work-image-16.jpg"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="work col-md-2 col-sm-6">

                                <div class="work-thumb">
                                    <img src="img/st/work-image-17.jpg" alt="Work 17">
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/st/work-image-17.jpg"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="work col-md-2 col-sm-6">

                                <div class="work-thumb">
                                    <img src="img/st/work-image-18.jpg" alt="Work 18">
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/st/work-image-18.jpg"></a>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                 <!-- ============ Artist Works - END ============ -->



            </div>

            <!-- ============ Footer - START ============ -->

            <footer class="dark">

                <div class="container">

                    <div class="row">

                        <div class="footer-col col-md-4">

                            <h3 class="focus-title">About Us</h3>
                            <p><img width="200" class="align-center" src="img/logo.png" alt="THE TATTOOIST - Tattoo Studio"></p>
                            <p>Currently working at a PRIVATE STUDIO in Las Vegas, Nevada. We are dedicated to providing a clean, safe, and enjoyable experience for our client. We provide a friendly, knowledgeable staff that does great artwork without any of that "star" attitude. Just stop by and you'll be pleasantly surprised at the service we provide!
                        </div>

                        <div class="footer-col col-md-4">

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

                        <div class="footer-col footer-contacts col-md-4">

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
                    &copy; 2015 - <strong>THE TATTOOIST - Tattoo Studio| Desigend by Lyazzat Makhsotova</strong>
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