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
                      <h2><a href="merchandise_mugs.php" title="BCAF Mugs">MUGS</a></h2>
                  </header>
                  <footer class="sectionfoot">
                      <p>This section written by Peter</p>
                  </footer>
                  <div class="sectioncontent">
                         <div class="mugs_gallery">
                             <p>Stainless Steel BCAF Mug</p>
                             <img class="event_img" src="assets/media/img/merchandise/Camping_Mug.jpg" alt="Stainless Steel BCAF Mug" />
                                 <div id="dialog" title="Stainless Steel BCAF Mug">
                                     <div class="modal_content">
                                        <img class="modal_img" src="assets/media/img/merchandise/Camping_Mug.jpg" alt="Stainless Steel BCAF Mug" />
                                     
                                        <ul class="modal_description">
                                            <li>Food-grade stainless steel</li>
                                            <li>200ml capacity</li>
                                            <li>Dishwasher Safe</li>
                                            <li>Price: £10</li>
                                        </ul>
                                    </div>
                                </div>                             
                             <button id="opener">Details</button>
                             <button id="shop_cart" onclick="alert('Shopping Cart Functionality To Be Added At Later Date')">Add To Cart</button>
                        </div>
                  </div>
              </section>
          
              <section class="bottomsection">
                  <header class="sectionheader">
                      <h2><a href="merchandise_mugs.php" title="BCAF Mugs">MUGS</a></h2>
                  </header>
                  <footer class="sectionfoot">
                      <p>This section written by Peter</p>
                  </footer>
               <div class="sectioncontent">
                         <div class="mugs_gallery">
                             <p>White Stoneware BCAF Mug</p>
                             <img class="event_img" src="assets/media/img/merchandise/white_mug.jpg" alt="White Stoneware BCAF Mug" /></a>
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
                        
                //Modal for more details on merchandise
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
               $( "#dialog" ).dialog({ minWidth: 400 });
                           
        });
            
        </script>

  </body>
</html>



