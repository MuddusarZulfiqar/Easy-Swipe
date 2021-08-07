<?php $isaccount = 1; include_once "includes/header.php";?>
<div class="static-header">
    <?php include_once "includes/header-homepage.php";?> 
</div>
    <div class="account-sec">
        <h2 class="page-title">
            Login
        </h2>
        <form>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email Address">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>

            <div class="form-group d-flex justify-content-between">
                <div class="checkbox square">
                    <label>
                        <input type="checkbox" name="radio">
                            <span>
                                Remember Me
                            </span>
                            <label class="forget-pw"></label>
                    </label>
                </div>
                <a href="#" class="forget-pw">Forgot password?</a>
            </div>
            <div class="button-row">
                <a href="#" class="btn btn-primary">login</a>
            </div>
        </form>
    </div>
<?php include_once "includes/footer.php";?>


