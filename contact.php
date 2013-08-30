    <?php include('assets/includes/head.inc');?>

    <title>Brighton Comic Arts Festival Contact Page</title>
    
    <?php include('assets/includes/header.inc');?>
      
      <section class="maincontent">
              
    
        <form action="http://www.webdesignstudents.co.uk/students/response.php" method="get" class="contact_form" id="contactForm">
            <fieldset class="contact">
                <legend class="legend_heading">Personal Information</legend>
                <br>
            <table>
                <!--Personal Information-->
                <tr class="tablerow">
                    <td>
                        <label for="cname">Name:</label>
                    </td>
                    <td>
                        <input type="text" name="cname" id="cname" value="" size="30" required placeholder="Please enter Name" title="Enter your name please" />
                    </td>
                </tr>
                <tr class="tablerow">
                    <td>
                        <label for="cemail">Email:</label>
                    </td>
                    <td>
                        <input type="email" name="cemail" id="cemail" value="" size="30" required placeholder="Please enter Email" title="Enter your email address please" />
                    </td>
                </tr>
                <tr class="tablerow">
                    <td>
                        <label for="clocation">Location:</label>
                    </td>
                    <td>
                        <select name="clocation" id="clocation" title="Select your location please">
                            <option value="" selected>Please Select</option>
                            <option value="Brighton">Brighton</option>
                            <option value="Hove">Hove</option>
                            <option value="London">Other</option>
                        </select>
                    </td>
                </tr>
                <tr class="tablerow">
                    <td>
                        <label>Gender:</label>
                    </td>
                    <td>
                        <label>Male<input type="radio" name="cgender" id="cgenderm" value="Male" checked title="Select your gender please" /></label>
                        <label>Female<input type="radio" name="cgender" id="cgenderf" value="Male" /></label>
                    </td>
                </tr>
            </table>
            </fieldset>
                
            <fieldset class="contact">
                <legend class="legend_heading">Enquiry</legend>
                <br>
                <table>
                    <!--Gerneral Information-->
                <tr class="tablerow">
                    <td>
                        <label>Preferred Contact Method:</label> 
                    </td>
                    <td>
                        <label>Email<input type="checkbox" name="emailpref" id="prefe" value="Yes" checked title="Select your preferred method of contact please" /></label>
                        <label>Call<input type="checkbox" name="phonepref" id="preft" value="Yes" /></label>
                        <label>Text<input type="checkbox" name="textpref" id="prefm" value="Yes" /></label>         
                    </td>
                </tr>
                <tr class="tablerow">
                    <td id="comment_label">
                        <label for="comment">Comment:</label>
                    </td>
                    <td id="comment_box">
                        <textarea name="comment" id="comment" cols="25" rows="12" required placeholder="Please enter Comments" title="Enter your comment please"></textarea>
                    </td>
                </tr>
                
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
                        <input class="submit_button" type="submit" name="submit" value="Send Form" title="Submit form please"/>
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
                         cname:"Enter you name please",
                         cemail:{
                             required:"Enter your email address please",
                             email:"Must be a valid email e.g. test@gmail.com"
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
