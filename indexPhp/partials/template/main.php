<main class="main_section">
    <?php foreach($database as $val){ ?>
        <div class="cd_container">
            <div class="poster_container pdd_btm">
                <img src="<?php echo $val["poster"] ?>" alt="">
            </div>
            <div class="title_cd_container pdd_btm">
                <h2 class="second_title"><?= $val["title"] ?></h2>
            </div>
            <div class="author_container pdd_btm">
                <h3 class="third_title"><?= $val["author"] ?></h3>
            </div>
            <div class="genre_container pdd_btm">
                <h4 class="genre"><?= $val["genre"] ?></h4>
            </div>
            <div class="year_container">
                <h4 class="year"><?= $val["year"] ?></h4>
            </div>
        </div>
    <?php } ?>
</main>