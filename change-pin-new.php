<?php $ishome = 1; include_once "includes/header.php";?>  
<div class="dashboard">
    <!-- Dashboard Left Menu -->
    <?php include_once "includes/account-menu.php";?> 
    <!-- Dashboard Left Menu -->

    <!-- Dashboard Right Contents -->
    <div class="dashboard__right">
        <?php include_once "includes/header-dashabord.php";?> 
        <div class="inner-content">
            <div class="card-title">Change Pin</div>
            <div class="card sm">
                <form>
                    <div class="form-group">
                        <label class="control-label">Email:</label>
                        <div class="row col-gap-6">
                            <div class="col-sm-8">
                                <input type="email" class="form-control" name="" placeholder="abc@abc.com">
                            </div>
                            <div class="col-sm-4">
                                <a href="#" class="btn btn-primary">Get Code</a>
                            </div>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="" placeholder="Verification code">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Password:</label>
                        <div class="row  col-gap-6">
                            <div class="col-sm-8">
                                <input type="password" class="form-control" name="" placeholder="password">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Change Pin:-</label>
                        <div class="row  col-gap-6">
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="" placeholder="Enter your old Pin">
                            </div>
                            <div class="col-sm-4">
                                <a href="#" class="btn btn-primary">Forgot Pin</a>
                            </div>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="" placeholder="Select new Pin">
                            </div>
                            <div class="col-sm-12 mt-20">
                                <a href="#" class="btn btn-primary">Change</a>
                            </div>
                        </div>
                    </div>


                </form>
            </div>
        </div>
        
        
    </div>
    <!-- Dashboard Right Contents -->
</div>

