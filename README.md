# Movie app with Laravel, API, tailwindcss, livewire and Alpine JS.

### Works by TMDB API (https://www.themoviedb.org)

In this little app you can view popular movies, TV shows, and actors. You can also view movie/actor information and movie images. The 
application has a search bar where you can find any movie, as well as a button to view the trailer, where you can view the trailer of the movie
right on the site.

# Setup:

In .env file add TMDB_TOKEN(API key) for TMDB site
 
### setup project
`yarn install`

### install composer:
`composer install`

### build containers:
`sail build`

### star all dockers container:
`sail up -d`

### start the project:
`yarn dev or npm run watch`

You also can run tests to make sure everything works:

`sail artisan test`
