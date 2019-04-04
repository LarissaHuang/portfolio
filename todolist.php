<html lang="en">

<!-- TODO -->
<!-- add hover effects on buttons -->


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Larissa Huang - Portfolio </title>

    <?php include('header-scripts-and-styles.php'); ?>
    <link href="css/todo.css" rel="stylesheet">

</head>

<body class="page--todo">

    <?php include('header.php'); ?>

    <!--Banner -->

    <div class="row">
        <div class="col-xs-12 col-sm-6 demo">

            <div class="" data-aos="slide-right">
                <a href="http://larissahuang.ca/todolist" class="btn btn-center btn-outline-secondary btn-demo" style="margin-top:30px; border:none;">View Demo</a>

                <img src="img/todo-banner.png" class="banner" id="todo-banner" />
            </div>

        </div>

        <div class="col-xs-12 col-sm-6">
            <div class="description">
                <h3 class="title">A simple React app</h3>
                <p class="key">Key concepts: data binding, components</p>

                <p class="small"> With this simple app my aim was to familiarize myself with the basics of the React.js framework. Some concepts I learned by working on this app were:</p>

                <ul class="small nopadding" id="react">
                    <li class="react-item">
                        Keeping data in sync with UI
                    </li>

                    <li class="react-item">
                        Automatic UI state management
                    </li>

                    <li class="react-item">
                        Visuals defined in JSX
                    </li>

                    <li class="react-item">
                        Node and web pack
                    </li>

                    <li class="react-item">
                        Components and component life cycle
                    </li>


                    <li class="react-item">
                        Transferring props
                    </li>

                    <li class="react-item">
                        State change
                    </li>

                    <li class="react-item">
                        Refs
                    </li>

                    <li class="react-item">
                        Portals
                    </li>

                </ul>


            </div>

        </div>
    </div>

    <?php  ?>




    <?php include('footer.php'); ?>
</body>

</html>