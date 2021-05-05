<main class="main_section">
    <div v-for="(item,index) in database" class="cd_container">
        <!-- poster -->
        <div class="poster_container pdd_btm">
            <img :src="item.poster" :alt="`${item.title}_poster`">
        </div>
        <!-- /poster -->
        <!-- title -->
        <div class="title_cd_container pdd_btm">
            <h2 class="second_title">{{item.title}}</h2>
        </div>
        <!-- /title -->
        <!-- author -->
        <div class="author_container pdd_btm">
            <h3 class="third_title">{{item.author}}</h3>
        </div>
        <!-- /author -->
        <!-- genre -->
        <div class="genre_container pdd_btm">
            <h4 class="genre">{{item.genre}}</h4>
        </div>
        <!-- /genre -->
        <!-- year -->
        <div class="year_container">
            <h4 class="year">{{item.year}}</h4>
        </div>
        <!-- /year -->
    </div>
</main>