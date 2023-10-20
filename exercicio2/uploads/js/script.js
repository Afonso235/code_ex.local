console.log(dbMovies.movies);
let containerMain = document.getElementById("main");
let containerGenro = document.getElementById("genres");

containerGenro.innerHTML = "";
//iterar o array de filmes
dbMovies.movies.forEach(displayMovie);


function displayMovie(movie) {
    containerMain.innerHTML += `<img
    id="estrela"
    class="icon estrela"
    src="/icons/empty-star.png"
    alt="estrela vazia"
    onClick="setFavourite()"
  />
    <div class="movie"> ${movie.title}<br/>
       <img src ="${movie.posterUrl}"/>
       <br/>${movie.director}
       <br/>${movie.actors}
       <br/>${movie.year} 
       <br/>${movie.genres}
       <br/>${movie.summary}
       <br/>
       </div>`;
  }

  String;

  dbMovies.genres.forEach(function (genre) {
    containerGenro.innerHTML += `<option>${genre}</option>`;
  });
  
  document.getElementById("genres").onchange = function () {
    let genreSelect = this.value;
    const filtermovies = dbMovies.movies.filter(function (movie) {
      return movie.genres === genreSelect;
    });
    containerMain.innerHTML = "";
    filtermovies.forEach(displayMovie);
  };

  const setFavourite = (estrela) => {
    console.log(estrela);
  
    const article = document.getElementById('estrela');
    const elem = article.querySelector(".estrela");
  
    if (elem.src.includes("empty-star.png")) {
      elem.src = "/icons/filled-star.png";
    } else {
      elem.src = "/icons/empty-star.png";
    }
  };