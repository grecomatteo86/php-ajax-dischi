var app = new Vue ({
  el:"#app",
  data:{
    albums:[],
    genre:""
  },
  methods: {
    filter_genres: function(){
      axios.get('http://localhost:8888/php-ajax-dischi/indexVuejsPhp/api.php', {
        params: {
          genre: this.genre
        }
      })
      .then( (response) => {
        this.albums = response.data;
      });
    }
  },
  mounted:function(){
    axios.get('http://localhost:8888/php-ajax-dischi/indexVuejsPhp/api.php')
    .then( (response) => {
      this.albums = response.data;
    });
  }
});
