<?php
require_once("templates/head.php");
?>

<body>
    <?php
    require_once("templates/header.php");
    ?>
    <div class="siteHeader">
        <h1 class="siteHeader-h1">Qui-Suis Je ?</h1>
        <h2 class="siteHeader-h2">Rochat Lise</h2>
    </div>
    </header>
    <main>
<?php
        require_once("templates/aside.php");
?>
        <div class="sectionAbout">
            <div class="sectionMain sectionAbout-height">
                <p class="sectionMainp sectionMainp-margin"> <strong>Développeuse Front</strong> ? <strong>Développeuse Back</strong> ? <strong>Développeuse Full Stack</strong> ? De nombreuses spécialités pour un même corps de métier. Pour le moment, on prendra le terme de <strong>développeuse junior.</strong> <br> Novice dans le domaine du développement et pourtant bien passionnée par le métier !</p>
                <p class="sectionMainp sectionMainp-margin">La passion, parlons-en justement. Un terme bien abstrait pour les non-passionnés. Jusqu'il y a un an, je pensais n'avoir aucune passions mais cela c'était bien évidemment avant de découvrir le développement ! Etre passionné par le développement, c'est pour moi vouloir apprendre d'avantage, acquérir toujours plus de compétences. Et cela tombe bien, dans le domaine de la technologie rien n'est stable ! Tout évolue tout le temps ! Me voilà occupée pour l'éternité.
                <p class="sectionMainp sectionMainp-margin"> D'autres passions ? <br>Non je mange <strong class="nameLanguage">php</strong>, j'assaisonne avec <strong class="nameLanguage">symfoni</strong>. Je bois <strong class="nameLanguage">html</strong>, <strong class="nameLanguage">css</strong> et le vendredi soir tout est permis avec du <strong class="nameLanguage">javascipt</strong> ! Croyez moi je suis très gourmande. </p>
            </div>
            <article class="sectionMain sectionAbout-height">
                <h2 class="sectionMain-h2">Actualités</h2>
                <div class="sectionNews">
                    <h3 class="sectionMain-h3 h3-weight-bold">Contrat Alternance</h3>
                    <p class="sectionMainp sectionMainp-margin">Je recherche une entreprise pour continuer ma formation dans le <strong>developpement web</strong>. En septembre 2022 j'ai pour ambition de rentrer en <strong>licence professionnelle</strong> dans le domaine du developpement web. Je suis mobile géographiquement dans toute la <strong>France</strong>.</p>
                </div>
                <div class="sectionVacancies">
                    <h3 class="sectionMain-h3 h3-weight-bold">Tour du Beaufortain</h3>
                    <p class="sectionMainp sectionMainp-margin">Passionnée par la <strong>randonnée itinérante</strong>, le trip de cet été est le <strong>Tour du Beaufortain</strong>. Grande Randonné de pays de 140 km, pour retrouver un sentiment de quiétude le temps d'une boucle au départ de Queige, petite commune de Savoie.<em> Promis je me nourrirait de produits locaux (beaufort,bière du mont blanc)</em>.</p>
                </div>
                <div class="sectionETC">
                    <p class="sectionMain-fontsize">...</p>
                </div>
            </article>
            <article class="sectionMain-skills-center">
                <div>
                    <h2 class="sectionMain-h2">Mes compétences</h2>
                </div>
                <div class="sectionMainSkills-grid">
                    <div class="sectionDev">
                        <h3 class="sectionMain-h3 h3-color-green">Developpement Web</h3>
                        <ul>
                            <li class="sectionMainp">HTML 5</li>
                            <li class="sectionMainp">CSS 3</li>
                        </ul>
                    </div>
                    <div class="sectionLanguage">
                        <h3 class="sectionMain-h3 h3-color-green ">Language de Programmation</h3>
                        <ul>
                            <li class="sectionMainp">PHP</li>
                            <li class="sectionMainp">JavaScript</li>
                            <li class="sectionMainp">C</li>
                        </ul>
                    </div>
                    <div class="sectionFramework">
                        <h3 class="sectionMain-h3 h3-color-green">Framework</h3>
                        <ul>
                            <li class="sectionMainp">Symfony</li>
                            <li class="sectionMainp">React</li>
                        </ul>
                    </div>
                    <div class="sectionCMS">
                        <h3 class="sectionMain-h3 h3-color-green">Système de Gestion de Contenu</h3>
                        <ul>
                            <li class="sectionMainp">Wordpress</li>
                            <li class="sectionMainp">Prestashop</li>
                        </ul>
                    </div>
                    <div class="sectionDesign">
                        <h3 class="sectionMain-h3 h3-color-green">Web Design</h3>
                        <ul>
                            <li class="sectionMainp">Figma</li>
                            <li class="sectionMainp">Adobe XD</li>
                            <li class="sectionMainp">Photoshop</li>
                        </ul>
                    </div>
                    <div class="sectionProject">
                        <h3 class="sectionMain-h3 h3-color-green">Gestion de Projet</h3>
                        <ul>
                            <li class="sectionMainp">Rédaction Cahier des Charges</li>
                            <li class="sectionMainp">Diagramme de gantt</li>
                            <li class="sectionMainp">Methode Agile</li>
                        </ul>
                    </div>
                </div>
            </article>
        </div>
    </main>
    <?php
    require_once("templates/footer.php");
    ?>