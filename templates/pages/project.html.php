<div class="oneProjectSection">

    <div class="columns">
        <div class="column">
            <div class="logo"><span>Antoine Claitte</span></div>

        </div>
        <div class="column"></div>
        <div class="column"></div>
        <div class="column">
            <div class="link" onclick="scrollToDiv('.section2')"><span>[01]</span>
                <div class="animatedSpan">
                    <span>A propos</span>
                    <span>A propos</span>
                    <span>A propos</span>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="link" onclick="scrollToDiv('.section4')"><span>[02]</span>
                <div class="animatedSpan">
                    <span>Projets</span>
                    <span>Projets</span>
                    <span>Projets</span>
                </div>
            </div>
        </div>
        <div class="column" onclick="scrollToDiv('.footer')">
            <div class="link"><span>[03]</span>
                <div class="animatedSpan">
                    <span>Contact</span>
                    <span>Contact</span>
                    <span>Contact</span>
                </div>
            </div>
        </div>
        <div class="elipse">

        </div>
    </div>

    <h2><?= $project['title'] ?></h2>
    <p><?= $project['description'] ?></p>
    <a href="<?= $project['link'] ?>" target="_blank" class="blackButton">Voir le projet en ligne
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.65625 12.6264L12.6258 1.65682M12.6258 1.65682L12.625 12.4998M12.6258 1.65682H1.31211"
                  stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </a>

    <?php foreach ($project['images'] as $image) : ?>
        <img src="/images/projects/<?=$image?>" alt="">
   <?php endforeach; ?>
</div>
