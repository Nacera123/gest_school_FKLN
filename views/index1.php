



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
  
  
  

  
        <footer>
            <footer class="text-center text-lg-start bg-light text-muted">
            
            <HR>
                <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                    <!-- Grid colonne 1 -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i> Collège René Descartes
                        </h6>
                        <p>
                        Le collège René Descartes est un établissement privé sous contrat d'association avec l'État. Fondé en 1975, il s'efforce de fournier
                        un enseignement de qualité ainsi que d'innovation.
                        </p>
                    </div>
                    <!--fin Grid colonne 1 -->
            
                    <!-- Grid colonne 2 -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Liens -->
                        <h6 class="text-uppercase fw-bold mb-4">
                        Liens utiles
                        </h6>
                        <p>
                        <a href="https://www.ac-paris.fr/portail/jcms/j_6/accueil" class="text-reset">Academie de Paris</a>
                        </p>
                        <p>
                        <a href="https://www.education.gouv.fr/" class="text-reset">Ministère de l'education</a>
                        </p>
                        <p>
                        <a href="https://eduscol.education.fr/" class="text-reset">Eduscol</a>
                        </p>
                        <p>
                        <a href="https://www.sports.gouv.fr/" class="text-reset">Sports.gouv.fr</a>
                        </p>
                    </div>
                    <!-- Grid colonne 2-->
            
                
                
            
                    <!-- Grid colonne 3-->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Liens -->
                        <h6 class="text-uppercase fw-bold mb-4">
                        Contacts
                        </h6>
                        <p> Collège René Descartes - 74 avenue Gilbert Berger 75015 Paris </p>
                        <p> CollegeRD@gmail.com </p>
                        <p> 01 48 44 41 01</p>
                        
                    </div>
                    <!-- Grid colonne 3 -->
                    </div>
                    <!-- Grid row -->
                </div>
                </section>
            
                <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2021 Copyright:GestSchool
                </div>
            
            </footer>
        </footer>

        
    </body>






</html>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script> 
