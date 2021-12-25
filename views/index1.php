



        <!--Navbar-->



        <div class="sticky-top">
            <div class="shadow p-3 mb-5 bg-body rounded">
                <div class="navbar">
                    <div>
                    <a href="acceuil"> <button class="btn btn-outline-primary" type="submit">Acceuil</button></a>
                    <div display= "none">
            
                    </div>
                    </div>
            
                    <a href="inscription"> <button class="btn btn-outline-primary" type="submit">Inscription</button></a>
                    <a href="connexion"> <button class="btn btn-outline-primary" type="submit">Connexion</button></a> 
            
            
                
                </div>
            </div>
        </div> 


        <!--ROW-->


        <div class="corps">

            <div class="droite">

                <div class="intituléCursus">
                    <br> <h1> Nos Cursus</h1>
                </div><br><br><br><br>
                <div class ="lescursus">

                    <ul>

                        <?php foreach ($viewVars['cursusList'] as $cursus) : ?>
                                
                            <li class="list-group-item"><h2><?=$cursus->getnom_cursusC()?> </h2></li>
                        <?php endforeach; ?>

                    </ul>
                </div>
            </div>
            <div class="gauche">

                <div class = "row">

                    <div class="slider">
                      <div class="container max-height d flex align-items-center">
                        <div id="carouselControls" class="carousel slide" data-bs-ride="carousel"data-bs-interval="3000" >
                            <div class="carousel-inner" >
                              <div class="carousel-item active"  >
                                <img src="./img/img1-1.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item" >
                                <img src="./img/img4.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item" >
                                <img src="./img/img3.jpg" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselControls" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                      </div>
                    </div>
                  
                </div>
                  

            </div>




        </div>
      
    
        <!--FOOTER-->

        <div class="blank">
            <p></p>
        </div>
        
        <div class="bloc1"> 
        
            <div class="bloc-side">
                <img src="./img/eleves.jpg">
            </div>

            <div class="bloc-verbatim">
                <h5> <b>  <p>Bienvenue au Collège René Descartes !</p>  </b> </h5>
                <br>
                <p>Convaincus de la nécessité pour l’établissement d’avoir à sa disposition un outil accessible d’information et de promotion à destination du grand public, 
                mais surtout et en priorité à destination des familles, vous trouverez sur ce site des renseignements et des informations concernant notre Collège.</p> 
            </div>

        </div>
  
        <!--Div blank pour tjrs plus de lisibilité-->
  
        <div class="blank2">
            <p></p>
        </div>
  
  
        <!--informations-->
  
        <div class="informations">
    
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <a href="">  <img src="./img/INFORMATION CORONAVIRUS-2.png" class="card-img-top" alt="...">    </a>
                        <div class="card-body">
                            
                            <p class="card-text">Coronavirus Covid-19 : mesures pour les écoles, collèges et lycées pour l'année scolaire 2021-2022.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">A venir...</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <a href="" > <img src="./img/REUNION PARENT-PROF.png" class="card-img-top" alt="...">  </a>
                    <div class="card-body">
                    
                        <p class="card-text">Calendrier pour les réunions parents-professeurs</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">A venir ...</small>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <a href="">  <img src="./img/CALENDRIER SCOLAIRE.png" class="card-img-top" alt="..."> </a>
                    <div class="card-body">
                
                        <p class="card-text">Calendrier des vacances scoliares</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">A venir...</small>
                    </div>
                    </div>
                </div>
            </div>
    
        </div>
    
        <div class="blank2">
            <p></p>
        </div>
  
  
  

  

        
    </body>






</html>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script> 
