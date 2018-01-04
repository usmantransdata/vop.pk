<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8"s/>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     
  <link type="text/css" rel="stylesheet" href="{{ asset('/') }}public/dist/css/materialize.css"  media="screen,projection"/>

        <link rel="stylesheet" href="{{ asset('/') }}public/dist/css/main.css">

      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    

      <link rel="stylesheet" href="https://www.ipetitions.com/assets/v3/css/style.css?dashboard" media="all">

      <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700" rel="stylesheet">
</head>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>



<!--NAVBAR NAVBAR NAVBAR -->
<nav class="navbar-fixed green lighten-2" >

        <div class="nav-wrapper">
         <div></div>
          <a href="/vop/index.php/frontend" class="brand-logo center" >
            <strong class="white-text">Voice</strong><strong> Of Pakistan</strong></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="" class="black-text">Blog</a></li>
            <li><a href="page-petition.html" class="black-text">Petition</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button black-text" href="#!" data-activates="dropdown1">Setting</a></li>
          </ul>
           @if (Auth::check()) 
             @if (auth()->user()->isAdmin())
          <ul class="left hide-on-med-and-down">
            <li><a href="/vop/index.php/backend" class="red-text"> <b>Dashboard</b></a> </li>
          </ul>
           @endif
           @endif
          <ul class="side-nav" id="mobile-demo">
            <li><a href="">Browse</a></li>
            <li><a href="">Profile</a></li>
            <li><a href="">Browse</a></li>
            <li><a href="">Profile</a></li>
          </ul>
          <ul id="dropdown1" class="dropdown-content green lighten-2">
            @if (Auth::check()) 
           

             <li style="margin-top: 10px" class="#f44336 red "><a href="{{route('frontend-logout')}}" class="black-text">Logout</a></li>
             <li class="user-header">
               <a href="{{route('pet')}}">Dashboard</a> 
             </li>
               <li class="user-header">
               <a href="{{route('frontend-profile')}}">profile</a> 
             </li>
            <li class="divider"></li>
             <li class="user-header">
                      <center>{{ Auth::user()-> name }}</center>
                      </p>
             </li>
              <li class="divider"></li>
           
          @else
            <li><a href="{{route('frontend-login')}}" class="black-text">Login</a></li>
            <li><a href="{{route('frontend-signup')}}" class="black-text">Sign up</a></li>
            @endif
          </ul>
      </div>
  </nav>
<!--END OF NAVBAR-->

<div class="wrapper">
      
<h1 class="pagetitle">{{$petition->title}}</h1>
<a href="{{route('petition.show', $petition->id)}}" class="viewpet" target="blank">View Petition</a>
<a href="{{route('pet')}}" class="viewback">Back to Dashboard</a>

<div id="peteditnav">
  <ul id="my-tab-menu">
    <li >
  
      <a id="signatures" href="{{route('petition.edit', $petition->id)}}">Signatures</a></li>
    <li class="active"><a id="edit" style="background: #fff" href="{{route('petEdit', $petition->id)}}">Edit Petition</a></li>
    <li class="petition-share-tab"><a href="#" id="tab-share-for-success">Share for Success!</a></li>
    </ul>
   
</div>

    

<div class="content shares_page" id="my-content" style="display: none">
    <div class="description open">
        <div class="shares-wrapper">
           
            <div class="petition-preview">
                <div class="petitions-headliner clearfix">
                        <div class="preview-title">Preview</div>
                </div>
                <div class="previews-slider">
                    <div class="img-wrapper" style="background-image: url(https://cdn.ipetitions.com/user-images/petitions/dont-give-up/158451587a17e64e29d55032a475fdb5.png);" data-image-id="0" data-image-url="https://www.ipetitions.com/assets/https://cdn.ipetitions.com/user-images/petitions/dont-give-up/158451587a17e64e29d55032a475fdb5.png" data-name="dont-give-up"></div>
                    
                </div>
                <div class="petition-content">
                    <div class="content-title">{{$petition->title}}</div>
                    
                </div>
            </div>
            <div class="share-buttons-block">

                <div class="petition-template-6-social-shares">
                    <div class="narrow-wrapper clearfix subheader-wrapper petition-subheader-block">
                        <div class="share-wrapper">
                            <div class="addthis_inline_share_toolbox edit-petition-share-for-success" data-url="https://www.ipetitions.com/petition/dont-give-up" data-title="don't give up" style="clear: both;">
                                <a class="addthis_button_facebook share_fb_btn" title="Facebook" href="#">
                                    <i class="fa fa-facebook">
                                    </i>
                                    share on facebook
                                </a>
                                <a class="custom_button_email email-dd share_email_modal" data-url="/petition/dont-give-up">
                                    By E-mail
                                </a>
                                <a class="addthis_button_twitter twitter-share at300b" title="Twitter" href="#">
                                  <span class="at-icon-wrapper" style="background-color: rgb(29, 161, 242); line-height: 16px; height: 16px; width: 16px;">
                                   
                                      <title id="at-svg-twitter-1">Twitter</title><g>
                                      </g></svg></span>
                                    Twitter
                                </a>
                           </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- <script type="text/javascript">

    var addthis_share = addthis_share || {}
    addthis_share = {
        url: "https://www.ipetitions.com/petition/dont-give-up",
        title: "don't give up",
        passthrough : {
            twitter: {
                url: "https://www.ipetitions.com/petition/dont-give-up",
                text: "Join me in supporting this important cause at iPetitions. don't give up"
            }
        }
    };

    var addthis_config = addthis_config||{};
    addthis_config.ui_email_note = "I really believe in this cause and hope you'll join me in supporting it. https://www.ipetitions.com/petition/dont-give-up";
    addthis_config.ui_email_from = 'hectorfzi@hotmail.com';

    var dataLayer = window.dataLayer || [];
    dataLayer.push({
        'page_type':'share-for-success',
        'petition_name': "dont-give-up",
        'petition_id': 777001,
        'petition_creator_referrer': "",
        'petition_creator_landing_url': "",
        'petition_title': "don't give up"
    });

    function update_share_image() {
        var current_image = $(".slick-active").attr("data-image-id");
        var data_image_url = $(".slick-active").attr("data-image-url");
        var current_petition = $(".slick-active").attr("data-name");

        addthis.update("share", "url", 'https://'+ location.hostname +'/petition/' + current_petition + '/?i=' +current_image+ '');
        if(data_image_url) {
            addthis.update('share', 'media', data_image_url);
        } // will set the image if you are sharing

    }


    $(document).ready(function() {

        var before_tab_id = 0;
        var before_tab_name = null;
        var before_class = null;

        $("ul#my-tab-menu li").each(function(a,b) {
            if($(this).attr("class") == "active") {
                before_tab_name = $(this).children("a").html();
                before_tab_id = a;
                before_class = $("div#my-content:last").attr("class");
            }
        });

        $("#tab-share-for-success").on("click", function() {
            try {
                var classes = [];
                classes = before_class.split(" ");

            } catch(err) {
                console.log('err:', err);
            }

            $(".shares_page").show();
            $("."+classes[1]).hide();
            $("ul#my-tab-menu li:eq("+before_tab_id+")").removeClass("active");
            $('.previews-slider').slick({ });
            update_share_image();

             $('.previews-slider').on('afterChange', function(event, slick, currentSlide){
                 update_share_image();
                 //&utm_medium=social&utm_source=facebook&utm_campaign=share
            });

        });

        try {
            $("ul#my-tab-menu li a").on("click", function() {

                var click_tab_name = $(this).html();
                var classes = before_class.split(" ");

                if(click_tab_name === before_tab_name) {
                    $(".shares_page").hide();
                    $("."+classes[1]).show();
                    return false;
                }
            })
        } catch (err) {
            console.log('error:', err);
        }

    })

</script> -->


<div class="content edit-petition" id="my-content">
  <div class="description open">
  <h1>Edit Petition</h1>


  <div class="form">
  <form id="questionnaires-form" action="{{route('p.update', $petition->id)}}" method="POST">
 {{ csrf_field() }}
    <div class="row">
    <label for="Questionnaires_title" class="required">Title <span class="required">*</span></label>    
    <input maxlength="150" name="title" id="Questionnaires_title" type="text" value="{{$petition->title}}"> 
    </div><!-- row -->
    <div class="row">
    <label for="Questionnaires_body" class="required">Petition text <span class="required">*</span></label>      
      <div class="textarea_loading loaded">
    
        <div class="redactor-editor" contenteditable="true" dir="ltr">
          <textarea class="wysiwyg" name="message" id="Questionnaires_body" dir="ltr" >{{$petition->message}}</textarea>
        </div>
       </div>    
            </div>
    <div class="errorMessage" id="Questionnaires_body_em_" style="display:none"></div>  
      </div><!-- row -->
    <div class="row">
    <label for="Questionnaires_description">Description</label>  
     <textarea name="description" id="Questionnaires_description" value="{{$petition->description}}"></textarea>   
      <p class="helper">1 or 2 sentences that summarize your petition</p>
    <div class="errorMessage" id="Questionnaires_description_em_" style="display:none"></div> 
      </div><!-- row -->
    <div class="row">
    <label for="Questionnaires_sigs_target">Signature Target</label>  

     <input maxlength="10" class="numeric" name="signature_target" id="signature_target" type="text" value="{{$petition->signature_target}}">  
      <div class="errorMessage" id="Questionnaires_sigs_target_em_" style="display:block"></div>   </div><!-- row -->

  <!--   <div class="row">

       <a class='dropdown-button btn white' href='#' data-activates='dropdown2'>Category</a>

  <ul id='dropdown2' class='dropdown-content'>
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
    <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
    <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
  </ul>
   <p class="helper">choosing a category can draw more traffic to your petition</p>
      <div class="errorMessage" id="Questionnaires_category_id_em_" style="display:none"></div>  
       </div> -->
      
       <div class="row petimage">
          <label for="file_upload">Featured Image</label>
          <div id="file_upload">
            


       <input id="petition_name" type="hidden" name="petition_name" value="ok-i-am-posting-this-petuition">
       <input id="petition_image" type="hidden" name="petition_image" value="8064192074bfcb91b121184fad37b8a4.png">
       <div id="image_verify" style="height: auto; display: ; text-align:center">
           <img alt="" id="test" src="{{asset('/')}}storage/app/{{$petition->avatar}}" style="height:300px;width: 600px" alt="loading">
  </div>

     
       <div id="upload_drop_image" style="display: block">

           <input type="file" onchange="readURL(this);" id="fileBrowser" name="avatar" accept="image/*">
           <div id="dragandrophandler">
               <div>Drop image here</div>
              
           </div>

           <div class="upload_image_error"></div>

           <small class="desc">The image should be at least 500px wide and 300px high and a maximum size of 10MB.</small>


       </div>

          </div>
          </div>





  <!--   <div class="row">
    <label for="Questionnaires_country">Country</label> .
      <select name="Questionnaires[country]" id="Questionnaires_country">
<option value="" selected="selected">Worldwide</option>
<option value="27">United States</option>
<option value="15">United Kingdom</option>
<option value="33">Canada</option>
<option value="2">Australia</option>
<option value="31">Germany</option>
<option value="98">Afghanistan</option>
<option value="227">Aland Islands</option>
<option value="105">Albania</option>
<option value="150">Algeria</option>
<option value="216">American Samoa</option>
<option value="219">Andorra</option>
<option value="129">Angola</option>
<option value="225">Anguilla</option>
<option value="245">Anonymous Proxy</option>
<option value="237">Antarctica</option>
<option value="212">Antigua and Barbuda</option>
<option value="91">Argentina</option>
<option value="68">Armenia</option>
<option value="223">Aruba</option>
<option value="87">Asia/Pacific Region</option>
<option value="246">Australia</option>
<option value="1">Austria</option>
<option value="47">Azerbaijan</option>
<option value="89">Bahamas</option>
<option value="119">Bahrain</option>
<option value="93">Bangladesh</option>
<option value="203">Barbados</option>
<option value="70">Belarus</option>
<option value="32">Belgium</option>
<option value="113">Belize</option>
<option value="138">Benin</option>
<option value="35">Bermuda</option>
<option value="233">Bhutan</option>
<option value="80">Bolivia</option>
<option value="182">Bonaire</option>
<option value="62">Bosnia and Herzegovina</option>
<option value="140">Botswana</option>
<option value="208">Bouvet Island</option>
<option value="88">Brazil</option>
<option value="243">British Indian Ocean Territory</option>
<option value="196">Brunei Darussalam</option>
<option value="53">Bulgaria</option>
<option value="154">Burkina Faso</option>
<option value="159">Burundi</option>
<option value="95">Cambodia</option>
<option value="133">Cameroon</option>
<option value="247">Canada</option>
<option value="141">Cape Verde</option>
<option value="202">Cayman Islands</option>
<option value="157">Central African Republic</option>
<option value="139">Chad</option>
<option value="114">Chile</option>
<option value="3">China</option>
<option value="190">Colombia</option>
<option value="164">Comoros</option>
<option value="143">Congo</option>
<option value="152">Congo</option>
<option value="211">Cook Islands</option>
<option value="209">Costa Rica</option>
<option value="131">Cote D'Ivoire</option>
<option value="61">Croatia</option>
<option value="235">Cuba</option>
<option value="112">Curacao</option>
<option value="38">Cyprus</option>
<option value="39">Czech Republic</option>
<option value="26">Denmark</option>
<option value="163">Djibouti</option>
<option value="92">Dominica</option>
<option value="76">Dominican Republic</option>
<option value="116">Ecuador</option>
<option value="120">Egypt</option>
<option value="193">El Salvador</option>
<option value="160">Equatorial Guinea</option>
<option value="240">Eritrea</option>
<option value="57">Estonia</option>
<option value="239">Ethiopia</option>
<option value="14">Europe</option>
<option value="179">Falkland Islands (Malvinas)</option>
<option value="184">Faroe Islands</option>
<option value="100">Fiji</option>
<option value="52">Finland</option>
<option value="13">France</option>
<option value="187">French Guiana</option>
<option value="232">French Polynesia</option>
<option value="136">Gabon</option>
<option value="146">Gambia</option>
<option value="46">Georgia</option>
<option value="248">Germany</option>
<option value="124">Ghana</option>
<option value="71">Gibraltar</option>
<option value="24">Greece</option>
<option value="167">Greenland</option>
<option value="206">Grenada</option>
<option value="185">Guadeloupe</option>
<option value="188">Guam</option>
<option value="191">Guatemala</option>
<option value="168">Guernsey</option>
<option value="151">Guinea</option>
<option value="170">Guinea-Bissau</option>
<option value="222">Guyana</option>
<option value="198">Haiti</option>
<option value="172">Heard Island and McDonald Islands</option>
<option value="169">Holy See (Vatican City State)</option>
<option value="204">Honduras</option>
<option value="9">Hong Kong</option>
<option value="45">Hungary</option>
<option value="104">Iceland</option>
<option value="6">India</option>
<option value="83">Indonesia</option>
<option value="29">Iran</option>
<option value="41">Iraq</option>
<option value="66">Ireland</option>
<option value="108">Isle of Man</option>
<option value="18">Israel</option>
<option value="16">Italy</option>
<option value="199">Jamaica</option>
<option value="4">Japan</option>
<option value="59">Jersey</option>
<option value="64">Jordan</option>
<option value="22">Kazakhstan</option>
<option value="123">Kenya</option>
<option value="242">Kiribati</option>
<option value="8">Korea</option>
<option value="178">Korea</option>
<option value="249">Kosovo</option>
<option value="110">Kuwait</option>
<option value="65">Kyrgyzstan</option>
<option value="230">Lao People's Democratic Republic</option>
<option value="63">Latvia</option>
<option value="44">Lebanon</option>
<option value="147">Lesotho</option>
<option value="122">Liberia</option>
<option value="67">Libya</option>
<option value="58">Liechtenstein</option>
<option value="49">Lithuania</option>
<option value="72">Luxembourg</option>
<option value="96">Macau</option>
<option value="56">Macedonia</option>
<option value="128">Madagascar</option>
<option value="134">Malawi</option>
<option value="7">Malaysia</option>
<option value="97">Maldives</option>
<option value="137">Mali</option>
<option value="74">Malta</option>
<option value="210">Marshall Islands</option>
<option value="186">Martinique</option>
<option value="162">Mauritania</option>
<option value="148">Mauritius</option>
<option value="228">Mayotte</option>
<option value="34">Mexico</option>
<option value="200">Micronesia</option>
<option value="55">Moldova</option>
<option value="194">Monaco</option>
<option value="101">Mongolia</option>
<option value="111">Montenegro</option>
<option value="226">Montserrat</option>
<option value="149">Morocco</option>
<option value="145">Mozambique</option>
<option value="195">Myanmar</option>
<option value="130">Namibia</option>
<option value="234">Nauru</option>
<option value="84">Nepal</option>
<option value="36">Netherlands</option>
<option value="99">New Caledonia</option>
<option value="81">New Zealand</option>
<option value="205">Nicaragua</option>
<option value="156">Niger</option>
<option value="125">Nigeria</option>
<option value="189">Niue</option>
<option value="244">Norfolk Island</option>
<option value="180">Northern Mariana Islands</option>
<option value="30">Norway</option>
<option value="50">Oman</option>
<option value="86">Pakistan</option>
<option value="171">Palau</option>
<option value="48">Palestinian Territory</option>
<option value="214">Panama</option>
<option value="85">Papua New Guinea</option>
<option value="220">Paraguay</option>
<option value="192">Peru</option>
<option value="11">Philippines</option>
<option value="60">Poland</option>
<option value="23">Portugal</option>
<option value="79">Puerto Rico</option>
<option value="103">Qatar</option>
<option value="165">Reunion</option>
<option value="43">Romania</option>
<option value="20">Russian Federation</option>
<option value="142">Rwanda</option>
<option value="176">Saint Barthelemy</option>
<option value="238">Saint Helena</option>
<option value="217">Saint Kitts and Nevis</option>
<option value="90">Saint Lucia</option>
<option value="173">Saint Martin</option>
<option value="175">Saint Pierre and Miquelon</option>
<option value="174">Saint Vincent and the Grenadines</option>
<option value="215">Samoa</option>
<option value="109">San Marino</option>
<option value="177">Sao Tome and Principe</option>
<option value="135">Satellite Provider</option>
<option value="25">Saudi Arabia</option>
<option value="161">Senegal</option>
<option value="51">Serbia</option>
<option value="75">Seychelles</option>
<option value="106">Sierra Leone</option>
<option value="82">Singapore</option>
<option value="250">Sint Maarten (Dutch part)</option>
<option value="73">Slovakia</option>
<option value="54">Slovenia</option>
<option value="231">Solomon Islands</option>
<option value="155">Somalia</option>
<option value="117">South Africa</option>
<option value="251">South Sudan</option>
<option value="28">Spain</option>
<option value="197">Sri Lanka</option>
<option value="132">Sudan</option>
<option value="221">Suriname</option>
<option value="153">Swaziland</option>
<option value="21">Sweden</option>
<option value="40">Switzerland</option>
<option value="37">Syrian Arab Republic</option>
<option value="10">Taiwan</option>
<option value="118">Tajikistan</option>
<option value="126">Tanzania</option>
<option value="5">Thailand</option>
<option value="181">Timor-Leste</option>
<option value="158">Togo</option>
<option value="94">Tokelau</option>
<option value="236">Tonga</option>
<option value="207">Trinidad and Tobago</option>
<option value="166">Tunisia</option>
<option value="42">Turkey</option>
<option value="229">Turkmenistan</option>
<option value="201">Turks and Caicos Islands</option>
<option value="241">Tuvalu</option>
<option value="144">Uganda</option>
<option value="19">Ukraine</option>
<option value="17">United Arab Emirates</option>
<option value="252">United Kingdom</option>
<option value="253">United States</option>
<option value="218">United States Minor Outlying Islands</option>
<option value="213">Uruguay</option>
<option value="107">Uzbekistan</option>
<option value="224">Vanuatu</option>
<option value="115">Venezuela</option>
<option value="12">Vietnam</option>
<option value="183">Virgin Islands UK</option>
<option value="78">Virgin Islands US</option>
<option value="102">Wallis and Futuna</option>
<option value="69">Yemen</option>
<option value="127">Zambia</option>
<option value="121">Zimbabwe</option>
</select> 
   </div> -->

   <!-- row -->
    <div class="row savebtn">
      <input id="js-save-petition-delayed-image" type="submit" name="yt0" value="Save Petition">    
          </div>

        </form>
  </div><!-- form -->
  </div>
</div>    </div>
<!--PARALAX SECTION-->
<br>


<!--FOOTER-->
<!-- footer -->
  <footer class="page-footer green lighten-2">
          <div class="container">
            <div class="row">
              <div class="col s12 m6 l3">
                <h5><a href="header-test.html" class="black-text"><strong>Voice</strong> of <strong>Pakistan</strong></h5></a><br>
                <ul>
                  <li style="cursor:pointer"><a href="#"></a><h6>About Us</h6></li>
                  <li style="cursor:pointer"><a href="#"></a><h6>Career</h6></li>
                  <li style="cursor:pointer"><a href="#"></a><h6>History</h6></li>
                  <li style="cursor:pointer"><a href="#"></a><h6>Team</h6></li>
                </ul>
              </div>
              <div class="col s12 m6 l6">
               <h4>Recent News</h4>
                <p class="text-lighten-4">Every day, people like you make real change on issues they care about.Create a powerful online petition in just a few minutes. No technical knowledge is needed to start your online petition <strong>Voice</strong> of <strong>Pakistan</strong><br>the most flexible online activism tools on the Internet.</p>
              </div>
              <div class="col s12 m6 l3">
                <p class="text-lighten-4">Stay Connected</p>
                <a class="waves-effect #3b5999 waves-light btn-floating social google" style="background-color: #dd4b39">
                <i class="fa fa-google"></i></a>
                <a class="waves-effect waves-light btn-floating social twitter" style="background-color: #55acee">
                <i class="fa fa-twitter"></i></a>
                <a class="waves-effect waves-light btn-floating social facebook" style="background-color: #3b5999">
                <i class="fa fa-facebook"></i></a>
                <a class="waves-effect waves-light btn-floating social instagram" style="background-color: #bc2a8d">
                <i class="fa fa-instagram"></i></a>
                <br>
                <div class="input-field inline">
                  <input id="email" type="email" class="validate" style="border-bottom:1px solid">
                  <label for="email" data-error="wrong" data-success="right" class="black-text">Email</label>
                  <button class="btn-flat waves-effect waves-light black white-text">Subscribe</button>
                </div>
              </div>

            </div>
          </div>
          <div class="footer-copyright black">
            <div class="container">
            © Copyright 2017 <strong>Voice</strong> of <strong>Pakistan</strong> - All Rights Reserved
            <div class="right">Email: VOP@transdata.biz</div>
            </div>
          </div>
        </footer>
      </h5>
    </div>
  </div>
<!--END OF FOOTER-->
<style>
  @import url("https://fonts.googleapis.com/icon?family=Material+Icons");
@import url("https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css");

$bg-color: white;
$bg-font-color: black;
$hamburger-color: black;
$subheader: white;

/*nav {
  background-color: $bg-color;
}*/

nav .brand-logo {
  color: $bg-font-color;
}
html {
    font-family: 'Raleway', sans-serif;
    font-weight: 400;
  }
nav ul a {
  color: $bg-font-color;
}

.parallax-container h5 {
  color: $subheader;
}

.button-collapse {
  color: $hamburger-color;
}

h2 i {
  font-size: inherit!important;
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
</style>
<!-- js here -->
<script type="text/javascript">
   function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
        $('#test').attr('src', e.target.result);
       }
        reader.readAsDataURL(input.files[0]);
       }
    }
</script>

<script>
  $(document).ready(function(){
      $('.parallax').parallax();
  $(".button-collapse").sideNav();
  $('.dropdown-button').dropdown('open');
   $('.dropdown-button').dropdown('close');
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
</body>
</html>