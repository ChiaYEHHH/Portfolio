<!-- sql -->
<div class="row mt-3 justify-content-around">
    <?php
    $news = $News->all(['sh' => 1]);
    foreach ($news as $n) {
        echo "<div class='col-3 card overflow-hidden' style='height: 160px;'>";
        echo "<h5 class='card-title text-center' style='color:rgb(66, 170, 153);font-weight:bold;'>{$n['title']}</h5>";
        echo "<div class='card-text'>";
        echo "<p>{$n['article']}</p>";
        echo "</div>";
        echo "</div>";
    }

    ?>
</div>
<div class='row mt-3'>
<?php
$news = $News->all();
foreach ($news as $key => $value) {
    echo "<div class='col-1 align-content-center'>{$value['id']}</div>";
    echo "<div class='col-2 align-content-center' style='color:rgb(66, 170, 153);font-weight:bold;'>{$value['title']}</div>";
    echo "<div class='col-8 align-content-center text-start'>{$value['article']}</div>";
    echo "<div class='col-1 align-content-center'>{$value['sh']}</div>";
}
?>
</div>