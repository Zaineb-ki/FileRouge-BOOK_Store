<?php

    $message_sent = false;

    if (isset($_POST['email']) && $_POST['email'] != '') {

        if ( filter_var($_POST['email'], FILTER_VALIDATION_EMAIL) ) {
            //Submit the Form
            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $messageObjet = $_POST['objet'];
            $message = $_POST['message'];

            $to = "bookstorecompany1@gmail.com";
            $body = "";

            $body .="From: ".$userName. "\r\n";
            $body .="From: ".$userEmail. "\r\n";
            $body .="From: ".$message. "\r\n";

            mail($to,$messageObjet,$body);

            $message_sent = true;
        }

        

    }

    






?>

<!-- Part 1--> 
<section class="part1-NousC">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <center>
                    <div id="bar">
                        <p>Nous Cantacter </p>
                    </div>
                </center>
            </div>
        </div>
    </div>
</section>
<section class="part2-NousC">
    <div class="container">
        <div class="row">
            <div class="col">
                <center>
                    <div class="h5-NousC">
                        <h5>
                            N'hésitez surtout pas à nous contacter si vous ne trouvez pas les réponses que vous cherchez ici dans 
                            la section Service Client BOOK STORE. Nous serons ravis de vous répondre.
                        </h5>
                    </div>
                </center>
            </div>
        </div>
    </div>
</section>
<br> <br>
<section class="part3-NousC">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <img src="public\uploads\Images\img\4067830.png" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <p class="p-NousC" style=" color: #464545; font-family: Josefin Sans, Regular Roman;">Veuillez remplir le formulaire ci-dessous si vous souhaitez nous envoyer 
                    un email. Vous êtes également invités à nous envoyer votre question 
                    directement à <strong>bookstorecompany1@gmail.com</strong> .
                    Nous vous répondrons dans les 24 heures.</p>
                <?php
                  if ($message_sent):
                ?>
                    <div class="alert alert-success" role="alert">
                        A simple success alert—check it out!
                    </div>
                <?php
                    else:
                ?>
                    <div class="formContact">
                    <form id="formContact" method="POST" action="contact.php">
                        <div class="form-group">
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom et prénom " name="name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Objet" name="objet">
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre Message" style="height: 150px;" name="message"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" id="Envoyer-NousC">Envoyer</button>
                    </form>
                    </div>
                    <?php
                        endif;
                    ?>
            </div>
        </div>
    </div>
</section>