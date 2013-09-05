<?php include('assets/includes/head.inc');?>

    <title>Brighton Comic Arts Festival Events By Zone Page</title>
    <link href="assets/css/slimbox2/slimbox2.css" rel='stylesheet' />
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
                      <h2><a href="events_zone.php" title="Section post">Events by Zone</a></h2>
                  </header>
                  <footer class="sectionfoot">
                      <p>This section written by Peter</p>
                  </footer>
                  <div class="sectioncontent">
                      <div class="event">
                         <nav class="event_nav">
                              <ul>
                                  <li><a id="main_zone" href="#">Main Zone</a></li>
                                  <li><a id="artist_zone" href="#">Artist Zone</a></li>
                                  <li><a id="film_zone" href="#">Film Zone</a></li>
                                  <li><a id="kids_zone" href="#">Kids Zone</a></li>
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
                              <div class="hidden" id="mainzone_thumb">
                                 <a href="assets/media/img/events/main_zone1.jpg" rel="lightbox-group-mainzone" title="Main Zone - Panel Discussion on 
                                    'The Future of Comics' - July 7(Friday), 1pm">
                                 <img class="event_img" src="assets/media/img/events/thumbs/main_zone1_sml.jpg" alt="Panel Discussion on 
                                    The Future of Comics" /></a>
                                 <a href="assets/media/img/events/main_zone2.jpg" rel="lightbox-group-mainzone" title="Main Zone - Panel Discussion on 
                                    'Entering the Comics Industry' - July 9(Sunday), 4pm">
                                 <img class="event_img" src="assets/media/img/events/thumbs/main_zone2_sml.jpg" alt="Panel Discussion on 
                                    'Entering the Comics Industry'" /></a>
                              </div>
                              <div class="hidden" id="artistzone_thumb">
                                 <a href="assets/media/img/events/artist_zone2.jpg" rel="lightbox-group-artistzone" title="Artist Zone - Meet Aimee Mann,                                         Creator of 'BumbleBee' - July 8(Saturday), 2pm">
                                 <img class="event_img" src="assets/media/img/events/thumbs/artist_zone2_sml.jpg" alt="Aimee Mann,                                                                Creator of 'BumbleBee'" /></a>
                                 <a href="assets/media/img/events/artist_zone1.jpg" rel="lightbox-group-artistzone" title="Artist Zone - Meet James Gowan,                                         Creator of 'Oxymoron' - July 9(Sunday), 1pm">
                                 <img class="event_img" src="assets/media/img/events/thumbs/artist_zone1_sml.jpg" alt="James Gowan,                                                                Creator of 'Oxymoron'" /></a>
                              </div>
                              <div class="hidden" id="filmzone_thumb">
                                 <a href="assets/media/img/events/film_zone1.jpg" rel="lightbox-group-filmzone" title="Film Zone - Screening of 'Elektora' -                                      July 7(Friday), 6pm">
                                 <img class="event_img" src="assets/media/img/events/thumbs/film_zone1_sml.jpg" alt="Still of film 'Elektora'" /></a>
                                 <a href="assets/media/img/events/film_zone2.jpg" rel="lightbox-group-filmzone" title="Film Zone - Screening of 'Bombay Cycle'                                      - July 8(Saturday), 8pm">
                                 <img class="event_img" src="assets/media/img/events/thumbs/film_zone2_sml.jpg" alt="Still of film 'Bombay Cycle'" /></a>
                              </div>
                              <div class="hidden" id="kidszone_thumb">
                                 <a href="assets/media/img/events/kids_zone3.jpg" rel="lightbox-group-kidszone" title="Kids Zone - Face Painting Competition                                      - July 8(Saturday), 1pm">
                                 <img class="event_img" src="assets/media/img/events/thumbs/kids_zone3_sml.jpg" alt="Face Painting Competition" /></a>
                                 <a href="assets/media/img/events/kids_zone1.jpg" rel="lightbox-group-kidszone" title="Kids Zone - Under 8 Drawing Competition                                      - July 8(Saturday), 3pm">
                                 <img class="event_img" src="assets/media/img/events/thumbs/kids_zone1_sml.jpg" alt="Under 8 Drawing Competition" /></a>
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
                        
                //Gallery - for use with Slimbox2 Plug In        
                  $('.event_gallery div.hidden').hide(); 
                  $('#mainzone_thumb').show();
                  $('#main_zone').click(function(){                       
                          $('.event_gallery div.hidden').hide();
                          $('#mainzone_thumb').show();
                      });
                  $('#artist_zone').click(function(){                       
                      $('.event_gallery div.hidden').hide();
                      $('#artistzone_thumb').show();
                      });
                  $('#film_zone').click(function(){                       
                      $('.event_gallery div.hidden').hide();
                      $('#filmzone_thumb').show();
                      });
                  $('#kids_zone').click(function(){                       
                      $('.event_gallery div.hidden').hide();
                      $('#kidszone_thumb').show();
                      });
        });
            
        </script>

  </body>
</html>



