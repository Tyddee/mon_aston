<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="assets/css/app.css">
        <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
        <title>Do It Yourself</title>
    </head>

<body>
    <div id="bloc_page">
        
        <header>
            <div class="logo pull-left">
                <img src="images/do.jpg">
            </div>

            <div class="slogan pull-left">
                <h1>
                    Do It Yourself, pour cuisiner pas &agrave pas...<br /> 
                    Enjoy together
                </h1>
            </div>

            <div class="iconfb"><img src="images/iconfb.png"></div>
            <div class="icontweet"><img src="images/icontweet.png"></div>
            <div class="icongogol"><img src="images/icongogol.png"></div>

            <nav>
                <ul>
                    <li><a href="#">Accueil     |</a></li>
                    <li><a href="#">Bien débuter    |</a></li>
                    <li><a href="#">Recettes et tutos   |</a></li>
                    <li><a href="#">Boutique et livraison   |</a></li>
                    <li><a href="#">Cours à domicile    |</a></li>
                </ul>
            </nav>
        </header>

        <div class="bloc_research">
            <form method="post" action="traitement.php">
                <h3>Trouver la recette idéale :</h3>
                <p><input type="text" name="recette" placeholder="Recherche THE! recette..." />
                <input type="image" src="images/search.png"name="image"/></p>
            </form>
        </div>
        
        <section>
            <aside>
                <h1>À PROPOS DE L'AUTEUR</h1>
                    <a href="images/chat.jpg"><img src="images/minichat.jpg" alt="tête de chat" title="Cliquez pour agrandir" /></a>

                <p>Néophyte en codage, ce site me permet avant tout d'apprendre le codage autour d'un sujet qui touche tout le monde</p>
            </aside>

            <article>                
                <h1>Recettes : Clafoutis aux cerises</h1>
                    <img src="images/clafoutis.jpg" alt="clafoutis">
                        <ul>
                            <li>Facilité : <img src="images/cookingpot.png"><img src="images/cookingpot.png" alt="two cooking pot"></li>
                            <li>Durée : ___h___min</li>
                            <li>Coût : ____€</li>
                        </ul>
                    <p>Génial, quand la cueillette a été bonne! <br />
                        Avec des cerises surgel&eacutees, ça marche aussi! <br />
                        Petit conseil : n'appuyer pas sur les cerises, elles s'enfonceront d'elle-mêmes dans la pâte.
                    </p>
            </article>

            <article>
                <h2>Magazine</h2>
                    <img src="images/bistronomie.jpg" alt="bistronomie">
                       <a href="#"></a>
            </article>

            <article>
                <h2>Legumes de saisons</h2>
                    <img src="images/grappe.jpg">
                        <a href="#"></a>
            </article>

        </section>

        <footer>
            <div>
                <h2>Notre dernière recette</h2>
                <img src="images/pbasquaise.jpg" alt="poulet basquaise">
            </div>

            <div>
                <h2>Votre coup de coeur</h2>
                <img src="images/lasagnesbolo.jpeg" alt="lasagnesbolo">
                <p>Votes :</p>
                <img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star.png" alt="fivestar">
            </div>
        </footer>
    </div>
    <script src="assets/js/pagejs.js"></script>
</body>
</html>