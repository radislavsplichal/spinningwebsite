<?php
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
                
                include 'content/section.html'
                
            ?>


        </article>


    </section>
    <footer>
        <p>Aj Sports Club 2015 © / Kesha Engine / Bootstrap CSS&JS / Build 0004 /</p>



    </footer>



</body>

<?php
    
    /* 
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */
    
