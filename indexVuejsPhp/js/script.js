var app = new Vue ({
  el:"#app",
  data:{
    albums:[],
    genre:""
  },
  methods: {
    filter_genres: function () {
      alert('ciao');
    }
  },
  mounted:function(){
    axios.get('http://localhost:8888/php-ajax-dischi/indexVuejsPhp/api.php')
    .then( (response) => {
      // console.log(response.data);
      this.albums = response.data;
    });
  }
});
