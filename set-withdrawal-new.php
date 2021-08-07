<?php $ishome = 1; include_once "includes/header.php";?>  
<div class="dashboard">
    <!-- Dashboard Left Menu -->
    <?php include_once "includes/account-menu.php";?>  
    <!-- Dashboard Left Menu -->

    <!-- Dashboard Right Contents -->
    <div class="dashboard__right">
        <?php include_once "includes/header-dashabord.php";?> 
        <div class="inner-content">
            <div class="card-title">Set Withdraw Pin</div>
            <div class="card md">
                <form>
                    <div class="form-group">
                        <label class="control-label">Email:</label>
                        <div class="row col-gap-6">
                            <div class="col-sm-6">
                                <input type="email" class="form-control" name="" placeholder="abc@abc.com">
                            </div>
                            <div class="col-sm-6">
                                <a href="#" class="btn btn-primary">Get Code</a>
                            </div>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="" placeholder="Verification code">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Password:</label>
                        <div class="row  col-gap-6">
                            <div class="col-sm-6">
                                <input type="password" class="form-control" name="" placeholder="password">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Set Withdraw Pin:</label>
                        <div class="row align-items-center col-gap-6">
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="" placeholder="Choose 4 Digits Number">
                            </div>
                            <div class="col-sm-6">
                                <p class="note">Note:You can use this pin to withdraw your funds.</p>
                            </div>
                            <div class="col-12 ">
                                <a href="#" class="btn btn-primary">SET</a>
                            </div>
                        </div>
                    </div>


                </form>
            </div>
        </div>
        
        
    </div>
    <!-- Dashboard Right Contents -->
</div>

