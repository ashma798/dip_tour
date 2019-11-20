<!-- Start Widgets -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
                    <div class="row">
                        <!-- begin col-3 -->
                       <h3> CMS Privacy Policy
 
</h3>
<section class="contact-wrap"> <style type="text/css">//import font from google
@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900);

//import compass
@import "compass";

//colors
$primary-color   : #FF512F;
$secondary-color : #333;
$form-bg         : #fff;



//tablet and above devices
@media (min-width: 768px) { 
  .contact-wrap{
    width: 60%;
    margin: auto;
  }
}




//////////////////////////
  /*----page styles---*/
//////////////////////////
body{
  @include background-image(linear-gradient(to right, $primary-color, #DD2476));
  font-family: 'Roboto', sans-serif;
}
.contact-wrap{
  padding: 15px;
}

h3{
  background-color: white;
  color: lighten($primary-color, 10%);
  padding: 40px;
  margin: 0 0 50px;
  font-size: 30px;
  text-transform: uppercase;
  font-weight: 700;
  text-align: center;
  small{
    font-size: 18px;
    display: block;
    text-transform: none;
    font-weight: 300;
    margin-top: 10px;
    color: lighten($primary-color, 10%);
  }
}



</style>


  
</section>

<!-- follow me template -->

                   <section> <style type="text/css">.input,
.submit {
    display: inline-block;
    padding: 10px 15px;
    font-size: 20px;
    border-radius: 0;
    -webkit-appearance: none;
}

.input {
    border: 1px solid lightgray;
}

.submit {
    background-color: lightgreen;
    /**
     * If the input field has a border,
     * you need it here too to achieve equal heights.
     */
    border: 1px solid transparent;
}

/**
 * Firefox Fix
 * Without that the submit button will be too high.
 */
.submit::-moz-focus-inner { 
    border: 0;
}</style>          
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8"> <style type="text/css">.textarea {
  border: 1px solid #ccc;
  box-shadow: inset 0 1px 3px #ddd;
  border-radius: 2px;
  vertical-align: middle;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
  box-sizing: border-box;
  max-width: 100%;
  padding: 0.5em 0.6em;
  margin-bottom: 0.5em;
}.</style>
                       <form action="<?php echo base_url('/Dashboard/addPrivacyPolicy'); ?>" method="post">
                       <textarea class="summernote" rows="8" cols="100"  name="privacy_policy" placeholder="Edit diptour footer info....."><?php echo $privacy_policy;?>
</textarea>
    
</div>
                  <div class="col-md-2"></div>
                  </div>
               
                <br/> <br/>
                  

                  
                   
                 <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                      
                        <button class="submit" type="submit" value="Update" style=" margin-left: 200px;"> Update
    
    </button>
</form>
    
</div>
                  <div class="col-md-2"></div>
                  </div>
                 
                  </div> 

                   </section>
                   

                   
                    </div>
                   
                    <!-- End Widgets -->

                </div>
                <!-- /wrapper-content -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script> 
<script type="text/javascript">
  $('.summernote').summernote({
    placeholder: 'write here...',
    tabsize: 2,
    height: 150
});
</script>