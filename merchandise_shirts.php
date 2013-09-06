<?php include('assets/includes/head.inc');?>

    <title>Brighton Comic Arts Festival Events By Day Page</title>
    <link rel="stylesheet" href="assets/css/ui-lightness/jquery-ui-1.10.3.custom.min.css" />
    
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
            width: 15em;
            height: 15em;
            padding: 0.5em;
        }
        
        ul.modal_description{
            background-color: #F00;
           
        }
        
        .modal_content{
                text-align: center;
        }
        
         ul.modal_description li{
            margin: 1em 0;
            background-color: #FFF;
        }
        
         img.modal_img{
            width: 20em;
            height: 20em;

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
                      <h2><a href="merchandise_shirts.php" title="BCAF Shirts">BCAF SHIRTS</a></h2>
                  </header>
                  <footer class="sectionfoot">
                      <p>This section written by Peter</p>
                  </footer>
                  <div class="sectioncontent">
                         <div class="shirts_gallery">
                             <p>White BCAF shirt</p>
                             <img class="event_img" src="assets/media/img/merchandise/shirts2.jpg" alt="White BCAF shirt" />
                                 <div id="dialog" title="White BCAF shirt">
                                     <div class="modal_content">
                                        <img class="modal_img" src="assets/media/img/merchandise/shirts2.jpg" alt="White BCAF shirt" />
                                     
                                        <ul class="modal_description">
                                            <li>Sizes: Large, Medium, Small</li>
                                            <li>100% Cotton</li>
                                            <li>Machine Washable</li>
                                        </ul>
                                    </div>
                                </div>                             
                             <button id="opener">Details</button>
                             <button>Add To Cart</button>
                             <p>Grey BCAF shirt</p>
                             <img class="event_img" src="assets/media/img/merchandise/shirts4.jpg" alt="Grey BCAF shirt" /></a>                             
                             <button>Details</button>
                             <button>Add To Cart</button>
                             <p>Black BCAF shirt</p>
                             <img class="event_img" src="assets/media/img/merchandise/shirts5.jpg" alt="Black BCAF shirt" /></a>                             
                             <button>Details</button>
                            <button>Add To Cart</button>
                        </div>
                  </div>
              </section>
          
              <section class="bottomsection">
                  <header class="sectionheader">
                      <h2><a href="events_zone.php" title="Section post">BCAF SHIRTS</a></h2>
                  </header>
                  <footer class="sectionfoot">
                      <p>This section written by Peter</p>
                  </footer>
               <div class="sectioncontent">
                         <div class="shirts_gallery">
                              <p>White BCAF shirt</p>
                             <img class="event_img" src="assets/media/img/merchandise/shirts2.jpg" alt="White BCAF shirt" />                            
                             <button>Details</button>
                             <button>Add To Cart</button>
                             <p>Grey BCAF shirt</p>
                             <img class="event_img" src="assets/media/img/merchandise/shirts4.jpg" alt="Grey BCAF shirt" /></a>
                             <button>Details</button>
                             <button>Add To Cart</button>
                             <p>Black BCAF shirt</p>
                             <img class="event_img" src="assets/media/img/merchandise/shirts5.jpg" alt="Black BCAF shirt" /></a>
                            <button>Details</button>
                            <button>Add To Cart</button>
                        </div>
                  </div>
              </section>
      </section>
      
     <?php include('assets/includes/foot.inc');?> 
      

  </div>
      

      
    
       <!-- jQuery Library first -->
        <script src="assets/js/jquery/jquery-1.10.2.min.js"></script>
        <script src="assets/js/jquery/jquery-ui-1.10.3.custom.min.js"></script>
        <!-- jQuery plug-in helper files -->
        <script src="assets/js/plugins/jquery.cycle.all.js"></script>
        <script src="assets/js/plugins/jquery.easing.1.3.js"></script>
        <script src="assets/js/plugins/slimbox2.js"></script>
        <!-- jQuery Activation Script -->
        <script>
            //Cycle Slideshow Plug In
            $(document).ready(function(){
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
                        
                //Modal
                   $( "#dialog" ).dialog({
                  autoOpen: false,
                  show: {
                    effect: "blind",
                    duration: 1000
                  },
                  hide: {
                    effect: "explode",
                    duration: 1000
                  }
                });

                $( "#opener").click(function() {
                  $( "#dialog").dialog("open");
                });
                
                
               $( "#dialog" ).dialog({ minWidth: 500 });
                        
        });
            
        </script>

  </body>
</html>



