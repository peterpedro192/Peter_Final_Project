<?php include('assets/includes/head.inc');?>

    <title>Brighton Comic Arts Festival Events Page</title>
    <style>
        
        p.event{
            text-align: center;
        }
        
        img.event_img{
            width: 20em;
            height: 15em;
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
                      <h2><a href="events_day.php" title="Section post">Events by Day</a></h2>
                  </header>
                  <footer class="sectionfoot">
                      <p>This section written by Peter</p>
                  </footer>
                  <div class="sectioncontent">
                      <p class="event">
                         <a href="events_day.php" title="Events by Day Photo">
                         <img class="event_img" src="assets/media/img/events/main_zone3.jpg" alt="Events by Day Photo" /></a>
                      </p>
                  </div>
              </section>
          
              <section class="bottomsection">
                  <header class="sectionheader">
                      <h2><a href="events_zone.php" title="Section post">Events by Zone</a></h2>
                  </header>
                  <footer class="sectionfoot">
                      <p>This section written by Peter</p>
                  </footer>
                  <div class="sectioncontent">
                      <p class="event">
                         <a href="events_zone.php" title="Events by Zone Photo">
                         <img class="event_img" src="assets/media/img/events/kids_zone3.jpg" alt="Events by Zone Photo" /></a>
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
            });
            
        </script>

  </body>
</html>

