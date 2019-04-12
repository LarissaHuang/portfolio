<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Larissa Huang - Portfolio </title>

    <?php include('header-scripts-and-styles.php'); ?>

</head>

<body>

    <?php include('header.php'); ?>



    <?php  ?>
    <!-- Intro -->
    <div class="contain">
        <div class="row row-2">
            <div class=" col-sm-6 wrap-logo" style="display:flex; flex-direction:column; justify-content:space-between;">

                <h1 style="display:block; font-size:105px; opacity:0.2">Larissa Huang</h1>



                <p class="intro">"a front end developer and interactive designer who is passionate about bridging the gap between development and design."</p>
            </div>


            <div class="col-sm-6 wrap">

                <div class='media'>

                    <img class="intro-photo" style="padding:30px" src="../img/Larissa-Huang-photo.jpg">
                </div>

            </div>
        </div>

    </div>



    <?php  ?>

    <!-- Guusto -->
    <a href="guusto.php">
        <div class="contain">
            <div class="row row-2 grow">
                <div class=" col-sm-6 wrap-logo">

                    <div class="logo">

                        <img class="logo--guusto" src="../img/guusto-logo-black.png" />

                        <h3 class="title">Front End Development</h3>
                        <div class="keygroup">
                            <p class="key guusto">Bootstrap</p>
                            <p class="key guusto">CSS</p>
                            <p class="key guusto">AngularJS</p>
                        </div>

                    </div>

                </div>


                <div class="col-sm-6 wrap">
                    <div class="media">
                        <img src="../img/guusto-card-pf.jpg" />

                    </div>

                </div>
            </div>

        </div>
    </a>

    <!-- To Do-->
    <a href="todolist.php">
        <div class="contain">
            <div class="row row-2 grow">
                <div class="col" style="display:block;">

                    <img class="logo--todo" src="../img/todo-inner.png">

                    <h3 class="title">A simple React app</h3>
                    <div class="keygroup">
                        <p class="key">Data binding
                            <p class="key">Components</p>
                    </div>

                </div>

                <div class="col-sm-6 wrap">
                    <div class="media" style="flex-direction:column;">

                        <img class="home" src="../img/todo-banner.png" />

                    </div>

                </div>

            </div>

        </div>
    </a>


    <!-- infinite yoga -->
    <a href="/infinite-yoga.php">
        <div class="contain">

            <div class="row row-2 grow">
                <div class="col-sm-6 wrap-logo">

                    <div class="logo">

                        <img class="logo--yoga" src="../img/infinite-yoga-logo.jpg" />

                        <h3 class="title">UI Design</h3>
                        <div class="keygroup">
                            <p class="key">Adobe XD
                                <p class="key">Adobe Illustrator</p>
                        </div>
                    </div>

                </div>

                <div class="col-sm-6 wrap nopadding">
                    <div class="media">

                        <img class="yoga" src="../img/infinite-yoga-card.jpg" />

                    </div>
                </div>

            </div>

        </div>
    </a>

    <!-- Shutter-->
    <a href="/shutter-thunder.php">
        <div class="contain">
            <div class="row row-2 grow">
                <div class=" col-sm-6 wrap-logo">

                    <div class="logo">
                        <img class="logo--shutter" src="../img/shutter-thunder-logo-transp.png">


                        <h3 class="title">WordPress Development</h3>
                        <div class="keygroup">
                            <p class="key">PHP</p>
                            <p class="key">Custom Theme</p>
                            <p class="key">Custom Plugins</p>

                        </div>
                    </div>

                </div>


                <div class="col-sm-6 wrap">
                    <div class="media">
                        <video class="responsive" controls mute autoplay loop>
                            <source src="video/cinematography-transparent.mp4" type="video/mp4" class="responsive">
                            Your browser does not support the video tag.
                        </video>

                    </div>

                </div>
            </div>

        </div>
    </a>


    <!-- Tag-->
    <a href="tag-heuer-interactive.php">
        <div class="contain">

            <div class="row row-2 grow">
                <div class=" col-sm-6 wrap-logo">

                    <div class="logo" style="margin-top:-10px;">

                        <img class="logo--tag" src="../img/tag-logo.jpg" />

                        <h3 class="title">Interactive Illustration</h3>
                        <div class="keygroup">
                            <p class="key">Adobe Illustrator</p>
                            <p class="key">JQuery</p>


                        </div>

                    </div>

                </div>


                <div class="col-sm-6 wrap">
                    <div class="media" style="">
                        <img src="../img/tag-card-pf.jpg" />

                    </div>

                </div>
            </div>
        </div>
    </a>





    </section>




    <?php  ?>

    <?php  ?>

    <?php include('connect-with-me.php'); ?>
    <?php include('footer.php'); ?>

</body>

</html>