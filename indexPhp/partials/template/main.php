<main class="main_section">
    <?php foreach($database as $val){ ?>
        <div class="cd_container">
            <!-- poster -->
            <div class="poster_container pdd_btm">
                <!-- <img src="<?= $val["poster"] ?>" alt=""> -->
                <img src="<?php echo $val["poster"] ?>" alt="">
            </div>
            <!-- /poster -->
            <!-- title -->
            <div class="title_cd_container pdd_btm">
                <h2 class="second_title"><?= $val["title"] ?></h2>
            </div>
            <!-- /title -->
            <!-- author -->
            <div class="author_container pdd_btm">
                <h3 class="third_title"><?= $val["author"] ?></h3>
            </div>
            <!-- /author -->
            <!-- genre -->
            <div class="genre_container pdd_btm">
                <h4 class="genre"><?= $val["genre"] ?></h4>
            </div>
            <!-- /genre -->
            <!-- year -->
            <div class="year_container">
                <h4 class="year"><?= $val["year"] ?></h4>
            </div>
            <!-- /year -->
        </div>
    <?php } ?>
</main>