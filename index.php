<?php
    // Sessions
    include 'kesha/session.php';
    
    
    
?>
<!DOCTYPE html>
<head>
    <title>AJ Sports Club Spinning</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="AJ SPORTS CLUB OFFICAL PAGE">
    <meta name="author" content="Radislav Splichal">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>



    <!-- Additional Style Information -->
    <style>
        <?php include 'style.css'; ?>
    </style>
    <!-- Navigation and MENU-->
    <nav class="navbar navbar-default">

        <?php include 'nav.html'; ?>
    </nav>

    <div id="headerimg">

        <!--Text over Header Image-->
        <?php include 'cover.php'; ?>



        <header>
            <!-- The Logo and the Header Image-->
            <?php include 'header.html'; ?>
        </header>
    </div>
    <section>


        <article>
            <!-- The Page content and its SQL logic-->
            <?php
                
                include 'content/section.php'
                
            ?>


        </article>


    </section>
    <footer>
        <p>Aj Sports Club 2015 © / Kesha Engine / Bootstrap CSS&JS / Build 0005 /</p>



    </footer>



</body>

<?php
    
    
    
