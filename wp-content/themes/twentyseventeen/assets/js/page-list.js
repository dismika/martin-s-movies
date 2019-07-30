let baseURL = 'https://api.themoviedb.org/3/';
let baseURLphp = 'https://api.themoviedb.org/3/';
let detailPage = 'http://localhost/martin_movie/index.php/single-movie';
let postcontent = document.getElementById("pst-content");
let configData = null;
let baseImageURL = null;
let api_key = '1e448e0dfcdbb565f5d329820065b4d2';

let getConfig = function () {
    let url = "".concat(baseURL, 'configuration?api_key=', api_key);
    fetch(url)
        .then((result) => {
            return result.json();

        })
        .then((data) => {
            baseImageURL = data.images.secure_base_url;
            configData = data.images;
            console.log('config fetched');
            runSearch('%27a', baseImageURL);
        })
        .catch(function (erro) {
            alert(erro);
        });
}

let runSearch = function (keyword, baseURLimage) {
    let url = ''.concat(baseURL, 'search/movie?api_key=', api_key, '&query=', keyword);
    fetch(url)
        .then(result => result.json())
        .then((data) => {
            console.log(url);
            console.log(baseURLimage);
            createHtml(data, baseURLimage);

        })
}

function createHtml(postData, postBaseUrl) {

    let ourHtmalString = "";

    for (let i = 0; i < postData.results.length; i++) {


        ourHtmalString += '<a href="' + detailPage + '?idmo=' + postData.results[i].id + '"><div class="col-sm-4"> ' +

            '<div class="movie-card"  > ' +
            '<div class="movie-header manOfSteel"  > ' +
            '<img class="card-img-topuiu" src="' + postBaseUrl + 'original' + postData.results[i].poster_path + ' "  alt="Card image cap">' +
            '<div class="header-icon-container">' +
            '<a href="#">' +
            // '<i class="material-icons header-icon24324"></i>' +
            '</a>' +
            '</div>' +
            '</div><!--movie-header-->' +
            '<div class="movie-content">' +
            '<div class="movie-content-header">' +

            '<div class="movie-content-header">' +

            '<h3 class="movie-title">' + postData.results[i].title + '</h3>' +

            '<div class="imax-logo"></div>' +
            '</div>' +

            '</div>' +
            '<div class="movie-info">' +
            '<div class="info-section">' +
            '<label>Release Date</label>' +
            '<span>' + postData.results[i].release_date + '</span>' +
            '</div><!--date,time-->' +
            '<div class="info-section">' +
            '<label>Vote</label>' +
            '<span>' + postData.results[i].vote_count + '</span>' +
            '</div><!--vote-->' +
            '<div class="info-section">' +
            '<label>Avg</label>' +
            '<span>' + postData.results[i].vote_average + '</span>' +
            ' </div><!--row-->' +
            ' <div class="info-section">' +
            ' <label>Lan</label>' +
            '<span>' + postData.results[i].original_language + '</span>' +
            '</div><!--Rate-->' +

            '</div>' +
            '</div><!--movie-content-->' +
            '</div><!--movie-card--></div> </a>';

    }

    postcontent.innerHTML = ourHtmalString;
};

document.addEventListener('DOMContentLoaded', getConfig);