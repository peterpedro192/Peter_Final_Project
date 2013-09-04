<?php include('assets/includes/head.inc');?>

    <title>Brighton Comic Arts Festival Events Page</title>
    <style>
        
        .event_nav li{
            margin: 1em;
            list-style-type: none;
        }
        
        .event_nav li a{
            display: block;
            background-color: #F03;
            color: #FFF;
            text-decoration: none;
            padding: 0.75em 0;
            outline: solid 1px #000;
        }
        
        .event_nav a:hover{
            background: #666;
            text-decoration: underline;
            font-weight: bold;
        }
        .event{
            text-align: center;
        }
        
        img.event_img{
            width: 12em;
            height: 9em;
            padding: 0.5em;
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
                      <div class="event">
                         <nav class="event_nav">
                              <ul>
                                  <li><a id="friday" href="#">Friday</a></li>
                                  <li><a id="saturday" href="#">Saturday</a></li>
                                  <li><a id="sunday" href="#">Sunday</a></li>
                              </ul>
                        </nav>
                         
                      </div>
                  </div>
              </section>
          
              <section class="bottomsection">
                  <header class="sectionheader">
                      <h2><a href="events_zone.php" title="Section post">Click Thumbnail For Description</a></h2>
                  </header>
                  <footer class="sectionfoot">
                      <p>This section written by Peter</p>
                  </footer>
                  <div class="sectioncontent">
                      <div class="event">
                          <div class="event_gallery">
                              <div class="hidden" id="friday_thumb">
                                 <a href="assets/media/img/events/film_zone1.jpg" rel="lightbox-group" title="Film Zone - Showing of Elektora">
                                 <img class="event_img" src="assets/media/img/events/thumbs/film_zone1_sml.jpg" alt="Events by Day Photo" /></a>
                                 <a href="assets/media/img/events/kids_zone2.jpg" rel="lightbox-group" title="Film Zone - Showing of Elektora">
                                 <img class="event_img" src="assets/media/img/events/thumbs/kids_zone2_sml.jpg" alt="Events by Day Photo" /></a>
                              </div>
                              <div class="hidden" id="saturday_thumb">
                                 <a href="assets/media/img/events/film_zone2.jpg" rel="lightbox-group" title="Film Zone - Showing of Elektora">
                                 <img class="event_img" src="assets/media/img/events/thumbs/film_zone2_sml.jpg" alt="Events by Day Photo" /></a>
                                 <a href="assets/media/img/events/kids_zone1.jpg" rel="lightbox-group" title="Film Zone - Showing of Elektora">
                                 <img class="event_img" src="assets/media/img/events/thumbs/kids_zone1_sml.jpg" alt="Events by Day Photo" /></a>
                              </div>
                              <div class="hidden" id="sunday_thumb">
                                 <a href="assets/media/img/events/kids_zone4.jpg" rel="lightbox-group" title="Film Zone - Showing of Elektora">
                                 <img class="event_img" src="assets/media/img/events/thumbs/kids_zone4_sml.jpg" alt="Events by Day Photo" /></a>
                                 <a href="assets/media/img/events/artist_zone1.jpg" rel="lightbox-group" title="Film Zone - Showing of Elektora">
                                 <img class="event_img" src="assets/media/img/events/thumbs/artist_zone1_sml.jpg" alt="Events by Day Photo" /></a>
                              </div>
                          </div>
                      </div>
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
        <script src="assets/js/plugins/slimbox2.js"></script>
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
                        
                        
                  $('.event_gallery div.hidden').hide(); 
                  $('#friday_thumb').show();
                  $('#friday').click(function(){                       
                          $('.event_gallery div.hidden').hide();
                          $('#friday_thumb').show();
                      });
                  $('#saturday').click(function(){                       
                      $('.event_gallery div.hidden').hide();
                      $('#saturday_thumb').show();
                      });
                  $('#sunday').click(function(){                       
                      $('.event_gallery div.hidden').hide();
                      $('#sunday_thumb').show();
                      });
        });
            
        </script>

  </body>
</html>


