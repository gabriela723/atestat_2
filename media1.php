<html>
    <head>
        <title>Cămara Apusenilor</title>
        <link href="cssuri.css" rel="stylesheet" type="text/css">
        
<script type="text/javascript" src="highslide/highslide-with-gallery.js"></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />

<!--
	2) Optionally override the settings defined at the top
	of the highslide.js file. The parameter hs.graphicsDir is important!
-->

<script type="text/javascript">
hs.graphicsDir = 'highslide/graphics/';
hs.align = 'center';
hs.transitions = ['expand', 'crossfade'];
hs.outlineType = 'glossy-dark';
hs.wrapperClassName = 'dark';
hs.fadeInOut = true;
//hs.dimmingOpacity = 0.75;

// Add the controlbar
if (hs.addSlideshow) hs.addSlideshow({
	//slideshowGroup: 'group1',
	interval: 5000,
	repeat: false,
	useControls: true,
	fixedControls: 'fit',
	overlayOptions: {
		opacity: .6,
		position: 'bottom center',
		hideOnMouseOut: true
	}
});

</script>
    </head>
    <body>
        <div id="tot">
            
            <div id="antet">
                <div id="sigla">
                </div>
                
                <div id="login">
                    <a href="sign.php">Sign in</a>
    
                  <p><a href="inregistrarea.php">Inregistreaza-te</a></p>  
                </div>
                <p id="titlu"> Cămara Apusenilor aka Zestrea Joajii</p>
            </div>
            <div id="navbar">
                <?php
                    include("meniul.php");
                ?>
            </div>
            <div id="main">
               <div id="stanga">
                   <center>
                    <h1>
                        <p>Bunătăți cu fructe</p>  
                        <p>din Apuseni</p>
                          <img src="logo-final.jpg" width="100px" height="100px" >
                       
                    </h1>
                       </center>
                </div>
                <div id="dreapta">
                    <div class="highslide-gallery">
    <a href="images/afine.jpg" class="highslide" onclick="return hs.expand(this)">
        <img src="images/afine1.jpg" alt="Highslide JS"
		              title="Da click pentru a mari" />
                </a>

                </div>
    
<div class="highslide-caption">
	
</div>

<a href="images/coacaze.jpg" class="highslide" onclick="return hs.expand(this)">
	<img src="images/coacaze1.jpg" alt="Highslide JS"
		title="Click to enlarge" /></a>


            </div>
            <div id="subsol">
            </div>
        </div>
    </body>
</html>