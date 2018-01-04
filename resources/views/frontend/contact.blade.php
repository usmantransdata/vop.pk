<!DOCTYPE html>
<html>

  @include('frontend.layout.header')
<!--END OF NAVBAR-->
<section>
  <img src="{{ asset('/') }}public/frontend/images/about.jpg" style="width: 100%; height: 350px;"> 
  <!-- filter: blur(3px); -->
  <h2 class="white-text" style="background-color:#00000099;opacity: 0.8; position: absolute; top:180px; left: 0; width:100%; text-align: center;"><strong>Get</strong><strong class="green-text"> In Touch</strong></h2>
</section>
<br><br>
<div class="container">
	<div class="row center">
		<div class="col m12">
			<h5>Leave us a message. We will contact you within one business day.</h5>
		</div>
	</div>
	<div class="row" style="height: 600px;">
		<div class="col m5">
			<div class="row">
              <div class="input-field col s12">
                <input id="icon_prefix" type="text" class="validate">
                <label for="icon_prefix">Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="icon_prefix" type="text" class="validate">
                <label for="icon_prefix">Email Address</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="icon_prefix" type="text" class="validate" data-length="20">
                <label for="icon_prefix">Subject</label>
              </div>
            </div>
            <div class="row">
	          <div class="input-field col s12">
	            <textarea id="textarea1" class="materialize-textarea" data-length="120"></textarea>
	            <label for="textarea1">Message</label>
	          </div>
        	</div>
		</div>
		<div class="col m6">
			<div class="col m12">
				<br><br>
				<img class="materialboxed" width="400" src="{{ asset('/') }}public/frontend/images/meeting.jpg"
				data-caption="Voice Of Pakistan"
				style="border: 2px solid #fafafa;">
			</div>
			<div class="col m12">
				<h5><strong>Lorem Ipsum is simply dummy text</strong></h5>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
			</div>
		</div>
	</div>
</div>

<!--FOOTER-->
  @include('frontend.layout.footer')
<style>
	html{
	    font-family: 'Raleway', sans-serif;
	    font-weight: 400;
		}
</style>
</body>
</html>