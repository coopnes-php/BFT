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
            alert("Seu Email foi enviado com sucesso!")
            location.href="?op=1"
            }
        </script>';
}

$inc="";
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
                                    <h2>Decore seu ambiente com tapets e carpetes</h2>
                                    <h3>valorize seu ambiente</h3>
                                    <h3>100% Qualidade</h3>
                                    <h3>Entre em contato já!</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item" id="slide-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <h2>Bem vindo</h2>
                                    <h3>Bonfim Tapetes agradeçe a visita.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item" id="slide-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>Melhores preços</h2>
                                </div>
                                <div class="col-md-12">
                                    <h3>Melhores produtos</h3>
                                </div>
                                <div class="col-md-12">
                                    <a href="" class="btn btn-inverse">Entre em contato agora!</a>
                                    <span>ou</span>
                                    <a href="" class="btn btn-inverse">Saiba mais</a>
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
                                <h3>Produtos da mais alta qualidade</h3>
                                <p>Design inovador com o alto padrão de qualidade e garantia de fábrica</p>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="feature">
                                <i class="fa fa-wrench"></i>
                                <h3>Na sua empresa</h3>
                                <p>Não deixe de oferecer o melhor para o seu cliente.</p>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="feature">
                                <i class="fa fa-home"></i>
                                <h3>Na sua casa</h3>
                                <p>A Bonfim Tapetes tem produtos especiais para manter sua casa limpa e com estilo..</p>
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
                    <p class="text-lg text-center">Design não é apenas o que parece e se sente como . O design é como ele funciona. - <b>Steve Jobs</b></p>
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
                            <h2>Empresa</h2>
                            <p>
                                A Banfim Tapetes realiza serviços especializados no ramo de capachos e tapetes personalizados em vinil, lisos e vulcanizados.
                                Trabalhamos com produtos de primeira linha e confeccionamos tapetes em diversas cores e em qualquer tamanho.
                                Com design inovador e o alto padrão de qualidade, o tapete personalizado é um ótimo suporte para o marketing de sua empresa.
                                O Vulcanizado é um tapete cuja personalização é feita com o próprio vinil, ou seja, o vinil é recortado, retirado do tapete e preenchido com vinil de outra cor como se fosse um quebra-cabeça.
                                A personalização é mais resistente e feita com as cores disponíveis do vinil. De fácil manutenção e muito resistentes, os tapetes prezam pela segurança e conforto de seus usuários, são antiderrapantes, ante chamas e laváveis.
                                Com um atendimento agendado e eficaz, nossa equipe esta preparada e pronta para atendê-lo.
                                Nossos tapetes possuem qualidade, bons preços e a garantia de um ano após a compra.
                            </p>

                            <div class="text-highlight">
                                <i class="fa fa-quote-left"></i>
                                <p>Dá-se muita atenção ao custo de se realizar algo. E nenhuma ao custo de não realizá-lo.</p>
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
<!--            <section class="content bg-color-2" id="section-portfolio">
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
                    <h2 class="text-center">Clientes</h2>
                    <p class="secondary-headline text-center">Confira alguns de nosso  cliente atendidos.</p>
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