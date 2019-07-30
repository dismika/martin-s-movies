<?php
/**
* Template Name: single page
*@link https://developer.wordpress.org/themes/basics/template-hierarchy/
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
?>

<?php wp_head(); ?>
<style type="text/css">
  @import url(https://fonts.googleapis.com/css?family=Lato:400,300,700);
  @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<?php
   if(isset($_GET['idmo'])){
    $mymovieValue = $_GET['idmo'];
     // echo("First name: " . $_POST['IDMo'] . "<br />\n");
   }
?>

<input type="hidden" id="myMovieID" value="<?php echo $mymovieValue ?>" />

<?php if ( has_nav_menu( 'top' ) ) : ?>
      <div class="navigation-top">
        <div class="wrap">
          <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
        </div><!-- .wrap -->
      </div><!-- .navigation-top -->
<?php endif; ?>



<div class="movie-card">
  
  <div class="container-fluid padd0">
    
    <a href="#"><img id="poster" alt="cover" class="cover" /></a>
        
    <div class="hero" >
       <div id="backdrop"></div>     
    
      
    </div> <!-- end hero -->
    
    <div class="description">
      <div class="container-fluid">
<div class="row">
   <div class="details">
     <input type="checkbox" checked data-toggle="toggle" data-on="Watch" data-off="Watched" data-onstyle="success" data-offstyle="warning" id="toggle-two">
        <div class="title1" id="originalTitle"></div>
        <div class="title2" id="tagLine"></div> 
          <fieldset class="rating">
            <input type="radio" id="star5" name="rating" value="5" />
            <label class = "full" for="star5" title="Awesome - 5 stars"></label>
            <input type="radio" id="star4half" name="rating" value="4 and a half" />
            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
            <input type="radio" id="star4" name="rating" value="4" checked />
            <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
            <input type="radio" id="star3half" name="rating" value="3 and a half" />
            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
            <input type="radio" id="star3" name="rating" value="3" />
            <label class = "full" for="star3" title="Meh - 3 stars"></label>
            <input type="radio" id="star2half" name="rating" value="2 and a half" />
            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
            <input type="radio" id="star2" name="rating" value="2" />
            <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
            <input type="radio" id="star1half" name="rating" value="1 and a half" />
            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
            <input type="radio" id="star1" name="rating" value="1" />
            <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
            <input type="radio" id="starhalf" name="rating" value="half" />
            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
          </fieldset>
        
        <span class="likes" id="vote"> </span><span class="likes">Votes</span>
        
      </div> <!-- end details -->

</div>

        <div class="row">
          

  <div class="column1 col-sm-4" id="genres">
         
      </div> <!-- end column1 -->
      
      <div class="column2 col-sm-8">
  <div class="row">

        <div class="col-sm-8">
          <p id="overview"></p>
        </div>
        <div class="col-sm-4">
           <div class="avatars">

<table id="detail">
  <tr>
    <td>Budget</td>
   
    <td id="budget"></td>
  </tr>
  <tr>
    <td>Popularity</td>
    
    <td id="popularity"></td>
  </tr>
  <tr>
    <td>Release_date</td>
    
    <td id="release_date"></td>
  </tr>
  <tr>
    <td >Revenue</td>
    
    <td id="revenue"></td>
  </tr>
  <tr>
    <td>Runtime</td>
    
    <td id="runtime"></td>
  </tr>
</table>


           </div> <!-- end avatars -->
        
        </div>
       </div> 
      </div> <!-- end column2 -->


        </div>
        
      </div>
      
    
    </div> <!-- end description -->
    
   
  </div> <!-- end container -->
</div> <!-- end movie-card -->



<?php wp_footer(); ?>