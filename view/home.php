<?php $title = 'CV Cyril Chenal'; ?>

<?php ob_start(); ?>

<?php require("view/menu.php"); ?>

<section id="home">
    <img src="public/images/1.jpg" class="img-fluid" alt="Responsive image">
    <div id="textH1" style="display:none">
        <h1 class="bienvenue">Bienvenue, <span class='color'>dans mon monde</span></h1>
    </div>
    <div id="textH2" style="display:none">
        <h2 class="creer">Créer c'est <span class='color'>gagner</span></h2>
    </div>
</section>

<section id="competences">
    <div class="section-titre">
        <h2>
            <i class="fa fa-code" aria-hidden="true"></i>
            Compétences </h2>
        <p>Autodidacte et depuis toujours passionné par le développement, j'ai pris la décision à l'âge de 45 ans de suivre une formation chez Openclassroom pour devenir développeur Web.</p>
    </div>
    <div class="competences">
        <div id="competencesTechnique">
            <h2 class="titre">Compétences professionnelles</h2>
            <div class="skill_progress">
                <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                        <div class="competence-unique">
                            <div class="competence-titre">Html5</div>

                            <div class="progress">
                                <img class="logo" src="public/logo/html5.jpg" alt="logo html5">
                                <div class="progress-bar red-bg animateProgressbar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                    <span class="red-color">60%</span>
                                </div>
                            </div>
                        </div>
                        <div class="competence-unique">
                            <div class="competence-titre">Javascript</div>
                            <div class="progress">
                                <img class="logo" src="public/logo/Js.jpg" alt="logo javascript">
                                <div class="progress-bar yellow-bg animateProgressbar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                    <span class="yellow-color">30%</span>
                                </div>
                            </div>
                        </div>
                        <div class="competence-unique">
                            <div class="competence-titre">Bootstrap</div>
                            <div class="progress">
                                <img class="logo" src="public/logo/Bootstrap.jpg" alt="logo bootstrap">
                                <div class="progress-bar green-bg animateProgressbar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                    <span class="green-color">60%</span>
                                </div>
                            </div>
                        </div>
                        <div class="competence-unique m-0">
                            <div class="competence-titre">MySQL</div>
                            <div class="progress">
                                <img class="logo" src="public/logo/mysql.jpg" alt="logo mysql">
                                <div class="progress-bar darkblue-bg animateProgressbar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                    <span class="darkblue-color">50%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                        <div class="competence-unique">
                            <div class="competence-titre">Css3</div>
                            <div class="progress">
                                <img class="logo" src="public/logo/css3.jpg" alt="logo css3">
                                <div class="progress-bar blue-bg animateProgressbar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                    <span class="blue-color">60%</span>
                                </div>
                            </div>
                        </div>
                        <div class="competence-unique">
                            <div class="competence-titre">PHP</div>
                            <div class="progress">
                                <img class="logo" src="public/logo/php.png" alt="logo php">
                                <div class="progress-bar darkblue-bg animateProgressbar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                    <span class="darkblue-color">40%</span>
                                </div>
                            </div>
                        </div>
                        <div class="competence-unique">
                            <div class="competence-titre">Wordpress</div>
                            <div class="progress">
                                <img class="logo" src="public/logo/wordpress.jpg" alt="logo worpress">
                                <div class="progress-bar red-bg animateProgressbar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                    <span class="red-color">50%</span>
                                </div>
                            </div>
                        </div>
                        <div class="competence-unique m-0">
                            <div class="competence-titre">Photoshop</div>
                            <div class="progress">
                                <img class="logo" src="public/logo/photoshop.jpg" alt="logo photoshop">
                                <div class="progress-bar yellow-bg animateProgressbar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                    <span class="yellow-color">50%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="diplomes">
    <div class="section-titre">
        <h2><i class="fa fa-graduation-cap" aria-hidden="true"></i>Diplômes</h2>
    </div>
    <div class="accordion" id="accordionSolution">
        <div class="collapsible-header acco-clr1 collapsed" id="heading_ventes" data-toggle="collapse" data-target="#collapse_ventes" aria-expanded="false" aria-controls="collapse_ventes">

            <p><strong>Developpeur Web Bac +2</strong> - En cours : Openclassroom 2020 <i class="fas fa-plus-square" style="color:yellow"></i></p>
        </div>
        <div id="collapse_ventes" class="collapse" aria-labelledby="heading_ventes" data-parent="#accordionSolution">
            <div class="accordion-body">
                <span>Réalisation de 5 projets passant par plusieurs languages de programmation.</span>
            </div>
        </div>
        <div class="collapsible-header acco-clr2" id="heading_etudes" data-toggle="collapse" data-target="#collapse_etudes" aria-expanded="true" aria-controls="collapse_etudes">

            <p><strong>BTS NRC</strong> - VAE : Dîplomé en 2014 <i class="fas fa-plus-square" style="color:yellow"></i></i></p>
        </div>
        <div id="collapse_etudes" class="collapse" aria-labelledby="heading_etudes" data-parent="#accordionSolution">
            <div class="accordion-body">
                <span>Brevet de Technicien Supérieur en Négociation et Relation Client. Ce dîplome m'a permis de valoriser tous mes acquis professionnels.</span>
            </div>
        </div>

        <div class="collapsible-header acco-clr3" id="heading_materiel" data-toggle="collapse" data-target="#collapse_materiel" aria-expanded="true" aria-controls="collapse_materiel">
            <p><strong>Bac Pro Vente</strong> - VAE : Dîplomé en 2014 <i class="fas fa-plus-square" style="color:yellow"></i></p>
        </div>
        <div id="collapse_materiel" class="collapse" aria-labelledby="heading_materiel" data-parent="#accordionSolution">
            <div class="accordion-body">
                <span>Bac Force de vente.</span>
            </div>
        </div>
    </div>
</section>

<section id="portfolio">
    <div class="section-titre">
        <h2>
            <i class="fa fa-briefcase" aria-hidden="true"></i>
            Portfolio </h2>
        <p>Réalisations de mes premiers projets pour l'obtention de mon dîplome.</p>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 no-padding">
                <div class="portfolio-content">
                    <figure>
                        <img src="public/Projet/Projet1.png" alt="WebAgency" class="img-fluid">
                        <figcaption class="entry-content">
                            <h2 class="titre" style="color: white">WebAgency</h2>
                            <hr>
                            <p class="flex flex-wrap justify-content-center" style="color: white">Réalisation d'un site vitrine</p>
                            <a href="http://Projet1.cyc-developpement.fr">
                                <p style="color:white" class="btn btn-dark">Voir plus</p>
                            </a>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 no-padding">
                <div class="portfolio-content">
                    <figure>
                        <img src="public/Projet/Projet2.png" alt="Office de tourisme" class="img-fluid">
                        <figcaption class="entry-content">
                            <h2 class="titre" style="color: white">Office de tourisme</h2>
                            <hr>
                            <p class="flex flex-wrap justify-content-center" style="color: white">Réalisation d'un site wordpress</p>
                            <a href="http://Projet2.cyc-developpement.fr">
                                <p style="color:white" class="btn btn-dark">Voir plus</p>
                            </a>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 no-padding">
                <div class="portfolio-content">
                    <figure>
                        <img src="public/Projet/Projet3.png" alt="Réservation de vélo" class="img-fluid">
                        <figcaption class="entry-content">
                            <h2 class="titre" style="color: white">Réservation de vélo</h2>
                            <hr>
                            <p class="flex flex-wrap justify-content-center" style="color: white">Réalisation d'un site de réservation de vélo.</p>
                            <a href="http://Projet3.cyc-developpement.fr">
                                <p style="color:white" class="btn btn-dark">Voir plus</p>
                            </a>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 no-padding">
                <div class="portfolio-content">
                    <figure>
                        <img src="public/Projet/Projet4.png" alt="Blog pour un écrivain" class="img-fluid">
                        <figcaption class="entry-content">
                            <h2 class="titre" style="color: white">Blog pour un écrivain</h2>
                            <hr>
                            <p class="flex flex-wrap justify-content-center" style="color: white">Réalisation d'un blog.</p>
                            <a href="http://Projet4.cyc-developpement.fr">
                                <p style="color:white" class="btn btn-dark">Voir plus</p>
                            </a>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 no-padding">
                <div class="portfolio-content">
                    <figure>
                        <img src="public/Projet/Projet5.png" alt="Ma première réalisation professionnelle" class="img-fluid">
                        <figcaption class="entry-content">
                            <h2 class="titre" style="color: white">Ma première réalisation professionnelle</h2>
                            <hr>
                            <p class="flex flex-wrap justify-content-center" style="color: white">Réalisation d'un site de relooking de meubles.</p>
                            <a href="http://Projet5.cyc-developpement.fr">
                                <p style="color:white" class="btn btn-dark">Voir plus</p>
                            </a>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="experience">
    <div class="section-titre">
        <h2>
            <i class="fa fa-pencil" aria-hidden="true"></i>
            Expérience </h2>
        <p></p>
    </div>
    <div class="row">
        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
            <div class="experience">
                <div class="experience-item-area">
                    <div class="border-left">
                        <div class="experience-item">
                            <h2 class="titreExperience">Développeur Web</h2>
                            <ul class="post-mate ul-li">
                                <li class="blue-color">Janvier 2020 - <span class="current blue-bg">Aujourd'hui</span></li>
                            </ul>
                            <p>- Création d'un site web de relooking de meuble<br></p>
                            <a href="http://Projet5.cyc-developpement.fr" target="_blank" class="blue-color">http://Projet5.cyc-developpement.fr</a>
                            <ul class="tabs skills-tab ul-li">
                                <li class="fa fa-item tag-icon">
                                    <i class="fa fa-tags" aria-hidden="true"></i>
                                </li>
                                <li class="fa fa-item"><a class="tag">#html5</a></li>
                                <li class="fa fa-item"><a class="tag">#css3</a></li>
                                <li class="fa fa-item"><a class="tag">#bootstrap</a></li>
                                <li class="fa fa-item"><a class="tag">#javascript</a></li>
                                <li class="fa fa-item"><a class="tag">#php7</a></li>
                                <li class="fa fa-item"><a class="tag">#mySql</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="loisirs">
    <div class="section-titre">
        <h2>
            <i class="fa fa-briefcase" aria-hidden="true"></i>
            Loisirs </h2>
        <p></p>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 no-padding">
                <div class="portfolio-content loisir-content">
                    <figure>
                        <img src="public/images/2.jpg" alt="Jeux vidéo" class="img-fluid">
                    </figure>
                    <div class="entry-content flex flex-column align-items-center justify-content-center align-middle">
                        <h2 class="titre"><i class="fas fa-gamepad"></i></h2>
                        <hr>
                        <p class="flex flex-wrap justify-content-center">Retro gaming</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 no-padding">
                <div class="portfolio-content loisir-content">
                    <figure>
                        <img src="public/images/3.png" alt="Impression 3D" class="img-fluid">
                    </figure>
                    <div class="entry-content flex flex-column align-items-center justify-content-center align-middle">
                        <h2 class="titre"><i class="fas fa-cube"></i></h2>
                        <hr>
                        <p class="flex flex-wrap justify-content-center">Musique</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 no-padding">
                <div class="portfolio-content loisir-content">
                    <figure>
                        <img src="public/images/4.png" alt="Film" class="img-fluid">
                    </figure>
                    <div class="entry-content flex flex-column align-items-center justify-content-center align-middle">
                        <h2 class="titre"><i class="fas fa-film"></i></h2>
                        <hr>
                        <p class="flex flex-wrap justify-content-center">Film</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $content = ob_get_clean(); ?>

<?php require('view/template.php') ?>
<?php require('view/footer.php') ?>