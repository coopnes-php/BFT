<?php
$msg = @$_REQUEST['msg'];
$op = @$_REQUEST['op'];
if ($op == '1') {
    echo '<script type="text/javascript">
            onload=function(){
            location.href="?"
            }
        </script>';
}

if ($msg == 's') {

    echo '<script type="text/javascript">
            onload=function(){
            alert("Your Email has been sent successfully!")
            location.href="?op=1"
            }
        </script>';
}

$inc = "";
include 'topo.php';
?>


<!-- ==========================
    JUMBOTRON - START 
=========================== -->
<div class="jumbotron jumbotron6">  
    <div id="jumbotron-slider" class="owl-carousel hidden-control owl-theme">       

        <div class="item" id="slide-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="image/slider/c2.jpg" class="img-responsive hidden-xs hidden-sm" alt="">
                    </div>
                    <div class="col-md-6">
                        <h2>Decorate your room with carpets and rugs</h2>
                        <h3>enhances your environment</h3>
                        <h3>100% Quality.</h3>
                        <h3>Contact now!</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="item" id="slide-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h2>You welcome</h2>
                        <h3>Bonfim Tapetes I appreciate your visit.</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="item" id="slide-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Best prices</h2>
                    </div>
                    <div class="col-md-12">
                        <h3>Top products</h3>
                    </div>
                    <div class="col-md-12">
                        <a href="" class="btn btn-inverse">Contact Now!</a>
                        <span>or</span>
                        <a href="" class="btn btn-inverse">Learn more</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>  
<!-- ==========================
    JUMBOTRON - END 
=========================== -->

<!-- ==========================
    INTRODUCTION - START 
=========================== -->
<!--            <section class="content" id="section-introduction">
                <div class="container">
                    <h2>powerful & multipurpose</h2>
                    <p><b>Multi-purpose Modern Theme</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec lorem quis est ultrices volutpat. Donec id urna posuere nisl tincidunt laoreet. Aliquam erat volutpat. Duis eu sapien auctor, bibendum ante ut, volutpat purus.  </p>
                </div>
            </section>-->
<!-- ==========================
    INTRODUCTION - END 
=========================== -->

<!-- ==========================
    FEATURES - START 
=========================== -->
<section class="content bg-color-2" id="section-features">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="feature">
                    <i class="fa fa-star"></i>
                    <h3>Highest quality products</h3>
                    <p>Innovative design with the high standard of quality and factory warranty</p>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="feature">
                    <i class="fa fa-wrench"></i>
                        <h3> In your business </h3>
                        <p> Be sure to provide the best for your client. </p>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="feature">
                    <i class="fa fa-home"></i>
                    <h3> In your home </h3>
                    <p> The Bonfim Tapetes has special products to keep your home clean and stylish .. </p>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- ==========================
    FEATURES - END 
=========================== -->

<!-- ==========================
    SEPARATOR - START 
=========================== -->
<section class="content content-separator">
    <div class="container">
        <p class="text-lg text-center">Design is not just what it looks like and feels like. Design is how it works. - <b>Steve Jobs</b></p>
    </div>
</section>
<!-- ==========================
    SEPARATOR - END 
=========================== -->

<!-- ==========================
    ABOUT US - START 
=========================== -->
<section class="content bg-color-2" id="section-about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Business</h2>
                <p>
                    The Banfim Tapedes performs specialized services in mats and carpets branch custom vinyl, smooth and vulcanized.
                    We work with first-rate products and we made rugs in different colors and in any size.
                    With innovative design and the high standard of quality, custom rug is a great support for the marketing of your company.
                    The Vulcanized is a carpet which customization is done with the vinyl itself, that is, the vinyl is cut, removed the carpet and filled with another color vinyl like a puzzle.
                    Customization is more durable and made with the available colors of vinyl. Easy to maintain and very resistant, carpets value the safety and comfort of its members are non-slip, against flames and washable.
                    With a scheduled and effective care, our team is prepared and ready to serve you. Our rugs have quality, good prices and the one-year warranty after purchase.
                </p>

                <div class="text-highlight">
                    <i class="fa fa-quote-left"></i>
                    <p>He gets a lot of attention to the cost of doing something. And no the cost of not doing it.</p>
                    <span>Philip Kotler , CEO</span>
                </div>
            </div>
            <div class="col-md-6">
                <div id="about-us-slider" class="owl-carousel owl-theme">       
                    <div class="item"><img src="image/empresa/e1.jpg" alt="" class="img-responsive"></div>
                    <div class="item"><img src="image/empresa/e2.jpg" alt="" class="img-responsive"></div>
                    <div class="item"><img src="image/empresa/e3.jpg" alt="" class="img-responsive"></div>
                    <div class="item"><img src="image/empresa/e4.jpg" alt="" class="img-responsive"></div>
                    <div class="item"><img src="image/empresa/e5.jpg" alt="" class="img-responsive"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========================
    ABOUT US - END 
=========================== -->

<!-- ==========================
    RECENT BLOG POSTS - START 
=========================== -->
<!--            <section class="content" id="section-blog-posts">
    <div class="container">
        <h2 class="text-center">Recent Blog Post</h2>
        <div class="row">
            <div class="col-sm-6">
                <div class="recent-blog-post">
                    <div class="post-date">5 March 2014</div>
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec lorem quis est ultrices volutpat. Donec id urna posuere nisl tincidunt laoreet. Aliquam erat volutpat. Duis eu sapien auctor, bibendum ante ut, volutpat purus.</p>
                    <a href="blog-post2.html">Read More<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="recent-blog-post">
                    <div class="post-date">5 March 2014</div>
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec lorem quis est ultrices volutpat. Donec id urna posuere nisl tincidunt laoreet. Aliquam erat volutpat. Duis eu sapien auctor, bibendum ante ut, volutpat purus.</p>
                    <a href="blog-post2.html">Read More<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="text-center"><a href="blog2.html" class="btn btn-inverse btn-lg"><i class="fa fa-arrow-circle-down"></i>See more Posts</a></div>
    </div>
</section>-->
<!-- ==========================
    RECENT BLOG POSTS - END 
=========================== -->

<!-- ==========================
    LATEST WORK - START 
=========================== -->
<!--<section class="content bg-color-2" id="section-portfolio">
    <div class="container">
        <h2>Check our Latest work</h2>
        <div class="row">
            <div class="col-md-4">
                <article class="portfolio-item">
                    <img src="image/image_01.jpg" class="img-responsive" alt="">
                    <div class="hover-overlay">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec lorem quis est ultrices volutpat.</p>
                        <a href="image/image_01.jpg" class="show-image"><i class="fa fa-plus"></i></a>
                        <a href="portfolio-post1.html"><i class="fa fa-link"></i></a>
                    </div>
                </article>
                <div class="portfolio-item-description">
                    <h3>Lorem ipsum dolor sit amet</h3>
                </div>
            </div>

            <div class="col-md-4">
                <article class="portfolio-item">
                    <img src="image/image_02.jpg" class="img-responsive" alt="">
                    <div class="hover-overlay">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec lorem quis est ultrices volutpat.</p>
                        <a href="image/image_02.jpg" class="show-image"><i class="fa fa-plus"></i></a>
                        <a href="portfolio-post1.html"><i class="fa fa-link"></i></a>
                    </div>
                </article>
                <div class="portfolio-item-description">
                    <h3>Lorem ipsum dolor sit amet</h3>
                </div>
            </div>

            <div class="col-md-4">
                <article class="portfolio-item">
                    <img src="image/image_03.jpg" class="img-responsive" alt="">
                    <div class="hover-overlay">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec lorem quis est ultrices volutpat.</p>
                        <a href="image/image_03.jpg" class="show-image"><i class="fa fa-plus"></i></a>
                        <a href="portfolio-post1.html"><i class="fa fa-link"></i></a>
                    </div>
                </article>
                <div class="portfolio-item-description">
                    <h3>Lorem ipsum dolor sit amet</h3>
                </div>
            </div>
        </div>
    </div>
</section>-->
<!-- ==========================
    LATEST WORK - END 
=========================== -->

<!-- ==========================
    PARTNERS - START 
=========================== -->
<section class="content" id="section-partners">
    <div class="container">
        <h2 class="text-center">Customers</h2>
        <p class="secondary-headline text-center">Check out some of our client met.</p>
        <div id="partners-slider">       
            <div class="item"><a href="#"><img src="image/clientes/anashopping.jpg" class=" img-responsive col-sm-6" alt="" ></a></div>
            <div class="item"><a href="#"><img src="image/clientes/Atlanta.png" class=" img-responsive col-sm-6" alt="" ></a></div>
            <div class="item"><a href="#"><img src="image/clientes/bmw.jpg" class=" img-responsive col-sm-6" alt="" ></a></div>
            <div class="item"><a href="#"><img src="image/clientes/chevolet.jpg" class=" img-responsive col-sm-6" alt=""></a></div>
            <div class="item"><a href="#"><img src="image/clientes/citroen.jpg" class=" img-responsive col-sm-6" alt=""></a></div>
            <div class="item"><a href="#"><img src="image/clientes/contril.gif" class=" img-responsive col-sm-6" alt=""></a></div>
            <div class="item"><a href="#"><img src="image/clientes/honda.jpg" alt="" class=" img-responsive col-sm-6" ></a></div>
            <div class="item"><a href="#"><img src="image/clientes/kia.jpg" alt="" class=" img-responsive col-sm-6" ></a></div>
            <div class="item"><a href="#"><img src="image/clientes/linea.jpg" alt="" class=" img-responsive col-sm-6" ></a></div>
            <div class="item"><a href="#"><img src="image/clientes/mini.jpg" alt="" class=" img-responsive col-sm-6" ></a></div>
            <div class="item"><a href="#"><img src="image/clientes/saga.jpg" class=" img-responsive col-sm-6" alt="" ></a></div>
            <div class="item"><a href="#"><img src="image/clientes/toyota.jpg" class=" img-responsive col-sm-6" alt="" ></a></div>
            <div class="item"><a href="#"><img src="image/clientes/unip.jpg" class=" img-responsive col-sm-6" alt="" ></a></div>   
            <div class="item"><a href="#"><img src="image/clientes/yamara.jpg" class=" img-responsive col-sm-6" alt="" ></a></div>   
        </div>
    </div>
</section>
<!-- ==========================
    PARTNERS - END 
=========================== -->

<?php
include 'rodape.php';
?>