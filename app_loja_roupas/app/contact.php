<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Luxury Gold - Contact</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">
        <!-- 
        Luxury Gold Template
        http://www.templatemo.com/preview/templatemo_456_luxury_gold
        -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/templatemo-style.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <!-- Header -->
        <div class="templatemo-container">
            <div class="templatemo-block-left">
                <div class="templatemo-header-left">
                    <div class="templatemo-header-text-wrap">
                        <div class="templatemo-header-text">
                            <h1 class="text-uppercase templatemo-site-name"><span class="gold-text"><b>Luxury</b></span> Gold</h1>
                            <hr class="templatemo-header-hr">
                            <p class="text-uppercase templatemo-slogan">Passion for Fashion</p>
                        </div>
                    </div>
                    <div class="templatemo-header-left-overlay"></div>
                    <div class="templatemo-social templatemo-gray-bg">
                        <ul>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="templatemo-block-right">
                <div class="templatemo-header-right">
                    <div class="templatemo-header-right-overlay"></div>
                    <div class="mobile-menu-icon">
                        <i class="fa fa-bars"></i>
                    </div>
                    <nav class="templatemo-nav">
                        <ul class="text-uppercase">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="men.php">Men</a></li>
                            <li><a href="#">Women</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li class="active"><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div> <!-- end Header -->

        <section class="templatemo-container padding-0">
            
                <div class="templatemo-block-left contact">
                    <div class="templatemo-contact-info">
                        <h2 class="text-uppercase">Info</h2>
                    <hr class="templatemo-section-header-hr w-120">
                    <p class="text-uppercase templatemo-section-subheader">send your question!</p>
                    <p class="margin-bottom-20">Aenean non ex neque. Sed vitae purus in urna volutpat iaculis. Ut congue vel tortor in tincidunt. Maecenas varius pellentesque.</p>
                    <form action="sendcontact.php" method="post" class="tm-contact-form">
                        <div class="tm-contact-form">
                            <div class="form-group">
                                <input name='name' type="text" id="contact_name" class="form-control" placeholder="Name..." />
                            </div>
                            <div class="form-group">
                                <input name='email' type="email" id="contact_email" class="form-control" placeholder="Email..." />
                            </div>
                            <div class="form-group">
                                <input name='subject' type="text" id="contact_subject" class="form-control" placeholder="Subject..." />
                            </div>
                            <div class="form-group">
                                <textarea name='text' id="contact_message" class="form-control" rows="8" placeholder="Message..."></textarea>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn text-uppercase templatemo-btn-gold">Submit</button>
                    </form> 
                    </div>                    
                </div>
                <div class="templatemo-block-right">
                    <div id="google-map"></div>
                </div>
            
        </section>     

        <!-- "About Us" -->
        
        <hr>

        <section class="templatemo-dark-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="text-uppercase gold-text">Questions</h2>
                        <hr class="templatemo-about-hr">
                        <p class="templatemo-about-subtitle">View More Details</p>
                        <hr class="templatemo-about-hr">
                        
                        <?php
                            for ($i = 0; $i <= count($_SESSION['questions']) - 1 ; $i++) {
                                ?>
                                <div style='
                                    text-align: justify;
                                '>
                                    <h2><span class='text-info'>ID:</span> <?php print_r($_SESSION['questions'][$i]->id_question) ?></h2>
                                    <h3><span class='text-info'>Nome:</span> <?php print_r($_SESSION['questions'][$i]->nome) ?></h3>
                                    <h3><span class='text-info'>Email:</span> <?php print_r($_SESSION['questions'][$i]->email) ?></h3>
                                    <h3><span class='text-info'>Subject:</span> <?php print_r($_SESSION['questions'][$i]->subject) ?></h3>
                                    <h4><span class='text-info'>Description:</span> <?php print_r($_SESSION['questions'][$i]->description) ?></h4>
                                </div>
                                <hr>
                                <?php
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
        </section> <!-- end "About Us" -->
        
        <section class="templatemo-dark-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="text-uppercase gold-text">About us</h2>
                        <hr class="templatemo-about-hr">
                        <p class="templatemo-about-subtitle">View More Details</p>
                        <hr class="templatemo-about-hr">
                        <p class="gray-text about-us-text">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    </div>
                </div>
            </div>
        </section> <!-- end "About Us" -->
        <footer class="text-center">
            <p class="text-uppercase">
            	Copyright &copy; 2084 Company Name 
            	| Design: <a href="http://www.templatemo.com">template mo</a>
            </p>
        </footer>

        <!-- JS -->
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
        <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
        <script>
            $(document).ready(function(){                
                loadGoogleMap();                
            });
        </script>
    </body>
</html>
