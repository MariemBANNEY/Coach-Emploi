<?php require_once 'template/header.php'; ?>
<?php require_once 'template/navbar.php'; ?>
 <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="./css/style2.css">

<div class="page-content" id="acceuil">

    <div class="header-page-fluid">
        <a href="index.php" style="color: #0093A8">
                    <h1 style="margin-top: 30px;margin-left: 20px;color: #0093A8"><b>Coach-Emploi</b></h1>
        </a>
    </div>

                    <!--BEGIN #signup-form -->
            <div id="signup-form">
        
                <!--BEGIN #subscribe-inner -->
                <div id="signup-inner">
                
                    <div class="clearfix" id="header">
                    

                        <img id="signup-icon" src="./images/signup.png" alt="" />
                
                        <h1>Inscrivez vous à Coach-Emploi <br/>Ne rattez pas le temps!</h1>

                        <form id="send"  action="insert.php" method="post">
                            <br/><br/><br/><br/><br/>
                            
                            <p><label for="nom">Votre Nom *</label>
                            <input id="nom" type="text" name="nom" value="" required />
                            </p>
                            
                            <p>
                            <label for="prenom">Votre Prenom *</label>
                            <input id="prenom" type="text" name="prenom" value="" required />
                            </p>
                            
                            <p>

                            <label for="email">Email *</label>
                            <input id="email" type="text" name="email" value="" required />
                            </p>
                            
                            <p>

                            <label for="tel">Numero du Téléphone </label>
                            <input id="tel" type="text" name="tel" value=""/>
                            </p>
                            <p>
                                <label>Mot de passe *</label>
                                <input id="password" type="password" name="password" required/>
                            </p>
                            <p>
                                <label>Saisir à nouveau votre mot de passe *</label>
                                <input id="password2" type="password" name="password2" required/>
                            </p>
                            <p>

                            <button id="submit" type="submit" >S'inscrire</button>
                            </p>
                       
                        </form>

                         
                    </div>
                
                <!--END #signup-inner -->
                </div>
                
            <!--END #signup-form -->   
            </div>
      </div>