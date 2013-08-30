<?php include('assets/includes/head.inc');?>

    <title>Brighton Comic Arts Festival About Page</title>
    
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
                      <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dolor mi, porta non viverra eu, lacinia a dolor.                                   Curabitur vel molestie augue. Suspendisse ultricies velit odio, a hendrerit sapien interdum eu. Vestibulum at quam                               luctus, varius velit quis, suscipit purus. Nam interdum urna id purus ullamcorper porttitor. Suspendisse eros dui,                               dignissim ac libero ac, semper imperdiet tellus. Praesent dictum iaculis mi eget porta. Vivamus vulputate libero ac                              tincidunt tempor. Aenean placerat consectetur ullamcorper.                                                                                                                     
                      </p>    
                  </div>
              </section>
              <section class="bottomsection">
                  <header class="sectionheader">
                      <h2><a href="#" title="Section post">Second Post</a></h2>
                  </header>
                  <footer class="sectionfoot">
                      <p>This section written by Peter</p>
                  </footer>
                  <div class="sectioncontent">
                      <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dolor mi, porta non viverra eu, lacinia a dolor.                                   Curabitur vel molestie augue. Suspendisse ultricies velit odio, a hendrerit sapien interdum eu. Vestibulum at quam                               luctus, varius velit quis, suscipit purus. Nam interdum urna id purus ullamcorper porttitor. Suspendisse eros dui,                               dignissim ac libero ac, semper imperdiet tellus. Praesent dictum iaculis mi eget porta. Vivamus vulputate libero ac                              tincidunt tempor. Aenean placerat consectetur ullamcorper.                                                                                                                     
                      </p>    
                  </div>
              </section>
      </section>
      <section class="sidebar">
          <h1>Artist Profile</h1>
          <aside class="topsidebar">
              <section>
                  <h2>Stan Lee</h2>
                  <img src="assets/img/Stan_Lee.jpg" alt="Comics Writer Stan Lee" />
                  <p>tempor. Aenean placerat consectetur ullamcorper.</p>
              </section>
          </aside>
          <aside class="bottomsidebar">
              <section>
                  <h2>Geoff Johns</h2>
                  <img src="assets/img/Geoff_Johns.jpg" alt="Comics Writer Geoff Johns" />
                  <p>tempor. Aenean placerat consectetur ullamcorper.</p>
              </section>
          </aside>
      </section>
      
      
     <?php include('assets/includes/foot.inc');?> 
      

  </div>
      

      
    
       <!-- jQuery Library first -->
        <script src="assets/js/jquery/jquery-1.10.2.min.js"></script>
        <!-- jQuery plug-in helper files -->
        <script src="assets/js/plugins/jquery.cycle.all.js"></script>
        <script src="assets/js/plugins//jquery.easing.1.3.js"></script>
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

