<!--FOOTER-->
   <footer class="page-footer blue-grey darken-4">
          <div class="container">
            <div class="row">
              <div class="col l3">
                <h5 class="white-text "><strong>Voice Of</strong><strong class="green-text"> Pakistan</strong></h5>
                <ul style="font-size: 16px">
                  <li><a class="grey-text text-lighten-3 hoverable" href="#!">Home</a></li>
                  <li><a class="grey-text text-lighten-3 hoverable" href="#!">About</a></li>
                  <li><a class="grey-text text-lighten-3 hoverable" href="#!">Surveys</a></li>
                  <li><a class="grey-text text-lighten-3 hoverable" href="#!">Contact Us</a></li>
                  <li><a class="grey-text text-lighten-3 hoverable" href="#!">Reviews</a></li>
                </ul>
              </div>
              <div class="col l6 ">
                <h5 class="white-text center">Raise Your <strong class="green-text">Voice </strong>With Us</h5>
                <p class="grey-text text-lighten-4 center">Finally, it's important to remember that you've got one of the most powerful activism tools ever invented- the Internet- at your disposal. You may wonder if your voice will ever be heard.</p>
              </div>
              <div class="col l3 ">
                <h5 class="white-text">Your <strong class="green-text">Voice</strong></h5>
                  <a class="waves-effect waves-light btn-floating social google N/A transparent hoverable">
                  <i class="fa fa-google"></i></a>
                  <a class="waves-effect waves-light btn-floating social twitter N/A transparent hoverable">
                  <i class="fa fa-twitter"></i></a>
                  <a class="waves-effect waves-light btn-floating social facebook N/A transparent hoverable">
                  <i class="fa fa-facebook"></i></a>
                  <a class="waves-effect waves-light btn-floating social instagram N/A transparent" >
                  <i class="fa fa-instagram"></i></a>
                  <div class="input-field">
                    <input placeholder="Email" id="first_name" type="text" class="validate">
                  </div>
                  <button class="btn btn-flat waves-effect waves-light white-text N/A transparent" style="border: 1px solid white">
                Subscribe
              </button>
              </div>
              
            </div>
          </div>
          <div class="footer-copyright grey darken-4">
            <div class="container">
            © 2017 Copyright- <strong>Voice Of</strong><strong class="green-text"> Pakistan</strong>
            <a class="grey-text text-lighten-4 right" href="#!">VOP@Transdata.biz</a>
            </div>
          </div>
        </footer>
<!--END OF FOOTER-->
<script>
   $(document).ready(function(){
      $('.carousel').carousel({
            dist:0,
            shift:0,
            padding:20,

      });
    });
        
</script>
<style>
  @import url("https://fonts.googleapis.com/icon?family=Material+Icons");
@import url("https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css");
 html{
    font-family: 'Raleway', sans-serif;
    font-weight: 400;
  }
  footer {
  line-height: 1.5;
}
.input-field .prefix.active{
    color: #81c784 ;
    }
    .input-field input[type=text]:focus + label{
      color: black;
    }
    .input-field input[type=text]:focus{
      border-bottom: 1px solid #81c784;
      box-shadow: 0 1px 0 0 #81c784;
    }
.card-image.img
{
  height:150px; !important
}
.carousel .carousel-item{
  top: -30px;
}
.input-field .prefix.active{
  color: #ffffff ;
  }
  .input-field input[type=text]:focus + label
      {
        color: #ffffff ;
      }
  .input-field input[type=text]:focus
      {
        border-bottom: 1px solid #ffffff  ;
        box-shadow: 0 1px 0 0 #ffffff   ;
      }

html{
    font-family: 'Raleway', sans-serif;
    font-weight: 400;
  }

.parallax-container h5 {
  color: $subheader;
}

.button-collapse {
  color: $hamburger-color;
}

p{
  font-size: 17px;
}
.parallax-container {
  height: 400px;
}

.content {
  line-height: 1.5;
}

footer {
  line-height: 1.5;
}
.slider .indicators .indicator-item.active{
  background-color: #ffab40;
  
}
.slider .indicators .indicator-item{
  background-color: #78909c;
 
}

</style>
<!-- js here -->
<script>
  $(document).ready(function(){
      $('.parallax').parallax();
  $(".button-collapse").sideNav();
  $('.dropdown-button').dropdown('open');
   $('.dropdown-button').dropdown('close');
   $('.slider').slider();
});
</script>
<script>
  $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrainWidth: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
    }
  );
</script>