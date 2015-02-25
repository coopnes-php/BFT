<?php
$inc = "../";
include '../topo.php';
?>
<!-- ==========================
    CONTACT - START 
=========================== -->

<section class="content" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Deixe um recado</h2>
                <form action="../../controle/cad_Contato.php" method="post">
                    <fieldset>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="name">Seu Nome:<span>*</span></label>
                                <input type="text" name="nome" class="form-control " placeholder="Seu Nome:" id="name" required>
                            </div>                               
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="lastname">Seu Sobrenome:<span>*</span></label>
                                <input type="text" name="sobrenome" class="form-control " placeholder="Seu Sobrenome:" id="lastname" required>
                            </div>                               
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="phone">Seu Telefone:<span>*</span></label>
                                <input type="text" name="telefone" class="form-control " placeholder="Seu Telefone:" id="phone" required>
                            </div>                               
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="email2">Seu Email:<span>*</span></label>
                                <input type="email" name="email" class="form-control " placeholder="Seu Email:" id="email2" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="subject">Seu Assunto:<span>*</span></label>
                                <input type="text" name="assunto" class="form-control " placeholder="Seu Assunto:" id="phone" required>
                            </div>                               
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="message">Seu Menssagem:<span>*</span></label>
                                <textarea name="menssagem" class="form-control" placeholder="Seu Menssagem:" id="message" required></textarea>
                                <input type="hidden" name="acao" value="enviar" />
                                <button type="submit" id="send" class="btn btn-primary btn-sm"><i class="fa fa-check"></i>Enviar</button>
                                <span class="form-info"><span class="required">*</span> Estes campos são obrigatórios</span>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            
            
            <div class="col-sm-6">
                <h2>Contato</h2>
                <p></p>
                <ul class="list-unstyled contact-address">
                    <li>Avenida Fernando Costa N 00 , Vila Jaiara, Anápolis-GO, Brasil</li>
                    <li>+55 62 0000-0000</li>
                    <li><a> atendimento@bonfimtapetes.com.br</a></li>
                    <li>www.bonfimtapetes.com</li>
                </ul>
                <ul class="brands brands-md brands-inline brands-transition brands-circle main">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <section id="google-map">
                    <div id="map-canvas"></div>
                </section>
            </div>
        </div>
    </div>
</section>  


<!-- ==========================
    CONTACT - END 
=========================== -->


<?php
include '../rodape.php';
?>  
