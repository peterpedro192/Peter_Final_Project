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
          <h1>Brighton Comic Arts Festival (BCAF) Privacy and Data Handling</h1>
              <p>This privacy policy sets out how BCAF uses and protects any information that you give BCAF when you use this website.</p>
              <p>BCAF is committed to ensuring that your privacy is protected. Should we ask you to provide certain information by which you can be identified when using this website, then you can be assured that it will only be used in accordance with this privacy statement.</p>
              <p>BCAF may change this policy from time to time by updating this page. You should check this page from time to time to ensure that you are happy with any changes. This policy is effective from September 2013.</p>
          <h1>What we collect</h1>
              <p>We may collect the following information:</p>
              <ul>
                  <li>- name and gender</li>
                  <li>- contact information including email address and mobile number</li>
                  <li>- demographic information such as postcode, preferences and interests</li>
                  <li>- other information relevant to customer surveys and/or offers</li>
              </ul>
                 <h1>What we do with the information we gather</h1>
              <p>We require this information to understand your needs and provide you with a better service, and in particular for the following reasons:</p>
              <ul>
                  <li>- Internal record keeping.</li>
                  <li>- We may use the information to improve our products and services.</li>
                  <li>- We may periodically send promotional emails about new products, special offers or other information which we think you may find interesting using the email address which you have provided.</li>
                  <li>- From time to time, we may also use your information to contact you for market research purposes. We may contact you by email, phone or text. We may use the information to customise the website according to your interests.</li>
              </ul>
          <h1>Security</h1>
              <p>We are committed to ensuring that your information is secure. In order to prevent unauthorised access or disclosure, we have put in place suitable physical, electronic and managerial procedures to safeguard and secure the information we collect online.</p>
          <h1>How we use cookies</h1>
              <p>A cookie is a small file which asks permission to be placed on your computer's hard drive. Once you agree, the file is added and the cookie helps analyse web traffic or lets you know when you visit a particular site. Cookies allow web applications to respond to you as an individual. The web application can tailor its operations to your needs, likes and dislikes by gathering and remembering information about your preferences</p>
              <p>We use traffic log cookies to identify which pages are being used. This helps us analyse data about web page traffic and improve our website in order to tailor it to customer needs. We only use this information for statistical analysis purposes and then the data is removed from the system.</p>
              <p>Overall, cookies help us provide you with a better website, by enabling us to monitor which pages you find useful and which you do not. A cookie in no way gives us access to your computer or any information about you, other than the data you choose to share with us.</p>
              <p>You can choose to accept or decline cookies. Most web browsers automatically accept cookies, but you can usually modify your browser setting to decline cookies if you prefer. This may prevent you from taking full advantage of the website.</p>
          <h1>Links to other websites</h1>
              <p>Our website may contain links to other websites of interest. However, once you have used these links to leave our site, you should note that we do not have any control over that other website. Therefore, we cannot be responsible for the protection and privacy of any information which you provide whilst visiting such sites and such sites are not governed by this privacy statement. You should exercise caution and look at the privacy statement applicable to the website in question.</p>
          <h1>Controlling your personal information</h1>
              <p>You may choose to restrict the collection or use of your personal information in the following ways:</p>
              <ul>
                  <li>- whenever you are asked to fill in a form on the website, look for the box that you can click to indicate that you do not want the information to be used by anybody for direct marketing purposes</li>
                  <li>- if you have previously agreed to us using your personal information for direct marketing purposes, you may change your mind at any time by writing to or emailing us at info@bcaf.co.uk</li>
              </ul>
              <p>We will not sell, distribute or lease your personal information to third parties unless we have your permission or are required by law to do so. We may use your personal information to send you promotional information about third parties which we think you may find interesting if you tell us that you wish this to happen.</p>
              <p>You may request details of personal information which we hold about you under the Data Protection Act 1998. A small fee will be payable. If you would like a copy of the information held on you please write to BCAF, 20 Brighton Road, Brighton, BN1 4AA</p>
              <p>If you believe that any information we are holding on you is incorrect or incomplete, please write to or email us as soon as possible, at the above address. We will promptly correct any information found to be incorrect.</p>
                
              
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
