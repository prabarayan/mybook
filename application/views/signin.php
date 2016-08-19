<?php
include("header.php");

echo $this->session->userdata('logged_in');
?>
<style type="text/css">

    .errorcls {
        color: #ED0909;
        font-size: 11px;
        font-weight: bold;
        margin-top: 3px;
    }

</style>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="module module-login span4 offset4">
                <form role="form">
                    <ul class="social-login">
                        <li><a href="<?php echo base_url(); ?>hauth/login/Facebook" class="btn btn-facebook"><i class="fa fa-facebook"></i>Register with Facebook</a></li>
                         <li><a href="<?php echo base_url(); ?>hauth/login/Google" class="btn btn-google"><i class="fa fa-google-plus"></i>Register with Google</a></li>
                    </ul>
                    
                    <hr>	
                </form>
            </div>
        </div>
    </div>
</div><!--/.wrapper-->
<?php include("footer.php") ?>