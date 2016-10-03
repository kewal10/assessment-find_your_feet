<?php
    ob_start();
    session_start();
    include 'partial/head.php';
    include 'partial/nav.php';
    include 'includes/db.php';
    include 'includes/conn.php';
?>

<!-- Begin page content -->
<div class="fluid-container main-content">
    <div class="row col-xs-12 bg-fix">
        <div class="bg img-responsive">
            <div class="row fix-class">
              <div class="col-sm-12 col-md-7 col-md-offset-3">
                <h1 class="heading">About Find Your Feet</h1>
                <p class="info-text">
                   Et putent tibique mel, mucius quidam impedit an eum. Ferri prompta patrioque his at, ullum assentior has ad. No his tota audiam atomorum, at est vide elitr neglegentur. Eu per debet viderer, id corpora accumsan adipisci mea. <br>

                    <span class="hide">
                      His movet debitis reprimique ne, iriure convenire corrumpit an pri. Habeo equidem veritus sit eu, ne mea verear molestie. Mea elit invenire te, ex possit utamur nam. At usu vivendum qualisque abhorreant.
                    </span>
                    
                    <a href="about-us.php" class="btn btn-learn-more btn-block">Learn More</a>

                   <!-- <button type="button" class="btn btn-learn-more btn-block">Learn More</button> -->
                </p>
              </div>
            </div>
        </div>
    </div>
</div>

<div class="fluid-container mtf">

   <div class="row center-block">

       <?php
            $query = $connection->query("SELECT companyTitle, img_name, img_path, companyDescription, companyLinks FROM company LIMIT 3");
            while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){    
       ?>

       <div class="col-sm-6 col-md-4 sec-link fixed">
           <div class="box-shadow">
               <img src="<?php echo $row['img_path']?><?php echo $row['img_name'] ?>" class="img-responsive">
               <div class="caption">
                   <h4><?php echo $row['companyTitle'] ?></h4>
                   <p>
                       <?php echo $row['companyDescription'] ?>
                   </p>

                   <p>

                       <?php

                            if($_SESSION["loggedIn"] == true) {


                                ?>

                                <a href="<?php echo $row['companyLinks'] ?>" class="btn btn-read-more btn-block"
                                   role="button">Read More</a>

                                <?php
                            }else {
                       ?>

                       <a href="signin.php" class="btn btn-read-more btn-block" role="button">Sign In To Read More</a>

                       <?php } ?>

                   </p>
               </div>
           </div>
       </div>

    <?php
    }
    ?>
   </div>
</div>

<?php
  include('partial/footer.php');
?>
