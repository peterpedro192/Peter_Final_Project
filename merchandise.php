<?php include('assets/includes/head.inc');?>

    <title>Brighton Comic Arts Festival Merchandise Page</title>
    <style>
        
        p.event{
            text-align: center;
        }
        
        img.event_img{
            width: 18em;
            height: 18em;
        }
        
        @media only screen and (min-width: 48em){
            .topsection,.bottomsection{
                width: 50%;
            }
        }
    </style>
    
    <?php include('assets/includes/header.inc');?>
      
      <section class="maincontent">
              <section class="topsection">
                  <header class="sectionheader">
                      <h2><a href="merchandise_shirts.php" title="Section post">Shirts</a></h2>
                  </header>
                  <footer class="sectionfoot">
                      <p>This section written by Peter</p>
                  </footer>
                  <div class="sectioncontent">
                      <p class="event">
                         <a href="merchandise_shirts.php" title="BCAF Shirts">
                         <img class="event_img" src="assets/media/img/merchandise/shirts2.jpg" alt="BCAF Shirts" /></a>
                      </p>
                  </div>
              </section>
          
              <section class="bottomsection">
                  <header class="sectionheader">
                      <h2><a href="merchandise_mugs.php" title="Section post">Mugs</a></h2>
                  </header>
                  <footer class="sectionfoot">
                      <p>This section written by Peter</p>
                  </footer>
                  <div class="sectioncontent">
                      <p class="event">
                         <a href="merchandise_mugs.php" title="BCAF Mugs">
                         <img class="event_img" src="assets/media/img/merchandise/Camping_Mug.jpg" alt="Silver BCAF Mug" /></a>
                      </p>
                  </div>
              </section>
      </section>
      
     <?php include('assets/includes/foot.inc');?> 
      

  </div>
      

      
    
       <!-- jQuery Library first -->
        <script src="assets/js/jquery/jquery-1.10.2.min.js"></script>
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

