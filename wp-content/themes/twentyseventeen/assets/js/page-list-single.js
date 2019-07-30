let myMovieID = $("#myMovieID").val();
let baseURL = 'https://api.themoviedb.org/3/';
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
            runSearch('%27a', baseImageURL);
        })
        .catch(function (erro) {
            alert(erro);
        });
}

let runSearch = function (keyword, baseURLimage) {
    let url = ''.concat(baseURL, 'movie/' + myMovieID + '?api_key=', api_key, '&append_to_response=videos,images');
    fetch(url)
        .then(result => result.json())
        .then((data) => {

            loadDataSinglePage(data, baseURLimage);

        })
}

function loadDataSinglePage(postData, postBaseUrl) {

    let urlImage = postBaseUrl + 'w200' + postData.poster_path;
    document.getElementById('poster').src = urlImage;
    document.getElementById('originalTitle').innerHTML = postData.original_title;
    document.getElementById('tagLine').innerHTML = postData.tagline;
    document.getElementById('vote').innerHTML = postData.vote_count;

    let genreHtml = "";
    for (let i = 0; i < postData.genres.length; i++) {

        genreHtml += '<span class="tag">' + postData.genres[i].name + '</span>';
    }

    document.getElementById('genres').innerHTML = genreHtml;
    document.getElementById('overview').innerHTML = postData.overview;
    let urlback = '<img src="' + postBaseUrl + 'original' + postData.backdrop_path + ' "  alt="Card image cap" class="cover-img">';
    document.getElementById('backdrop').innerHTML = urlback;

    document.getElementById('budget').innerHTML = postData.budget;

    document.getElementById('popularity').innerHTML = postData.popularity;
    document.getElementById('release_date').innerHTML = postData.release_date;
    document.getElementById('revenue').innerHTML = postData.revenue;
    document.getElementById('runtime').innerHTML = postData.runtime + 'min';


}


function createCookie(cookieName, cookieValue, daysToExpire) {
    var date = new Date();
    date.setTime(date.getTime() + (daysToExpire * 24 * 60 * 60 * 1000));
    document.cookie = cookieName + "=" + cookieValue + "; expires=" + date.toGMTString();
}

function accessCookie(cookieName) {
    var name = cookieName + "=";
    var allCookieArray = document.cookie.split(';');
    for (var i = 0; i < allCookieArray.length; i++) {
        var temp = allCookieArray[i].trim();
        if (temp.indexOf(name) == 0)
            return temp.substring(name.length, temp.length);
    }
    return "";
}

function checkCookie() {
    var user = accessCookie("testCookie");
    if (user != "")
        alert("Welcome Back " + user + "!!!");
    else {
        user = prompt("Please enter your name");
        num = prompt("How many days you want to store your name on your computer?");
        if (user != "" && user != null) {
            createCookie("testCookie", user, num);
        }
    }
}

document.addEventListener('DOMContentLoaded', getConfig);