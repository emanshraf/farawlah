 <?php include 'header.php';?>

  <div class="page-banner pb-160">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="page-content text-center">
                            <div class="section-title pb-30">
                                <h3 class="title">Contact Us</h3>
                            </div> <!-- section title -->
                         <!--    <a class="main-btn video-popup" href="#"><i class="icofont-play-alt-3"></i> Portfolio Video</a> -->
                        </div> <!-- banner content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->

            <div class="banner-shape">
                <img src="assets/images/banner-shape.png" alt="Shape">
            </div>
        </div>

<!-- 
     <div class="contact-map-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="contact-map" class="mt-80"></div>
                </div>
            </div> 
        </div> 
    </div> -->

 <section class="contact-area pt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="contact-form mt-45">
                        <h4 class="contact-title">Zakytech. Made with love in Saudi Arabia</h4>
                        <form id="contact-form" action="assets/contact.php" method="post" data-toggle="validator">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <label>Name :</label>
                                        <input type="text" name="name" data-error="Name is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <label>Email :</label>
                                        <input type="text" name="email" data-error="Valid email is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                 <div class="col-md-12">
                                    <div class="single-form form-group">
                                        <label>Phone Number :</label>
                                        <input type="text" name="email" data-error="Valid email is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form form-group">
                                        <label>Write a Message :</label>
                                        <textarea name="message" data-error="Please,leave us a message." required="required"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="single-form form-group">
                                        <button class="main-btn" type="submit">Submit</button>
                                    </div> <!-- single form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- contact form -->
                </div>
                 <div class="col-lg-3">
                    <div class="contact-info pt-45">
                        <h4 class="contact-title">Contact Sales</h4>
                       
                        <ul class="pt-15">
                            <li>
                                <div class="single-info d-flex align-items-center">
                                    <div class="icon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="content pl-15">
                                        <p>Mohammed Siddiqui</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info d-flex align-items-center">
                                    <div class="icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="content pl-15">
                                        <p>m.siddiqui@zakytech.com</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info d-flex align-items-center">
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="content pl-15">
                                        <p>+966 55 167 5320</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                            	<hr>
                            </li>

                             <li>
                                <div class="single-info d-flex align-items-center">
                                    <div class="icon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="content pl-15">
                                        <p>Haseeb ul Rahman</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info d-flex align-items-center">
                                    <div class="icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="content pl-15">
                                        <p>haseebulrahman@zakytech.com</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info d-flex align-items-center">
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="content pl-15">
                                        <p>+966 54 392 0966</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                        </ul>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT FORM PART ENDS ======-->
    
    <!--====== CLIENT PART START ======-->



        <?php include 'footer.php';?>