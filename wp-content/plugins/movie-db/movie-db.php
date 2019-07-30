<?php
/**
 * Plugin Name: API Movie 
 * Description: Retrieves the number of followers and latest movie from your page.
 * Version:     1.0.0
 * Author:      Dismika Harishchandra
 */
 

 
// function footag_func( $atts, $content = "" ) {

// 	$json = file_get_contents("https://www.workingwithchildren.vic.gov.au/");
// 	$result = json_decode($json, true);
//     print_r($result);
// 	//$content = $result;
// 	//return "content = $content";



// }
// add_shortcode( 'baztag', 'footag_func' );

class MyPlugin {
	

	public static function movietag_list( $atts, $content = "" ) {

		$api_key = '1e448e0dfcdbb565f5d329820065b4d2';
		$baseUrlApi = 'https://api.themoviedb.org/3/';
		$output = get_api_movie_list($api_key,$baseUrlApi);

		// print_r($output);
		//$content = baztag_func2("hiiii");
		return $output  ;
	}




 }
 add_shortcode( 'baztag', array( 'MyPlugin', 'movietag_list') );

 function get_api_movie_list( $api_key, $baseUrl) {

 	$imageBaseUrl = create_image_baseUrl( $api_key, $baseUrl);
 	$apiUrldata = getdata_api_Url( $api_key, $baseUrl);
 	
 	$moviecardhtml = "";
    

foreach($apiUrldata[results] as $apiUrldata )
{
    print_r('<div class="row" id="pst-content"><div class="col-sm-4"> <a href="http://localhost/martin_movie/index.php/single-movie?idmo='.$apiUrldata[id].'">
<div class="movie-card">
		<div class="movie-header manOfSteel">
		<img class="card-img-topuiu" src="'.$imageBaseUrl.'original'.$apiUrldata[poster_path].'"  alt="Card image cap">
			
		</div><!--movie-header-->
		<div class="movie-content">
			<div class="movie-content-header">
				
					<h3 class="movie-title">'.$apiUrldata[title].'</h3>
				
				<div class="imax-logo"></div>
			</div>
			<div class="movie-info">
                                     <div class="info-section">
                                        <label>Release Date</label>
                                        <span>'.$apiUrldata[release_date].'</span>
                                     </div><!--date,time-->
                                     <div class="info-section">
                                         <label>Vote</label>
                                         <span>'.$apiUrldata[vote_count].'</span>
                                     </div><!--vote-->
                                     <div class="info-section">
                                         <label>Avg</label>
                                         <span>'.$apiUrldata[vote_average].'</span>
                                     </div><!--row-->
                                    <div class="info-section">
                                         <label>Lan</label>
                                         <span>'.$apiUrldata[original_language].'</span>
                                     </div><!--Rate-->
                    
                                 </div>
			</div>
		</div><!--movie-content-->
	</div><!--movie-card--></a></div></div>');

}

$moviecardhtml = (string) '';

//return $moviecardhtml;




	}

	 function create_image_baseUrl( $api_key, $baseUrl) {
		 	$url =  $baseUrl."configuration?api_key=". $api_key ;
		 	$json = file_get_contents($url);
		 	$result = json_decode($json, true);
		 	return $result[images][secure_base_url];

		
	}
	 function getdata_api_Url( $api_key, $baseUrl) {
		 	$url =  $baseUrl."search/movie?api_key=". $api_key. "&query=%27a" ;
			$json = file_get_contents($url);
			$result = json_decode($json, true);
			return $result;		
		
	}


