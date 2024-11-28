
<?php


use Bdd\Data;

$data = new  Data();
$projects = $data->projects;

?>

<div class="section4">
    <h2>MES PROJETS</h2>
    <div class="imgContainer">
        <?php foreach ($projects as $project) : ?>
            <img src="<?= $project['image'] ?>" onclick="navigateTo('<?=$project['uniqueName']?>')" alt="">
        <?php endforeach; ?>
    </div>

</div>
