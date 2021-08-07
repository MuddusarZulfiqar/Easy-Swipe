




<?php $isaccount = 1; include_once "includes/header.php";?>
<div class="static-header">
    <?php include_once "includes/header-homepage.php";?> 
</div>
<div class="container">
    <div class="account-sec">
        <h2 class="page-title">
            Sign Up
        </h2>
        <form>  
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="name" name="first name" class="form-control" placeholder="First Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="name" name="Last name" class="form-control" placeholder="Last Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email Address">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="number" name="Phone Number" class="form-control" placeholder="Phone Number">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="name" name="city" class="form-control" placeholder="City">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <!-- <input type="name" name="State" class="form-control" placeholder="State"> -->
                        <div class="input-style">
                            <select class="selectpicker" title="State">
                                <option>Punjab</option>
                                <option>KPK</option>
                                <option>Balochistan</option>
                                <option>Sindh</option>
                                <option>GB</option>
                                <option>Kashmir</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Address"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="password" name="confirm password" class="form-control" placeholder="Confirm Password">
                    </div>
                </div>
                <div class="col-md-12">
                     <div class="text-left">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="radio">
                                    <span>
                                        I have carefully read and write the data
                                    </span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="button-row">
                        <a href="#" class="btn btn-primary">Create Account</a>
                    </div>
                </div>
            </div>
            
            
        </form>
    </div>
</div>
<?php include_once "includes/footer.php";?>
