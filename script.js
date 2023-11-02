const options = {
    method: "GET",
    headers: {
        accept: "application/json",
        Authorization:
            "Bearer ",
    },
};

const apiUrl = "https://api.themoviedb.org/3/movie/now_playing?language=en-US&page=1";

fetch(apiUrl, options)
    .then((response) => response.json())
    .then((data) => {
        const filmSlide = document.getElementById("film-grid");

        data.results.forEach((film) => {
            const filmItem = document.createElement("div");
            filmItem.classList.add("film-item");

            const filmCard = document.createElement("div");
            filmCard.classList.add(
                "bg-black",
                "text-white",
                "rounded-lg",
                "object-cover",
                "shadow-lg"
            );
            
            const filmImage = document.createElement("img");
            filmImage.src = `https://image.tmdb.org/t/p/w500/${film.poster_path}`;
            filmImage.alt = film.title;
            filmImage.classList.add(
                "w-full",
                "h-full",
                "object-cover",
                "rounded-t-lg"
            );

            const filmTitle = document.createElement("h2");
            filmTitle.textContent = film.title;
            filmTitle.classList.add("text-2xl", "mb-2");

            filmCard.appendChild(filmImage);
            filmCard.appendChild(filmTitle);
            filmItem.appendChild(filmCard);
            filmSlide.appendChild(filmItem);
        });
    })
    .catch((err) => console.error(err));


function fetchUpcomingFilms() {
    const upcomingApiUrl = "https://api.themoviedb.org/3/movie/upcoming?language=en-US&page=1";

    fetch(upcomingApiUrl, options)
        .then((response) => response.json())
        .then((data) => {
            const filmSlide = document.getElementById("film-grid1");

            data.results.forEach((film) => {
                const filmItem = document.createElement("div");
                filmItem.classList.add("film-item");

                const filmCard = document.createElement("div");
                filmCard.classList.add(
                    "bg-black",
                    "text-white",
                    "rounded-lg",
                    "object-cover",
                    "shadow-lg"
                );

                const filmImage = document.createElement("img");
                filmImage.src = `https://image.tmdb.org/t/p/w500/${film.poster_path}`;
                filmImage.alt = film.title;
                filmImage.classList.add(
                    "w-full",
                    "h-full",
                    "object-cover",
                    "rounded-t-lg"
                );

                const filmTitle = document.createElement("h2");
                filmTitle.textContent = film.title;
                filmTitle.classList.add("text-2xl", "mb-2");

                filmCard.appendChild(filmImage);
                filmCard.appendChild(filmTitle);
                filmItem.appendChild(filmCard);
                filmSlide.appendChild(filmItem);
            });
        })
        .catch((err) => console.error(err));
}

fetchUpcomingFilms();


function fetchTopRatedMovies() {
    const topRatedApiUrl = "https://api.themoviedb.org/3/movie/top_rated?language=en-US&page=1";

    fetch(topRatedApiUrl, options)
        .then((response) => response.json())
        .then((data) => {
            const filmSlide = document.getElementById("film-grid2");

            data.results.forEach((film) => {
                const filmItem = document.createElement("div");
                filmItem.classList.add("film-item");

                const filmCard = document.createElement("div");
                filmCard.classList.add(
                    "bg-black",
                    "text-white",
                    "rounded-lg",
                    "object-cover",
                    "shadow-lg"
                );

                const filmImage = document.createElement("img");
                filmImage.src = `https://image.tmdb.org/t/p/w500/${film.poster_path}`;
                filmImage.alt = film.title;
                filmImage.classList.add(
                    "w-full",
                    "h-full",
                    "object-cover",
                    "rounded-t-lg"
                );

                const filmTitle = document.createElement("h2");
                filmTitle.textContent = film.title;
                filmTitle.classList.add("text-2xl", "mb-2");

                filmCard.appendChild(filmImage);
                filmCard.appendChild(filmTitle);
                filmItem.appendChild(filmCard);
                filmSlide.appendChild(filmItem);
            });
        })
        .catch((err) => console.error(err));
}

fetchTopRatedMovies();


function fetchTrendingTVShows() {
    const trendingTVApiUrl = "https://api.themoviedb.org/3/trending/tv/day?language=en-US";

    fetch(trendingTVApiUrl, options)
        .then((response) => response.json())
        .then((data) => {
            const filmSlide = document.getElementById("film-grid3");

            data.results.forEach((show) => {
                const filmItem = document.createElement("div");
                filmItem.classList.add("film-item");

                const filmCard = document.createElement("div");
                filmCard.classList.add(
                    "bg-black",
                    "text-white",
                    "rounded-lg",
                    "object-cover",
                    "shadow-lg"
                );

                const filmImage = document.createElement("img");
                filmImage.src = `https://image.tmdb.org/t/p/w500/${show.poster_path}`;
                filmImage.alt = show.name;
                filmImage.classList.add(
                    "w-full",
                    "h-full",
                    "object-cover",
                    "rounded-t-lg"
                );

                const filmTitle = document.createElement("h2");
                filmTitle.textContent = show.name;
                filmTitle.classList.add("text-2xl", "mb-2");

                filmCard.appendChild(filmImage);
                filmCard.appendChild(filmTitle);
                filmItem.appendChild(filmCard);
                filmSlide.appendChild(filmItem);
            });
        })
        .catch((err) => console.error(err));
}

fetchTrendingTVShows();
