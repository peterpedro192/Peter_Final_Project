<!DOCTYPE html>
<html lang="en">
    
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brighton Comic Arts Festival</title>
    <link rel="stylesheet" href="assets/css/core.css" type="text/css" />
    <script src="assets/js/modernizr.min.js"></script>
  </head>
  
  
  <body>
  <div id="wrapper">
      <header class="mainheader">
          
          <img src="assets/img/logo-by-itself.gif" alt="Brighton Comic Arts Festival Logo" />
          
              <div class="slideshow">
                <p>

                    <img src="assets/img/Comic_Signing.jpg" alt="Comic Signing Event" />
                    <img src="assets/img/Comic_Signing2.jpg" alt="Comic Signing Event2" />
                    <img src="assets/img/Comic_Signing3.jpg" alt="Comic Signing Event3" />
                    <img src="assets/img/Convention_Interior.jpg" alt="Convention Centre" />
                </p>
            </div>
          
          <nav class="topnav">
              <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Events</a>
                      <ul class="hidden">
                          <li><a href="#">By Day</a></li>
                          <li><a href="#">By Zone</a></li>
                      </ul>
                  </li>
                  <li><a href="#">Merchandise</a>
                       <ul class="hidden">
                          <li><a href="#">Shirts</a></li>
                          <li><a href="#">Mugs</a></li>
                          <li><a href="#">Hats</a>  </li>  
                      </ul>
                  </li>
                  <li id="lastnav"><a href="#">Contact Us</a></li>
              </ul>
          </nav>
      </header>
      
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
          <h1>Artist Profiles</h1>
          <aside class="topsidebar">
              <section>
                  <h2>Top Sidebar</h2>
                  <p>tempor. Aenean placerat consectetur ullamcorper.</p>
              </section>
          </aside>
          <aside class="bottomsidebar">
              <section>
                  <h2>Bottom Sidebar</h2>
                  <p>tempor. Aenean placerat consectetur ullamcorper.</p>
              </section>
          </aside>
      </section>
      
      
      <footer class="mainfooter">
          <p>Copyright &copy; <a href="#" title="Peter Clarke Designs">PeterClarkeDesigns.com</a></p>
      </footer>
      

  </div>
      

      
    
       <!-- jQuery Library first -->
        <script src="assets/js/jquery/jquery-1.10.2.min.js"></script>
        <!-- jQuery plug-in helper files -->
        <script src="assets/js/plugins/jquery.cycle.all.js"></script>
        <script src="assets/js/plugins//jquery.easing.1.3.js"></script>
        <!-- jQuery Activation Script, the $ in front of something indicates we are using Jquery NOT Javascript -->
        <script>
            //short hand version is $(function() - so when document is ready perform a function
            //similar to onload
            $(document).ready(function(){
                $('.slideshow p').cycle({
                    fx: 'shuffle',
                    timeout: 1000,
                    easing: 'easeInOutBack',
                    shuffle: {top:1, left: 350}
                    
                });
                
                $('ul.hidden').hide(); 
                
                $('li a').hover(function(){
                    $(this).next().stop().fadeToggle(3000);
                });
                
            })
            
        </script>

  </body>
</html>
