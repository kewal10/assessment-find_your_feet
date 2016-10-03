<?php
    session_start();
    ob_start();
    if(isset($_SESSION["userID"])) {
    }else {
        header('Location: signin.php');
    }
    include('partial/head.php');
    include('partial/nav.php');
    include 'includes/db.php';
    include 'includes/conn.php';
?>

<div class="form-group">
    <label class="col-md-4 control-label" for=""></label>
    <div class="col-md-5">
        <legend class="text-center comp-links" id="c-l"><span><?php echo "Welcome  " . $_SESSION['fullName']; ?></span></legend>
    </div>
</div>


<div class="fluid-container comp-links mtf">
    <div class="row center-block">
        <div class="comp-container">
            <?php
            $query = $connection->query("SELECT companyTitle, img_name, img_path, companyDescription, companyLinks FROM company");
            while($row = mysqli_fetch_assoc($query)) {

                ?>

                <div class="col-sm-6 col-md-4 col-lg-4 sec-link">
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

                                    <a href="signup.php" class="btn btn-read-more btn-block" role="button">Sign In To Read More</a>

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
</div>

<?php
include('partial/footer.php');
?>

<script>
    document.title = 'Find Your Feet | Company links';
</script>
