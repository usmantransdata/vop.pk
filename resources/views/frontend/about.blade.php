<!DOCTYPE html>
@include('frontend.layout.header')

<section>
  <img src="{{ asset('/') }}public/frontend/images/about.jpg" style="width: 100%; height: 350px;"> 
  <!-- filter: blur(3px); -->
  <h2 class="white-text" style="background-color:#00000099;opacity: 0.8; position: absolute; top:210px; left: 0; width:100%; text-align: center;"><strong>Who</strong><strong class="green-text"> We Are</strong></h2>
</section>
<br><br>
<div class="container">
  <div class="row">
    <div class="col m6">
      <div class="col m12">
        <img class="materialboxed" width="400" src="{{ asset('/') }}public/frontend/images/blog-post-2.jpg"
          data-caption="Voice Of Pakistan"
          style="border: 2px solid #fafafa; height: 350px;">
      </div>
    </div>
    <div class="col m6">
      <h5><b>We Help Brands To</b></h5>
      <h3 class="green-text"><b>Connect & Grow</b></h3>
      <p style="font-size: 17px;">Lorem ipsum dolor sit amet consectetur adipisicing elit sedo eiusmod temp incidunt ut labore et dolore magna aliqua uat enim ad minim veniama quis nostrud ullamco lab oris nisi aliquip consequat dolor in reprehenderit voluptate.</p>
      <ul>
        <li><b><i class="fa fa-check green-text" aria-hidden="true"></i> Lorem ipsum dolor sit</b></li>
        <li><b><i class="fa fa-check green-text" aria-hidden="true"></i> Lorem ipsum dolor sit amet</b></li>
        <li><b><i class="fa fa-check green-text" aria-hidden="true"></i> Lorem ipsum dolor sit amet consectetur</b></li>
        <li><b><i class="fa fa-check green-text" aria-hidden="true"></i> Lorem ipsum dolor sit uat enim</b></li>
      </ul>
    </div>
  </div>
</div>


@include('frontend.layout.footer')

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
<script>
	$(document).ready(function(){
  $(".button-collapse").sideNav();
  $('.dropdown-button').dropdown('open');
   $('.dropdown-button').dropdown('close');
   $('input#input_text, textarea#textarea1').characterCounter();
});
</script>
<style>
	html{
	    font-family: 'Raleway', sans-serif;
	    font-weight: 400;
		}
</style>
</body>
</html>