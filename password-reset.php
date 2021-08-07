




<?php $isaccount = 1; include_once "includes/header.php";?>
<div class="static-header">
    <?php include_once "includes/header-homepage.php";?> 
</div>
<div class="account-sec">
    <h2 class="page-title">
        Password Reset
    </h2>
    <p>
        Forgotten your password? Enter your e-mail address below,<br>and we’ll e-mail 
        insructions for setting a new one.
    </p>
    <form>
        <div class="form-group">
            <input type="email" name="name" class="form-control" placeholder="Email Address">
        </div>
        <div class="button-row">
            <button type="button" class="btn btn-primary">Send Reset Request</button>
        </div>
    </form>
</div>
<?php include_once "includes/footer.php";?>

