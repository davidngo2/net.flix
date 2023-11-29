function getMovieIdFromURL() {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get("id");
}

const movieId = getMovieIdFromURL();

if (movieId) {
    const options = {
        method: "GET",
        headers: {
            accept: "application/json",
            Authorization:
                "Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI2MTAwZmRmNjdkN2ZiMDQzNTg1NjZmMWQ4N2M1YTYwZCIsInN1YiI6IjY1NDIxM2QzNmJlYWVhMDEwYjMwZDIzZSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.E-T3vW7P93giUp0OANXrZ0uXa7mfRkcsnJP25d0m8jE",
        },
    };

    fetch(
        `https://api.themoviedb.org/3/movie/${movieId}?language=en-US`,
        options
    )
        .then((response) => response.json())
        .then((data) => {
            const filmDetails = document.getElementById("film-details");

            const releaseDate = data.release_date;
            const genres = data.genres.map((genre) => genre.name).join(", ");
            const popularity = data.popularity;

            filmDetails.innerHTML = `
                        <img src="https://image.tmdb.org/t/p/w500/${data.poster_path}" alt="${data.title}">
                        <h2>${data.title}</h2>
                        <p>${data.overview}</p>
                        <p>Release Date: ${releaseDate}</p>
                        <p>Genres: ${genres}</p>
                        <p>Popularity: ${popularity}</p>
                    `;
        })
        .catch((err) => console.error(err));
}






if (movieId) {
    const Options = {
        method: "GET",
        headers: {
            accept: "application/json",
            Authorization:
                "Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI2MTAwZmRmNjdkN2ZiMDQzNTg1NjZmMWQ4N2M1YTYwZCIsInN1YiI6IjY1NDIxM2QzNmJlYWVhMDEwYjMwZDIzZSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.E-T3vW7P93giUp0OANXrZ0uXa7mfRkcsnJP25d0m8jE",
        },
    };


    fetch(
        `https://api.themoviedb.org/3/movie/${movieId}/videos?language=en-US`,
        Options
    )
        .then((response) => response.json())
        .then((response) => {
            const resultElement = document.getElementById("video-result");

            const videoKey = response.results[1].key;

            const videoElement = document.createElement("iframe");
            videoElement.src = `https://www.youtube.com/embed/${videoKey}`;
            videoElement.width = "560";
            videoElement.height = "315";
            videoElement.allowFullscreen = true;

            resultElement.appendChild(videoElement);
        });
}
