console.log("hahhah");

let baseURL = 'https://api.themoviedb.org/3/';
let postcontent = document.getElementById("pst-content");
        let configData = null;
        let baseImageURL = null;
        let api_key = '1e448e0dfcdbb565f5d329820065b4d2';
        
        let getConfig = function () {
            let url = "".concat(baseURL, 'configuration?api_key=', api_key); 
            fetch(url)
            .then((result)=>{
                return result.json();

            })
            .then((data)=>{
                baseImageURL = data.images.secure_base_url;
                configData = data.images;
                console.log("hahhah");
                //console.log('config:', data);
               // console.log('config fetched');
                runSearch('%27a', baseImageURL);
            }) 
            .catch(function(erro){
                alert(erro);
            });
        }
        
        let runSearch = function (keyword, baseURLimage) {
            let url = ''.concat(baseURL, 'movie/157336?api_key=',api_key,'&append_to_response=videos,images' );
            fetch(url)
            .then(result=>result.json())
            .then((data)=>{
         
                loadDataSinglePage(data,baseURLimage);
                
            })
        }

function loadDataSinglePage(postData,postBaseUrl){
	
	let urlImage = postBaseUrl + 'w200' + postData.poster_path;
	document.getElementById('poster').src = urlImage;
	document.getElementById('originalTitle').innerHTML = postData.original_title;
	document.getElementById('tagLine').innerHTML = postData.tagline;
	document.getElementById('vote').innerHTML = postData.vote_count;

	let genreHtml = "";
	for(let i=0; i< postData.genres.length; i++){

		genreHtml += '<span class="tag">' + postData.genres[i].name + '</span>';
	}

	document.getElementById('genres').innerHTML = genreHtml;
	document.getElementById('overview').innerHTML = postData.overview;
	let urlback = '<img src="' + postBaseUrl + 'original' + postData.backdrop_path + ' "  alt="Card image cap">';
	document.getElementById('backdrop').innerHTML = urlback;

	document.getElementById('budget').innerHTML = postData.budget;
	document.getElementById('lang').innerHTML = postData.spoken_languages[0].name;
	document.getElementById('popularity').innerHTML = postData.popularity;
	document.getElementById('release_date').innerHTML = postData.release_date;
	document.getElementById('revenue').innerHTML = postData.revenue;
	document.getElementById('runtime').innerHTML = postData.runtime + 'min';



}

        
document.addEventListener('DOMContentLoaded', getConfig);