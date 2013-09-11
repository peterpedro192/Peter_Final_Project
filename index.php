    <?php include('assets/includes/head.inc');?>

    <title>Brighton Comic Arts Festival Home Page</title>
    <link rel="stylesheet" href="assets/css/ui-lightness/jquery-ui-1.10.3.custom.min.css" />
    
    <style>
        @media only screen and (min-width: 48em){
            .maincontent{
                width: 70%;
                margin-right: 2em

            }

            .topsection,.bottomsection{
                width: 40%;
                display: table-cell;
                padding: 1em 5%;
                outline: solid 1px #666;
            }

            /*Styling for sidebar*/

        .sidebar{
            width: 21%;
            float: left;
            background-color: #000;
            padding: 5% 2%;
            margin: 1em 0 5em 0;
            display: block;

        }


        .borderradius .sidebar{
            -moz-border-radius: 1em;
            -webkit-border-radius: 1em;
            -o-border-radius: 1em;
            -ms-border-radius: 1em;
            border-radius: 1em;
            outline: none;
        }



        .topsidebar,.bottomsidebar{
            margin-bottom: 2%;
            background-color: #CCC;
            text-align: center;
        }

        .topsidebar h2,.bottomsidebar h2{
            background: #FFF;
            font-weight: bold;
            font-size: 1.25em;
            text-align: center;
            margin: 1em 0 1em 0;
        }
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
                      <p>
                        For many (myself included) comic books bring us back to a simpler time, where good was good and bad was evil. Where a guy in a bright blue and red suit fighting crime could be seen as a hero rather than a joke. For many adults the comic book rebuffs the idea that you can’t go back again, you start flipping through the pages and you’re a kid again. That sense of nostalgia may help fuel the success of the comic book industry but the notion that comics are just for kids has long since been disproven.                                                                                                                    
                      </p>
                      <p>
                          The idea of what constitutes a comic book has expanded beyond all recognition. The genres of comic books span the same as any other form of written work. There are comics that focus on normal people facing everyday problems, there are superhero comics, there are dark dystopian dramas set in the superhero world, there are comics set in the realm of magical realism, and on and on.
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
                         The influence of comics on popular culture is not quantifiable. One only need to look at the movie industry box office to see the massive impact of the comic book industry: The Avengers, Thor, Batman, Superman, the list goes on. These symbols have not merely endured, they have thrived in the modern world. As the world around us becomes ever more complicated these symbols of good seem to gain more relevance over time.
                                                                                                                     
                      </p>
                      <p>
                          As the scope of the comic book industry has grown so too has the range of its creators. The comic book industry now attracts some of the finest artists, both graphic artists and writers, in the world. Writers such as Terry Pratchett (Discworld), Alan Moore (From Hell, V for Vendetta, Watchmen) and Neil Gaiman (The Sandman, Stardust, Coraline, American Gods) are considered some of the finest writers, not just comic book writers, but writers, in the world. And all of these writers are British. So what better time to introduce a comic arts festival to one of the U.K.’s most artistic cities: Brighton?
                      </p>
                  </div>
              </section>
      </section>
      <section class="sidebar">
          <h1>Artist Profile</h1>
          <aside class="topsidebar">
              <section>
                  <h2>Stan Lee</h2>
                  <img src="assets/media/img/Stan_Lee.jpg" alt="Comics Writer Stan Lee" />
                  <p>Legendary creator of such icons as Spiderman, Thor and the X-Men!</p>
              </section>
          </aside>
          <aside class="bottomsidebar">
              <section>
                  <h2>Geoff Johns</h2>
                  <img src="assets/media/img/Geoff_Johns.jpg" alt="Comics Writer Geoff Johns" />
                  <p>Celebrated writer of Justice League of America and Batman!</p>
              </section>
          </aside>
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
                        
                        
                //Accoridan Effect on Sections for mobile version
             
                 if($(this).width()<500){
                     $('.sectioncontent:not(:first)').hide();
                     $('.sectionheader h2 a').mouseover(function(){
                         $('.sectioncontent').slideUp('slow');
                         $(this).parent().parent().next().next().slideDown('slow');


                     });
                 }
                 
            });
            
        </script>

  </body>
</html>
