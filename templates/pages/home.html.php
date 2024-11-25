<div class="section1">
    <?php require_once 'components/navbar.html.php' ?>

    <div class="columns">
        <div class="whiteBlur1"></div>
        <div class="column">
            <div class="logo"><span>Antoine Claitte</span></div>
            <div class="mailAndLinkedin">
                <div>
                    <span>[RS]</span>
                    <a href="https://www.linkedin.com/in/antoine-claitte-a14a06245/" target="_blank"
                       class="animatedSpan">
                        <span>LinkedIn</span>
                        <span>LinkedIn</span>
                        <span>LinkedIn</span>
                    </a></div>
                <div>
                    <span>[@]</span>
                    <div class="animatedSpan">
                        <span>contact@antoineclaitte.com</span>
                        <span>contact@antoineclaitte.com</span>
                        <span>contact@antoineclaitte.com</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="column"></div>
        <div class="column"></div>
        <div class="column">
            <div class="link"><span>[01]</span>
                <div class="animatedSpan">
                    <span>A propos 1</span>
                    <span>A propos 2</span>
                    <span>A propos 3</span>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="link"><span>[02]</span>
                <div class="animatedSpan">
                    <span>Projets</span>
                    <span>Projets</span>
                    <span>Projets</span>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="link"><span>[03]</span>
                <div class="animatedSpan">
                    <span>Contact</span>
                    <span>Contact</span>
                    <span>Contact</span>
                </div>
            </div>
        </div>

        <div class="whiteBlur2"></div>
    </div>

    <div class="elipse1"></div>
    <div class="elipse2"></div>
    <div class="elipse3"></div>
    <div class="elipse4"></div>
    <div class="titles">
        <h1>Antoine Claitte</h1>
        <h2>Web Designer</h2>
    </div>


    <h1 class="bienvenue">Bienvenue</h1>
</div>

<script>

    let links = document.querySelectorAll('.animatedSpan')
    links.forEach((link) => {
        let isAnimating = false;
        console.log(link)
        link.addEventListener('mouseover', function (e) {

            if (isAnimating) return; // Si une animation est en cours, ignorer l'événement
            isAnimating = true;
            // Get the target
            console.log(link)
            const target = e.target;


            // Get the bounding rectangle of target
            const rect = target.getBoundingClientRect();

            const y = e.clientY - rect.top;

            // Vérifier si l'entrée vient du haut ou du bas
            if (y < rect.height / 2) {
                console.log("Entier par le haut")

                isAnimating = true;
                link.querySelectorAll('span').forEach((span) => {
                    span.style.transform = "translateY(-38px)"
                })
            } else {

                isAnimating = true;
                console.log("Entier par le bas")
                link.querySelectorAll('span').forEach((span) => {
                    span.style.transform = "translateY(0px)"
                })
            }


        });

        link.addEventListener('mouseout', function () {
            link.querySelectorAll('span').forEach((span) => {
                span.style.transform = "translateY(-19px)"; // Retour à l'état initial
            });
            isAnimating = false;
        });
    })

</script>

<?php
require_once 'homeSections/about.html.php';
require_once 'homeSections/webdesign.html.php';
require_once 'homeSections/projects.html.php';
require_once 'homeSections/footer.html.php';
?>