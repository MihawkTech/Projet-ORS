<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/standard 1.css">
    <style>




/* SEARCHE BAR */

.search{
    height: 100%;
    width: 60%;
    position: relative;
    margin-top:45px;
    margin-left: 1vw;
}
#search{
    border: none;
    background: transparent;
    position: absolute;
    margin-top: 7.5%;
    margin-left: 46%;
}

#search img{
    height: 18px;
    width: 18px;

}
#search img:hover{
    cursor: pointer;
    width: 22px;
    height:22px;
    color: #14ACB7;
}
.bar{
    display: flex;
    flex-direction: column;
    margin-top:7vh;

}
.bar label{
    width: 70%;
    margin-bottom: 2vh;
    font-size: 1.1rem;
    font-weight: 600;
}
#sbar{

    border: 2px solid;
    width: 344px;
    height: 48px;
    border-radius: 4px;
    border-color: #14ACB7;
    color: black;

}
::placeholder{
    font-size: 1rem;
    padding-top: 1px;
    padding-left: 10px;
    opacity: 0.5;
}
input:focus{
    outline: #14ACB7;
    border-width: 1.5px;
}
input:hover{
    border-color: rgb(91, 91, 185);
}
input[type="text"]
{
    font-size: 1.1rem;
    padding-left: 7px;
}

#sort{
    margin-right: 60px;
    font-size: 0.9rem;
    font-weight: 700;
}

.checks{
    width:100%;
    display: flex;
    margin-top:4vh;
    margin-bottom: 6vh;

}
.checks label{
    margin-top: -5px;
    font-weight: 600;
}
.checks input{
    margin:0 1vw 0 1.5vw;
}

    </style>
</head>
<section id="navbar">
      <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light static-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="src/Logo 1.svg" alt="..." height="36">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Bibliothèque</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/events">Nos Evenements</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/AboutUs">Qui-sommes nous?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
    </section>
<body>
<div class="container">
<div class="search">
            <form action="" method="GET">
                <div class="bar">
                    <label for="bar">Trouvez Votre Article</label>
                    <input type="text" id="sbar" placeholder="Recherche Par Mots Clés">
                    <button id="search" type="submit" ><img src="/src/Vector.svg" >
                    </button>
                </div>
                <div class="checks">
                <label id="sort">Sort By</label>
                    <input type="checkbox" id="date">
                    <label for="date">Date</label>
                    <input type="checkbox" id="alpha">
                    <label for="alpha">Alphabétique</label>
                    <input type="checkbox" id="charge">
                    <label for="charge">Les plus aimés</label>
                </div>
            </form>


        </div>
</div>
<script src="js/nav.js" defer></script>
<script src="js/bootstrap.bundle.js" defer></script>
</body>
</html>
