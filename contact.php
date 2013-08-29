    <?php include('assets/includes/head.inc');?>

    <title>Brighton Comic Arts Festival</title>
    
    <?php include('assets/includes/header.inc');?>
      
      <section class="maincontent">
              
            <!-- Html form start -->
        <!-- Using 'get' method the info from form is sent in url (can be seen), with 'post' it is sent back to server
                in the http request (unseen) - both are NOT secure. Can use hash # in action so it remains on web page when
            you sumbit (for practice) or send to php Paul created so you can see a response when form submitted
           <form action="http://www.webdesignstudents.co.uk/students/response.php" method="get" id="contactForm"> - this sends it
            to the server Paul set up which gives a response using the info we provided int the form
        -->
        <form action="http://www.webdesignstudents.co.uk/students/response.php" method="get" id="contactForm">
            <fieldset>
                <legend>Personal Information</legend>
            <table class="contactTable">
                <!--Personal Information-->
                <tr>
                    <td>
                        <label for="cname">Name</label>
                    </td>
                    <td><!-- name was the older of identifying input name but now we use ids because we use jquery to 
                        validate it, id must be unique but name does not have to be. The names are the value that is actually
                        sent, the ids are used by Jquery to validate the form before it is submitted
                            The title appears from Jquery Validation if the user doesn't put in required info-->
                        <input type="text" name="cname" id="cname" value="" size="30" required placeholder="Please enter Name" title="Enter your name please" //>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="cemail">Email</label>
                    </td>
                    <td>
                        <input type="email" name="cemail" id="cemail" value="" size="30" required placeholder="Please enter Email" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="clocation">Location</label>
                    </td>
                    <td>
                        <select name="clocation" id="clocation">
                            <option value="" selected>Please Select</option>
                            <option value="Brighton">Brighton</option>
                            <option value="Hove">Hove</option>
                            <option value="London">London</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Gender:</label>
                    </td>
                    <td>
                        <label>Male<input type="radio" name="cgender" id="cgenderm" value="Male" checked /></label>
                        <label>Female<input type="radio" name="cgender" id="cgenderf" value="Male" /></label>
                    </td>
                </tr>
            </table>
            </fieldset>
                
            <fieldset>
                <legend>Enquiry</legend>
                <table>
                    <!--Gerneral Information-->
                <tr>
                    <td>
                        <label>Preferred Contact Method:</label> 
                    </td>
                    <td>
                        <label>Email<input type="checkbox" name="emailpref" id="prefe" value="Yes" checked/></label>
                        <label>Telephone<input type="checkbox" name="phonepref" id="preft" value="Yes" /></label>
                        <label>SMS/Mobile<input type="checkbox" name="mobilepref" id="prefm" value="Yes" /></label>         
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="comment">Comment</label>
                    </td>
                    <td>
                        <textarea name="comment" id="comment" cols="24" rows="8" required placeholder="Please enter Comments"></textarea>
                    </td>
                </tr>
                <!--this creates an ordered list that houses the error messages generated from jquery if the required 
                    info is not provided -->
                <tr>
                    <td colspan="2">
                        <div class="errors">
                            <ol></ol>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        &nbsp;
                    </td>
                    <td>
                        <input type="submit" name="submit" value="Send Form" />
                    </td>
                </tr>
                
                </table>
            </fieldset>
            
        </form>
        
        <!-- Html form end -->
          
          
      </section>
      
      
     <?php include('assets/includes/foot.inc');?> 
      

  </div>
      

      
    
       <!-- jQuery Library first -->
        <script src="assets/js/jquery/jquery-1.10.2.min.js"></script>
        <!-- jQuery plug-in helper files -->
        <script src="assets/js/plugins/jquery.cycle.all.js"></script>
        <script src="assets/js/plugins/jquery.easing.1.3.js"></script>
        <script src="assets/js/plugins/jquery.validate.min.js"></script>
        <!-- jQuery Activation Script -->
        <script>
            $(document).ready(function(){
                $('.slideshow p').cycle({
                    fx: 'shuffle',
                    timeout: 1000,
                    easing: 'easeInOutBack',
                    shuffle: {top:1, left: 350}
                    
                });
                
                $('li.dropmenu ul').hide();
                
                $('li.dropmenu').hover(
                    function()
                        {
                            $(this).find('ul').fadeIn();
                        },
                    function()
                        {
                            $('li.dropmenu ul').hide();
                        }); 
                        
                        $('#contactForm').validate({
                     rules:{
                         cname: "required",
                         
                        
                      
                            cemail:{
                             required: "#prefe:checked",
                             email: "#prefe:checked"
                             },
                 
                      
                
                     clocation: "required",
                     comment: "required",
                     },
                     
                     messages:{
                         cname:"I said, name please!",
                         cemail:{
                             required:"You must provide Email!",
                             email:"No, one that actually works"
                         }
                     },
                     errorContainer: ('#contactForm div.errors'),
                     errorLabelContainer: ('ol'),
                     wrapper: ('li')
                 });
            });
            
        </script>

  </body>
</html>
