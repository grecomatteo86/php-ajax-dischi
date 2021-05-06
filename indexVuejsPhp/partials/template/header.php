<header class="header_section">
  <div class="logo_section">
    <i class="fab fa-napster"></i>
  </div>
  <div class="title_header_section">
    <h1 class="main_title">napster</h1>
  </div>
  <div class="select_container">
    <select v-model="genre" class="" name="genres">
      <option value="">All</option>
      <option value="rock">Rock</option>
      <option value="pop">Pop</option>
      <option value="jazz">Jazz</option>
      <option value="metal">Metal</option>
    </select>
    <button v-on:click="filter_genres">Cerca!</button>
  </div>
</header>