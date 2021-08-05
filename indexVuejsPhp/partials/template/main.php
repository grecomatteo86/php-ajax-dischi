<main class="main_section">
    <div v-for="item in albums" class="cd_container">
        <div class="poster_container pdd_btm">
            <img :src="item.poster" :alt="`${item.title}_poster`">
        </div>
        <div class="title_cd_container pdd_btm">
            <h2 class="second_title">{{item.title}}</h2>
        </div>
        <div class="author_container pdd_btm">
            <h3 class="third_title">{{item.author}}</h3>
        </div>
        <div class="genre_container pdd_btm">
            <h4 class="genre">{{item.genre}}</h4>
        </div>
        <div class="year_container">
            <h4 class="year">{{item.year}}</h4>
        </div>
    </div>
</main>