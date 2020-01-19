<!doctype html>
<html lang="en">
    
    <head>
        <title>Logan's Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=3.0, minimum-scale=0.86">
        <meta charset="UTF-8" />
        <link href="homepage.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <header>
            <div class="header">
                
                    <h1>Welcome to Logan's Homepage</h1>
                <div class="menubar"> Menu </div> 
            </div>
        </header>


        <ul>
          <li><a href="assignments.html">Assignemtns</a></li>
          
          <li style="float:right"><a class="active" href="assign06.html">Home</a></li>
        </ul>

          <div class="flex-grid">
            <aside class="col sidebar">
              <h2>Did you ever hear the Tragedy of Darth Plagueis the Wise?</h2>
                <p> I thought not. It's not a story the Jedi would tell you. It's a Sith legend. Darth Plagueis was a Dark Lord of the Sith, so powerful and so wise he could use the Force to influence the midichlorians to create life... He had such a knowledge of the dark side that he could even keep the ones he cared about from dying. The dark side of the Force is a pathway to many abilities some consider to be unnatural. He became so powerful... the only thing he was afraid of was losing his power, which eventually, of course, he did. Unfortunately, he taught his apprentice everything he knew, then his apprentice killed him in his sleep. It's ironic he could save others from death, but not himself.
                </p>
               
            </aside>
            <section class="col main">
              <h2>When in Rome</h2>      
            <div class="column"></div>

             
            <div class="row">
                <div class="column2">  
                 <div>
                <center><img src="stadium.jpg" alt="Colosium" style="width:100%"></center>
            </div>
            </div>
            
            <div class="column2">
            
            <hr class="redline"/>


            <div class="column2">  
                <center>
                    <?php
echo "Today is " . date("Y/m/d") . "<br>";
?>
<?php
date_default_timezone_set("America/Idaho");
echo "The time is " . date("h:i:sa");
?>
                </center>
            </div>
          </div>
      </div>
            </section>
          </div>
        <footer>        
            <div>
                <p>Copyright L&L Industries. All rights reserved.</p>
            </div>                
        </footer>  
      </body>
</html>