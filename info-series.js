function getSeriesIdFromURL() {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get("id");
}

const seriesId = getSeriesIdFromURL();

if (seriesId) {
    const options = {
        method: "GET",
        headers: {
            accept: "application/json",
            Authorization:
                "Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI2MTAwZmRmNjdkN2ZiMDQzNTg1NjZmMWQ4N2M1YTYwZCIsInN1YiI6IjY1NDIxM2QzNmJlYWVhMDEwYjMwZDIzZSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.E-T3vW7P93giUp0OANXrZ0uXa7mfRkcsnJP25d0m8jE",
        },
    };

    fetch(`https://api.themoviedb.org/3/tv/${seriesId}?language=en-US`, options)
        .then((response) => response.json())
        .then((data) => {
            const seriesDetails = document.getElementById("series-details");
            const firstAirDate = data.first_air_date;
            const genres = data.genres.map((genre) => genre.name).join(", ");
            const popularity = data.popularity;

            seriesDetails.innerHTML = `
                        <img src="https://image.tmdb.org/t/p/w500/${data.poster_path}" alt="${data.name}">
                        <h2>${data.name}</h2>
                        <p>${data.overview}</p>
                        <p>First Air Date: ${firstAirDate}</p>
                        <p>Genres: ${genres}</p>
                        <p>Popularity: ${popularity}</p>
                        
                    `;
        })
        .catch((err) => console.error(err));
}
