<?php
    if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true){
        Redirect::to("home");
    }
    if(isset($_POST["submit"])){
        $createUser = new UsersController();
        $createUser->register();
    }
?>



<!-- Part 1--> 
<section class="part1-SC">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <center>
                    <div id="bar">
                        <p>S'inscrire </p>
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
                        Rejoignez votre en ligne BOOK STORE, et commencez un voyage littérature.
                        En tant que client de BOOK STORE , vous avez la possibité de trouver vos livres préférer 
                        avec des marques pages à votre choix, n'oublier pas le offres et le réduction 
                        ,et tout ça avec un prix raisonnable.
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
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="imgNousC">
                <img src="public\uploads\Images\img\Sans-nkl,kl1.png" alt="" srcset="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div style="margin-top: 14%;">
            <center>
            <p style="color: #0086C7; font-family:Josefin Sans, Regular Roman; font-size: 40px;">BIENVENU ! </p>
              <form action="" method="post" id="client-infos">
                  
                  <div class="form-group">
                      <i class="fas fa-user" id="forms"></i>
                      <input type="text"
                            class="form-control"
                            name="fullname" required autocomplete="off" placeholder="Nom & Prénom" id="">
                  </div>
                  <div class="form-group">
                      <i class="fas fa-user" id="forms"></i>
                      <input type="text" autocomplete="off" class="form-control" name="username"
                            placeholder="Pseudo" id="">
                  </div>
                  
                  <div class="form-group">
                      <i class="fas fa-envelope" id="forms"></i>
                      <input type="email" autocomplete="off" class="form-control" name="email"
                            placeholder="Email" id="">
                  </div>
                  <div class="form-group">
                      <i class="fas fa-unlock-alt" id="forms"></i>
                      <input type="password" autocomplete="off" class="form-control" name="password"
                            placeholder="Mot de passe" id="">
                  </div>
                  <button name="submit" class="btn btn-primary" id="btnIns">S'INSCRIRE</button>
                   <br>
                  <small>Déjà client ! <u><strong> <a href="<?php echo BASE_URL;?>login" >
                        CONNEXION
                    </a></strong></u></small>
                </form>
              </center>
            </div>
            
            </div>
        </div>
    </div>
</section>