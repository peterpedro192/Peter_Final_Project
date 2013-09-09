    <?php include('assets/includes/head.inc');?>

    <title>Brighton Comic Arts Festival Home Page</title>
    <link rel="stylesheet" href="assets/css/ui-lightness/jquery-ui-1.10.3.custom.min.css" />
    <style>
        .maincontent ul{
            padding-left: 2em;
        }
    </style>
    
    <?php include('assets/includes/header.inc');?>
      
      <section class="maincontent">
          <h1>Brighton Comic Arts Festival (BCAF) Terms and Conditions</h1>
              <p>Welcome to our website. If you continue to browse and use this website, you are agreeing to comply with and be bound by the following terms and conditions of use, which together with our privacy policy govern Bon Ami’s relationship with you in relation to this website. If you disagree with any part of these terms and conditions, please do not use our website.</p>  
              <p>The term 'Brighton Comic Arts Festival' or ‘BCAF’ or ‘us’ or ‘we’ refers to the owner of the website whose registered office is BCAF, 20 Brighton Road, Brighton, BN1 4AA. Our company registration number is currently not available. The term ‘you’ refers to the user or viewer of our website.</p>
              <p>The use of this website is subject to the following terms of use:</p>
              <ul>
                  <li>- The content of the pages of this website is for your general information and use only. It is subject to change without notice.</li>
                  <li>- This website uses cookies to monitor browsing preferences. If you do allow cookies to be used, the following personal information may be stored by us for use by third parties: name, area, email address and mobile number.</li>
                  <li>- Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law.</li>
                  <li>- Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements.</li>
                  <li>- This website contains material which is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions.</li>
                  <li>- All trademarks reproduced in this website, which are not the property of, or licensed to the operator, are acknowledged on the website.</li>
                  <li>- Unauthorised use of this website may give rise to a claim for damages and/or be a criminal offence.</li>
                  <li>- From time to time, this website may also include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s).</li>
                  <li>- Your use of this website and any dispute arising out of such use of the website is subject to the laws of England, Northern Ireland, Scotland and Wales.</li>
              </ul>
         <h1>BCAF Returns and Refunds Policy</h1>
              <p>When you purchase goods from us you are legally entitled to expect certain things. Under the Sale of Goods Act:</p>
              <ul>
                  <li>- Our goods must match the description we give you - in writing, as an illustration or in speech.</li>
                  <li>- Our goods must be 'fit for their purpose'. But this requirement also means that you should tell us when you want an item for a particular purpose, we will then advise you if we have doubts about its suitability.</li>
                  <li>- Our goods must be of 'satisfactory quality' - they must be durable, safe and free from minor, as well as major defects for their age and condition.</li>
              </ul>
              <p>If goods don't meet these criteria, purchasers can claim a refund if they haven't already 'accepted' them. Customers accept goods if they tell you they have accepted them, alter the goods or keep them for a reasonable length of time. They can't, however, reject goods simply because they've changed their mind.</p>
                  
      </section>
      
      
     <?php include('assets/includes/foot.inc');?> 
      

  </div>
      

      
    
       <!-- jQuery Library first -->
        <script src="assets/js/jquery/jquery-1.10.2.min.js"></script>
        <script src="assets/js/jquery/jquery-ui-1.10.3.custom.min.js"></script>
        <!-- jQuery plug-in helper files -->
        <script src="assets/js/plugins/jquery.cycle.all.js"></script>
        <script src="assets/js/plugins/jquery.easing.1.3.js"></script>
        <!-- jQuery Activation Script -->
        <script>
            $(document).ready(function(){
                //Cycle Slideshow Plug In
                $('.slideshow p').cycle({
                    fx: 'shuffle',
                    timeout: 1000,
                    easing: 'easeInOutBack',
                    shuffle: {top:1, left: 350}
                    
                });
               
               //Dropdown Menu
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
                        
                        
                 
            });
            
        </script>

  </body>
</html>

