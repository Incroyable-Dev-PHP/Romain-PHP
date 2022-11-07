<!DOCTYPE html >
<html lang="en">

    <?php  include  './includes/head.html' ; ?>

    <body>
        <?php
            include  './includes/header.html' ;
            include  './includes/nav.html' ;
        
        ?>

        < main class  =" container " >
            <?php
                if (isset($_GET [ 'about-me' ])) {
                    include  "./pages/about-me.html" ;
                    return;
                } elseif (isset($_GET [ 'my-dreams' ])) {
                    include  "./pages/my-dreams.html" ;
                    return;
                } elseif (isset($_GET [ 'my-passions' ])) {
                    include  "./pages/my-passions.html" ;
                    return;
                } else {
                    include  "./pages/accueil.html" ;
                    return;
                }
            ?>
        </main >

        <?php  include  './includes/footer.html' ; ?>
            </body >

</ html >