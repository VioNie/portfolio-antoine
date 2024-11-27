<?php
$baseImage = "/images/projects/";
$projects=[
     [
             "image"=>$baseImage.'MeyPortfolio.png',
     ],     [
             "image"=>$baseImage.'MeyPortfolio.png',
     ],     [
             "image"=>$baseImage.'MeyPortfolio.png',
     ],     [
             "image"=>$baseImage.'MeyPortfolio.png',
     ],     [
             "image"=>$baseImage.'MeyPortfolio.png',
     ],     [
             "image"=>$baseImage.'MeyPortfolio.png',
     ],     [
             "image"=>$baseImage.'MeyPortfolio.png',
     ],

];
?>

<div class="section4">
<h2>Mes projets</h2>
    <div class="imgContainer">
        <?php foreach ($projects as $project) : ?>
            <img src="<?=$project['image']?>" alt="">
        <?php endforeach; ?>
    </div>

</div>
