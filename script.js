const options = {
    method: "GET",
    headers: {
        accept: "application/json",
        Authorization:
            "Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI2MTAwZmRmNjdkN2ZiMDQzNTg1NjZmMWQ4N2M1YTYwZCIsInN1YiI6IjY1NDIxM2QzNmJlYWVhMDEwYjMwZDIzZSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.E-T3vW7P93giUp0OANXrZ0uXa7mfRkcsnJP25d0m8jE",
    },
};

const apiUrl = "https://api.themoviedb.org/3/trending/all/week?language=en-US";

fetch(apiUrl, options)
    .then((response) => response.json())
    .then((data) => {
        const filmGrid = document.getElementById("film-grid");

        data.results.forEach((film) => {
            const filmItem = document.createElement("a");
            filmItem.href = "info.php";

            const filmCard = document.createElement("div");
            filmCard.classList.add(
                "bg-black",
                "text-white",
                "rounded-lg",
                "shadow-lg"
            );

            const filmImage = document.createElement("img");
            filmImage.src = `https://image.tmdb.org/t/p/w500/${film.poster_path}`;
            filmImage.alt = film.title;
            filmImage.classList.add(
                "w-full",
                "h-64",
                "object-cover",
                "rounded-t-lg"
            );

            const filmTitle = document.createElement("h2");
            filmTitle.textContent = film.title;
            filmTitle.classList.add("text-2xl", "mb-2");

            const filmOverview = document.createElement("p");
            filmOverview.textContent = film.overview;
            filmOverview.classList.add("text-sm", "mb-4");

            const filmReleaseDate = document.createElement("p");
            filmReleaseDate.textContent = "Release Date: " + film.release_date;
            filmReleaseDate.classList.add("text-sm", "mb-2");

            const filmRating = document.createElement("p");
            filmRating.textContent = "Rating: " + film.vote_average;
            filmRating.classList.add("text-sm");

            filmCard.appendChild(filmImage);
            filmCard.appendChild(filmTitle);
            filmCard.appendChild(filmOverview);
            filmCard.appendChild(filmReleaseDate);
            filmCard.appendChild(filmRating);
            filmItem.appendChild(filmCard);
            filmGrid.appendChild(filmItem);
        });
    })
    .catch((err) => console.error(err));
