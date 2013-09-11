<?php include('assets/includes/head.inc');?>

    <title>Brighton Comic Arts Festival About Page</title>
    <style>
        .about_video{
            width: 100%;
        }
        
        .topsection,.bottomsection{
            outline: none;
        }
    </style>
    
    <?php include('assets/includes/header.inc');?>
      
      <section class="maincontent">
              <section class="topsection">
                  <header class="sectionheader">
                      <h2><a href="#" title="Section post">First Post</a></h2>
                  </header>
                  <footer class="sectionfoot">
                      <p>This section written by Peter</p>
                  </footer>
                  <div class="sectioncontent">
                      <video class="about_video"controls preload="auto" poster="assets/media/img/logo-by-itself.gif">
                          <source src="assets/media/video/aboutvideo.mp4" type='video/mp4' />
                          <source src="assets/media/video/aboutvideo.webm" type='video/webm' />
                          <source src="assets/media/video/aboutvideo.ogg" type='video/ogg' />    
                      </video>
                      <p class="flash_alternative">
                          If you are unable to view video in your browser please click <a href="assets/media/video/aboutvideo.html" title="Flash Alternative">here.</a>
                      </p>
                  </div>
              </section>
              <section class="bottomsection">
                  <header class="sectionheader">
                      <h2><a href="#" title="Section post">Brighton Comic Arts Festival (BCAF)</a></h2>
                  </header>
                  <footer class="sectionfoot">
                      <p>This section written by Peter</p>
                  </footer>
                  <div class="sectioncontent">
                      <p>

The Brighton Comic Arts Festival (BCAF) is a new festival has been launched to celebrate the very best comic art from across the world, from cartoon strips to superhero comics and manga to non-fiction graphic novels. Whilst the love of the comic book art form is at its base, from its inception, the founders of the show set out to include not only the comic books they loved, but also other aspects of the popular arts that they enjoyed and felt deserved wider recognition,  including films and science fiction/fantasy literature.The inaugural  festival will run from 7-9 July 2014. The festival will be held at various venues throughout Brighton.                        
                      </p>
                      <hr>
                      <p>

The BCAF is set to be a three day event and is modelled on the European comic festivals rather than comic conventions that UK audiences are more familiar with. The aim is create an ‘en fete’ atmosphere, making the whole town part of the festival. There will be a much bigger emphasis on the range of talks, special live drawing events, workshops, films, exhibitions and a kids’ zone.  Some of the events, including the exhibitions and the kids’ zone will also be free.         
                      </p> 
                      <hr>
                      <p>
                         The festival will consist of several zones, wherein different events are held. The ‘main zone’ will house the major talks, panels, interviews, exhibitions, etc. of the festival. The ‘kids zone’ will feature those activities specifically geared towards those 12 and under. Both the main and kids zones will be housed in the Brighton City Centre. The ‘film zone’ will be where relevant films are screened and will take place at the Duke of York’s Picture House. Finally, the ‘artist zone’ is where the fans will be able to get up close and personal with the writers and artists of comic books in a more intimate setting, these events will be held at Dave’s Comics - the eventual goal is that such events will be expanded to include more comic book and general interest bookstores. 
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

