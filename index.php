<!DOCTYPE html>
<?php
    include 'conn.php';
?>
<html lang="it">
	<head>
    	<title>DiscoMap</title>
    	<meta charset="utf-8" />
    	<meta name="viewport" content="width=device-width, initial-scale=1" />
    	<!--fonts-->
    	<link rel="preconnect" href="https://fonts.googleapis.com">
    	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    	<!--bootstrap-->
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    	<!--style -->
    	<link rel="stylesheet" type="text/css" href="style/style.css" />
	</head>

	<body>
		<!--header -->
		<header>
    		<div class="container-fluid">
                <div class="row bg-head">
         		<div class="container col txt-center">
                <h1><strong class="txt-white">DISCO</strong><strong class="txt-pink">MAP</strong></h1>
                    <p class="txt-white">Un archivio e mappa delle discoteche del basso Garda dagli 80 ai 00</p>
        	</div>
    	</div>
    </div>
    	</header>
    	<!-- nav -->
    	<nav>
            <section class="container-fluid">
        	   <div class="bg-red-dark row">
            	   <div clas="col">
                	   <ul class="nav ">
                  		<li class="nav-item">
                    		<a class="nav-link active" aria-current="page" href="#">Home</a>
                		</li>
                		<li class="nav-item">
                    		<a class="nav-link" href="#">Archivio</a>
                		</li>
                		<li class="nav-item">
                    		<a class="nav-link" href="#">Mappa</a>
                		</li>
                		<li class="nav-item">
                    	<a class="nav-link" href="#">Contribuisci</a>
                		</li>
                		<li class="nav-item">
                    	<a class="nav-link" href="#">Informazioni</a>
                		</li>
            		  </ul>
        		    </div>
        	   </div>
            </section>
    	</nav>

    	<!-- main -->
    	<main>
        	<!-- hero-->
        	<section class="container-fluid bg-color">
                <div class="row align-items-center bg-home"> 
                    <div class="col"></div>
                    <div class="txt-center col container bg-gray-light padding-s">
                        <div class="txt-center"><h2>Il progetto</h2></div>
                            <p class="font-size-m"><strong>DiscoMap</strong> è un progetto dell'associazione <a href="https://https://www.strongvilla.com/" title="Strong" target="_blank">Strongvilla APS</a>. 
                            Gli obiettivi principali sono la catalogazione, la metadatazione e la mappatura delle principali sale da ballo e discoteche della zona del basso lago di Garda (province di Brescia, Mantova e Verona), concentrandosi sul loro periodo più florido: il ventennio di fine XX secolo. La costruzione di un archivio informativo e fotografico e di una mappa dei luoghi, servono alla conservazione di una cultura che ha attraversato i giovani degli anni interessati dall'indagine, così come possono servire da strumento ad attore culturale che intendano reinterpretare quei luoghi che oggi, alle volte, sono abbandonati</p>
                        <button type="button" class="btn btn-outline-primary"><a class="link-decoration-none" href="#">Vai all'archivio</a></button>  <button type="button" class="btn btn-outline-primary"><a class="link-decoration-none" href="#">Vai alla mappa</a></button>
                    </div>
                    <div class="col"></div>
                </div>
        	</section>
        	
        	<!-- informazioni sul progetto e accesso al catalogo -->
        	<section class="container-fluid bg-color">
                	<div class="row">
                   		<!-- progetto -->
                        <div class="col-1"></div>
                    	<div class="bg-gray-light col-6 container padding-md">
                            <div class="card" style="width: 35rem;">
  <img src="img\Disco\Genux\B-H_WEB.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

                        	<!-- <div class="txt-center"><h2>Il progetto</h2></div>
                            <p class="font-size-m"><strong>DiscoMap</strong> è un progetto dell'associazione <a href="https://https://www.strongvilla.com/" title="Strong" target="_blank">Strongvilla APS</a>. 
                            Gli obiettivi principali sono la catalogazione, la metadatazione e la mappatura delle principali sale da ballo e discoteche della zona del basso lago di Garda (province di Brescia, Mantova e Verona), concentrandosi sul loro periodo più florido: il ventennio di fine XX secolo. La costruzione di un archivio informativo e fotografico e di una mappa dei luoghi, servono alla conservazione di una cultura che ha attraversato i giovani degli anni interessati dall'indagine, così come possono servire da strumento ad attore culturale che intendano reinterpretare quei luoghi che oggi, alle volte, sono abbandonati</p> -->
                    	</div>
                    <!-- archivio -->
                    <div class="bg-pink col-4 container txt-center padding-md">
                        <h2 class="txt-light">Scopri di più</h2>
                        <p>Archivio</p>
                        <p>Mappa</p>
                        <p>Documentario sul clubbing</p>
                        <p>Aggiungi Locale</p>
                    </div>
                    <div class="col-1">
                </div>
            </section>
            <!-- pre-footer -->
            <section class="container-fluid"> 
                <div class="bg-color  row">
                    <div class="container txt-center col">
                        <span><a href="#" title="Credits">Credits</a></span>
                        <span> | </span>
                        <span><a href="#" title="Licenze">Licenze</a></span>
                    </div>
                </section>
            </main>

            <!-- footer -->
            <footer class="container-fluid"> 
            	<div class="row">
                <div class="bg-red-dark container txt-light txt-center col">
                    © Copyright (c) 2021 by /DH.arc - Digital Humanities Advanced Research
                Centre.</div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
                </script>

            </footer>

        </body>

        </html>
        </main>
    </body>
    </html>