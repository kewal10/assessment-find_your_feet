<?php
include('partial/head.php');
include('partial/nav.php');
?>


<style>
    a.r-l {
        color: #9E9E9E;
        transition: all .2s ease-in-out;
    }
    a.r-l:hover,
    a.r-l:focus{
        color: #616161;
    }
</style>

<div class="container">
    <div class="row">


        <h2 class="text-center title">FAQ</h2>
        <div class="col-sm-12 col-md-10 col-md-offset-2 mt">


            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How to Sign In
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <div class="col-sm-6">
                                To sign you need to click on "sign in" link on navigation <br>
                                Then enter your username and password and click on sign in buttom
                            </div>

                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img src="img/signin.png" alt="Sign in navigation" class="img-responsive">
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="img/s-f.png" alt="Sign in Form" class="img-responsive">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How to Register
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <div class="col-sm-6">
                                To register you nned to click on "Register" link <br>
                                Then Enter your details like Full Name, Email etc. <br>
                                After that click on "Create Account" buttom that will create an account and take you to login page
                            </div>

                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img src="img/signup.png" alt="Sign up navigation" class="img-responsive">
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="img/s-u-f.png" alt="Sign up Form" class="img-responsive">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How to Access to Resources
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            To access you most Register to our website <br>
                            If you have not register yet follow the instructions <br>
                            How to Sign in or How to Register
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                All Resources
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            All Images form &ndash; <a href="https://pixabay.com" target="_blank" class="r-l">Pixabay</a> <br>
                            All Icons form &ndash; <a href="http://fontawesome.io" target="_blank" class="r-l">font awesome</a> <br>
                            Front end with &ndash; <a href="http://getbootstrap.com" target="_blank" class="r-l">Bootstrap 3</a> <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<?php
include('partial/footer.php');
?>

<script>
    document.title = 'Find Your Feet | About Us';
</script>