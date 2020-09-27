<?php
    if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true){
        Redirect::to("home");
    }
    $loginUser = new UsersController();
    $loginUser->auth();
?>


<section class="part1-SC">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <center>
                    <div id="bar">
                        <p>Connectez vous</p>
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
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <img src="public\uploads\Images\img\Sans-nkl,kl1.png" alt="" srcset="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div style="margin-top: 18%;">
            <center>
            <p style="color: #0086C7; font-family:Josefin Sans, Regular Roman; font-size: 40px;">Welcome Back ! </p>
            <form action="" method="post" id="client-infos">
                
                <div class="form-group">
                    <i class="fas fa-user" id="forms"></i>
                    <input autocomplete="off" type="text" class="form-control" name="username"
                            placeholder="Pseudo" id="">
                   <br> <br>
                <div class="form-group" id="forms">
                    <i class="fas fa-unlock-alt" id="forms"></i>
                    <input autocomplete="off" type="password" class="form-control" name="password"
                            placeholder="Mot de passe" id="">
                </div>
                <br> <br>
                <button name="submit" class="btn btn-primary" id="btnIns">SE CONNECTER</button> <br>
                <small>Pas encore Client !<u><strong> <a href="<?php echo BASE_URL;?>register">INSCRIPTION</a></strong></u></small>
                
                </center>
            </div>
            </div>
        </div>
    </div>
</section>
