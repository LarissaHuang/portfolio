<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Larissa Huang - Portfolio </title>

	<?php include('header-scripts-and-styles.php'); ?>
	<link rel="stylesheet" type="text/css" href="css/tag-heuer-interactive.css">
</head>
<body class="page--tag-heuer">

	<?php include('header.php'); ?>


    <section class="hero">
        <div class="tag-inner" data-aos="slide-right">
            <img src="img/tag-banner.jpg" class="banner/">
        </div>
    </section>
    
    <div class="container">
        <div class="row padding">
            <div class="col-md-12">
                <h1 class="text-center">TAG HEUER</h1>
                <p class="tools">Illustrator, CSS, JavaScript, JQuery</p>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row padding">
            <h2>Interactive Illustration</h2>
            <div class="desc">
                <p class="button-desc"> *Please note I am not affilitated with the brand nor do I own any designs. Use the arrow buttons to explore the watch layers. </p>
            </div>          
        </div>
    </div><?php //.container ?>
    
    <div class="container container--watch">

        <div id="watch">
    
            <div class="buttons">
                <button id="prev"><i class="fas fa-arrow-left"></i></button>
                <button id="next"><i class="fas fa-arrow-right"></i></button>
            </div>
        
            <div class="watch-layer watch-0 watch--wrist-band active start">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <img src="tag-interactive/Tag_Heuer_wristband.png">
                    </div>
                    <div class="col-md-6 col-sm-12 watch--info">
                    
                    </div>
                </div>
            </div>
                    

            <div class="watch-layer watch-1 watch--background active start">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <img src="tag-interactive/Tag_Heuer_Background+Rim.png"/>
                    </div>
                    <div class="col-md-6 col-sm-12 watch--info">

                        <h3>Face</h3>

                        <p>What appears to be stripes on the watch face is an anthracite Côtes de Genève pattern, which is produced by placing each component under a lathe machine in a parallel motion. <br> <span class="bold">I drew the face in Illustrator using the Pathfinder Shapes tool. </span></p>

                        <h3>Bezel</h3>

                        <p>The bezel is the outer ring of the case that connects to the lugs. It may be a different metal than the case itself, as in some two-tone watches.<br> <span class="bold"> I created the bezel by combining several concentric circles and applying a linear gradient with alternating colour swatches on the largest plane of the bezel.</span></p>

                    </div>
                </div>
            </div>
                    

            <div class="watch-layer watch-2 watch--speed-back">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <img src="tag-interactive/Tag_Heuer_Speed_Back.png">
                    </div>
                    <div class="col-md-6 col-sm-12 watch--info">
                        <h3>Chronographs</h3>

                        <p>A chronograph makes it possible to measure continuous or discontinuous intervals of time. Typically a chronograph records from a fraction of a second, up to 12-24 hours. 
                        <span class="bold"> I created the chronographs by drawing multiple concentric circles within each other, using Illustrator's percentage-based duplication tool to maintain consistent size ratios.<span></p>
                    </div>
                </div>
            </div>
                    

            <div class="watch-layer watch-3 watch--tourbillon-back">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <img src="tag-interactive/Tag_Heuer_Tourbillon_Backing.png"/>
                    </div>
                    <div class="col-md-6 col-sm-12 watch--info">
                        <h3>Tourbillon Carriage</h3>

                        <p>Tourbillon, French for “whirlwind”, was developed in 1795 and was patented in 1801. Because gravity has an effect on parts of the watch movements, the tourbillon was designed to eliminate positional error.
                        <span class="bold"> I created the tourbillon carriage by drawing concentric circles, and applying Effect > Stylize > Inner Glow to simulate depth and projection.</span></p>
                    </div>
                </div>
            </div>                  
                    

            <div class="watch-layer watch-4 watch--gears">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <img src="tag-interactive/Tag_Heuer_Gears.png"/>
                    </div>
                    <div class="col-md-6 col-sm-12 watch--info">
                        <h3>Balance Wheel & Escapement</h3>

                        <p>The balance wheel is a weighted wheel that provides the pendulum force which advances the gear train a set amount and moves the hands forward. The escapement transfers energy to the tourbillon and replaces energy lost to friction during its cycle. 
                        <span class="bold">  I created these elements using the Rotate, Pathfinder > Minus Front, Pathfinder > Unite, Transform > Reflect, and Gradient tools. </span></p>
                    </div>
                </div>
            </div>    


            <div class="watch-layer watch-5 watch--tourbillons">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <img src="tag-interactive/Tag_Heuer_Tourbillons.png">
                    </div>
                    <div class="col-md-6 col-sm-12 watch--info">
                        <h3>Tourbillons</h3>

                        <p>This watch features two tourbillons: one to regulate the time, and one to regulate the chronograph. Originally invented to improve accuracy, tourbillons are still included in some  modern designs as an homage to horological virtuosity.
                        <span class="bold"> I created the tourbillons using the Shape, Pathfinder, and Gradient tools. </span></p>
                    </div>
                </div>
            </div>                            
                    

            <div class="watch-layer watch-6 watch--screws">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <img src="tag-interactive/Tag_Heuer_Screws.png">
                    </div>
                    <div class="col-md-6 col-sm-12 watch--info">
                        <h3>Jewels</h3>

                        <p>While stunning, jewels serve to reduce friction in the gear trains. This reduces the wear on parts, thus increasing the longevity of the watch itself.
                        <span class="bold">I created the jewels by sampling the colour from a photograph of the Mikrotourbillons, and using the Shape, Alignment, and Stylize > Drop Shadow tools.</p>
                    </div>
                </div>
            </div>  
                    
        
            <div class="watch-layer watch-7 watch--brand-increments">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <img src="tag-interactive/Tag_Heuer_brand+increments.png"/>
                    </div>
                    <div class="col-md-6 col-sm-12 watch--info">
                        <h3>Dials</h3>

                        <p>Dials are often the most expressive component of a watch's design, and often involve many stages of finetuning.
                        <span class="bold">  I created the dials with the Text and Rotation Tools. </span></p>
                    </div>
                </div>
            </div>    
                                
                    
            <div class="watch-layer watch-8 watch--hands">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <img src="tag-interactive/Tag_Heuer_Hands.png"/>
                    </div>
                    <div class="col-md-6 col-sm-12 watch--info">
                    
                    <h3> The Complete Mikrotourbillons </h3>

                    <p>The complete Mikrotourbillons is a gorgeous timepiece. The movement is what makes it special. The Mikrotourbillons uses two tourbillons- one to regulate the time, and one to regulate the Chronograph.
                    The escapement for the watch vibrates at a conventional 28,000 vibrations per hour and regulation for the watch is provided by a tourbillon which rotates once every minute.
                    <span class="bold">I created the watch hands using the Rotate, Pathfinder, and Gradient tools. All components included, illustration of this watch took 36 hours. Thank you for taking the time to appreciate my project.</span></p>
                    </div>
                </div>
            </div>

        </div>
    </div><?php //.container ?>
        
    <div class="container">
        <div class="work-buttons">
            <a href="nomnomsox.php" class="btn btn-outline-secondary" id="previous-btn"> <i class="fas fa-arrow-left"> </i>  Previous: NomNomSox </a>
            <a href="hive.php" class="btn btn-outline-secondary" id="next-btn">  Next: Hive <i class="fas fa-arrow-right"> </i> </a>
        </div>
    </div><?php // .container ?>
	<?php include('footer.php'); ?>
</body>
</html>