<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>E-SPORT</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="shortcut icon" href="img/olimpycs_17_icon-icons.com_68623.ico">
</head>

<body>
<!-- header -->

<section class="header">
  <header><a class="logo" href="index.html"><img src="img/bitcoin.png" alt="">E-Sport</a>
    <div class="search">
      <input class="search__text" type="text"/>
      <button class="search__button">
        <div class="search-icon"></div>
      </button>
    </div>
    <div class="info"><div class="cour"><img src="img/like.png" alt="" class="like"></div><a href="">Liste de souhaits</a><a href="/">Livraison&nbsp;et&nbsp;Paiement</a><a href="/">Nous contacter</a><a href="#"><!-- Button trigger modal -->
     


<?php 
require "db.php";
?>
<?php if( isset($_SESSION['logged_user'])) : ?>
<span style="color: green;font-weight:bold">Accès !</span> <br>
Bonjour, <?php echo $_SESSION['logged_user']->login; ?> !
<hr>

<button style="background-color: #007bff;border-radius: 5px;border-color:#007bff; "><a href="logout.php"  style="padding-right:10px;">EXIT</a></button>
<?php else : ?>
	<span style="color:red">Vous n'êtes pas connecté!</span><hr>
<button style="background-color: #007bff;border-radius: 5px;border-color:#007bff; text-align: center;"><a href="login.php" style="padding-right:10px;">SE CONNECTER</a></button>
<button style="background-color: #007bff;border-radius: 5px;border-color:#007bff; "><a href="register.php">INSCRIPTION</a></button>
<?php endif; ?>      

      

    


    </div>
  </div>
</div></a></div><a class="cart" href="card.html">
      <div class="cart-icon">1</div></a>
      <!-- header -->




  </header>
</section>
<!-- nav-bar1 -->
<section class="nav">
  <nav>
    <div class="nav col-12 flex1"><a href="/"><span>Homme</span></a><a href=""><span>Femme</span></a><a href="/"> <span>Enfant</span></a><a href="/"> <span>Marques</span></a><a href="/"> <span>Sports</span></a><a href="/"> <span>Football</span></a><a href="/"> <span>Accsessoires</span></a><a href="/"> <span>MMA-Arts martiaux mixtes</span></a><a href="/"> <span>Plein air</span></a><a href="/"> <span>Course</span></a></div>
  </nav>
  
</section>
<!-- nav-bar1 -->


<!-- les buttons scroll tier-->

<div class="fltr_cont">
  <div class="slct-drpdwn">
    <label for="options" id="fltr_lbl">Trier par</label>
    <select name='options' id="fltr_optns">
      <option value='option-1'>Populaire</option>
      <option value='option-2'>Récent</option>
      <option value='option-3'>Vérifié</option>
    </select>
  </div>

  <div class="slct-drpdwn">
    <label for="options" id="fltr_lbl">Genre</label>
    <select name='options' id="fltr_optns">
       <option value='option-1'>Tous les genres
</option>
      <option value='option-2'>Option 2</option>
      <option value='option-3'>Option 3</option>
       <option value='option-1'>Option 1</option>
      <option value='option-2'>Option 2</option>
      <option value='option-3'>Option 3</option>
       <option value='option-1'>Option 1</option>
      <option value='option-2'>Option 2</option>
      <option value='option-3'>Option 3</option>
       <option value='option-1'>Option 1</option>
      <option value='option-2'>Option 2</option>
      <option value='option-3'>Option 3</option>
    </select>
  </div>

  <div class="slct-drpdwn">
    <label for="options" id="fltr_lbl">location</label>
    <select name='options' id="fltr_optns"> 
      <option value="Brooklyn">Saint-Étienne</option>
      <option value="Manhattan">Lyon</option>
      <option value="Queens">Paris</option>
    </select>
  </div>

</div>
<!-- les buttons scroll tier-->







<!-- les cards bootsrap-->

<div class="card-group" style="margin: 10px;padding: 10px">
  <div class="card" style="margin: 10px;"><div class="game-pic"><img src="https://images.sportsdirect.com/images/products/59417890_l.jpg">
        <div class="game-card-overlay">
          <div class="overlay-button" id="overlay-double">
                <a href="card.html"><p>Ajouter au panier</p></a>
          </div>
            <div class="overlay-button" id="overlay-double"><a href="ficher-produit.html">
          <p>Fiche produit</p></a></div>
        </div>
      </div>
   
    <div class="card-body">
      <h5 class="card-title">Tapout Core T-shirt Homme</h5>
      <p class="card-text"><span style="color: red">5,99€ </span>Couleur:Black</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Tailles : S, M, L, XL, 2 XL</small>
    </div>
  </div>
  <div class="card"style="margin: 10px;">
    <div class="game-pic"><img src="https://images.sportsdirect.com/images/products/59417893_l.jpg">
        <div class="game-card-overlay">
          <div class="overlay-button" id="overlay-double">
            <p>Ajouter au panier</p>
          </div>
          <div class="overlay-button" id="overlay-double">
            <p>Fiche produit</p>
          </div>
        </div>
      </div>
    <div class="card-body">
      <h5 class="card-title">Tapout Core T-shirt Homme</h5>
      <p class="card-text"><span style="color: red">5,99€</span> Couleur:Red</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Tailles : S, M, L, XL, 2 XL</small>
    </div>
  </div>
  <div class="card"style="margin: 10px;">
    <div class="game-pic"><img src="https://images.sportsdirect.com/images/products/47902090_l.jpg">
        <div class="game-card-overlay">
          <div class="overlay-button" id="overlay-double">
            <p>Ajouter au panier</p>
          </div>
          <div class="overlay-button" id="overlay-double">
            <p>Fiche produit</p>
          </div>
        </div>
      </div>
    <div class="card-body">
      <h5 class="card-title">Tapout Polaire Shorts Homme</h5>
      <p class="card-text"><span style="color: red">4,20€</span> Couleur:Army Green</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Tailles : S, M, L, XL, 2 XL</small>
    </div>
  </div>
</div>





<div class="card-group" style="margin: 10px;padding: 10px">
  <div class="card" style="margin: 10px;"><div class="game-pic"><img src="https://images.sportsdirect.com/images/products/76243803_l.jpg">
        <div class="game-card-overlay">
          <div class="overlay-button" id="overlay-double">
            <p>Ajouter au panier</p>
          </div>
          <div class="overlay-button" id="overlay-double">
            <p>Fiche produit</p>
          </div>
        </div>
      </div>
   
    <div class="card-body">
      <h5 class="card-title">Lonsdale Pro Gant d'entraînement</h5>
      <p class="card-text"><span style="color: red">17,99€</span> Couleur:Black</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Tailles : S, M, L, XL, 2 XL</small>
    </div>
  </div>
  <div class="card"style="margin: 10px;">
    <div class="game-pic"><img src="https://images.sportsdirect.com/images/products/76243808_l.jpg">
        <div class="game-card-overlay">
          <div class="overlay-button" id="overlay-double">
            <p>Ajouter au panier</p>
          </div>
          <div class="overlay-button" id="overlay-double">
            <p>Fiche produit</p>
          </div>
        </div>
      </div>
    <div class="card-body">
      <h5 class="card-title">Lonsdale Pro Gant d'entraînement</h5>
      <p class="card-text"><span style="color: red">17,99€</span> Couleur:Red</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Tailles : S, M, L, XL, 2 XL</small>
    </div>
  </div>
  <div class="card"style="margin: 10px;">
    <div class="game-pic"><img src="https://images.sportsdirect.com/images/products/76220044_l.jpg">
        <div class="game-card-overlay">
          <div class="overlay-button" id="overlay-double">
            <p>Ajouter au panier</p>
          </div>
          <div class="overlay-button" id="overlay-double">
            <p>Fiche produit</p>
          </div>
        </div>
      </div>
    <div class="card-body">
      <h5 class="card-title">Everlast Grappling Gants d'entraînement</h5>
      <p class="card-text"><span style="color: red">20,39€</span> Couleur:Black/Red</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Tailles : S, M, L, XL, 2 XL</small>
    </div>
  </div>
</div>


<div class="card-group" style="margin: 10px;padding: 10px">
  <div class="card" style="margin: 10px;"><div class="game-pic"><img src="https://images.sportsdirect.com/images/products/76221944_l.jpg">
        <div class="game-card-overlay">
          <div class="overlay-button" id="overlay-double">
            <p>Ajouter au panier</p>
          </div>
          <div class="overlay-button" id="overlay-double">
            <p>Fiche produit</p>
          </div>
        </div>
      </div>
   
    <div class="card-body">
      <h5 class="card-title">Everlast PU Thai Pad</h5>
      <p class="card-text"><span style="color: red">23,99€</span> Couleur:Black/Grey</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Tailles : S, M, L, XL, 2 XL</small>
    </div>
  </div>
  <div class="card"style="margin: 10px;">
    <div class="game-pic"><img src="https://images.sportsdirect.com/images/products/76232903_l.jpg">
        <div class="game-card-overlay">
          <div class="overlay-button" id="overlay-double">
            <p>Ajouter au panier</p>
          </div>
          <div class="overlay-button" id="overlay-double">
            <p>Fiche produit</p>
          </div>
        </div>
      </div>
    <div class="card-body">
      <h5 class="card-title">Everlast Coaches Débardeur</h5>
      <p class="card-text"><span style="color: red">95,99€</span> Couleur:Black</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Tailles : S, M, L, XL, 2 XL</small>
    </div>
  </div>
  <div class="card"style="margin: 10px;">
    <div class="game-pic"><img src="https://images.sportsdirect.com/images/products/76037869_l.jpg">
        <div class="game-card-overlay">
          <div class="overlay-button" id="overlay-double">
            <p>Ajouter au panier</p>
          </div>
          <div class="overlay-button" id="overlay-double">
            <p>Fiche produit</p>
          </div>
        </div>
      </div>
    <div class="card-body">
      <h5 class="card-title">Reebok Combat Grappling Sac</h5>
      <p class="card-text"><span style="color: red">240,00€</span>  Couleur:Black</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Tailles : S, M, L, XL, 2 XL</small>
    </div>
  </div>
</div>
  <!-- les cards bootsrap-->


  <!-- buttons NEXT et Derier-->
<div class="button-bar">
  <a href="#" class="button prev">Previous</a>
  <a href="#" class="button next">Next</a>
</div>
<!-- buttons NEXT et Derier-->

<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

    <!-- Footer Elements -->
    <div class="container">

      <!-- Social buttons -->
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a class="btn-floating btn-fb mx-1">
            <i class="fa fa-facebook"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-tw mx-1">
            <i class="fa fa-twitter"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-gplus mx-1">
            <i class="fa fa-google-plus"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-li mx-1">
            <i class="fa fa-linkedin"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-dribbble mx-1">
            <i class="fa fa-dribbble"> </i>
          </a>
        </li>
      </ul>
      <!-- Social buttons -->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div  class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="file:///home/khanpherian/Bureau/MDB-Free_4.5.14/index.html"> Martin KHANPHERIAN</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->



  
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  
</body>

</html>

