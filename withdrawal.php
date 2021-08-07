<?php $ishome = 1; include_once "includes/header.php";?>  
<div class="dashboard">
    <!-- Dashboard Left Menu -->
    <?php include_once "includes/account-menu.php";?>    
    <!-- Dashboard Left Menu -->

    <!-- Dashboard Right Contents -->
    <div class="dashboard__right">
        <?php include_once "includes/header-dashabord.php";?> 
        <div class="inner-content">
            <div class="withdrawal">
                <h4>Withdraw</h4>
                <ul class="withdrawal__header nav nav-tabs" id="myTab" role="tablist">
                    <li class="withdrawal__header--item nav-item" role="presentation">
                        <a class="nav-link active" id="usdt-tab" data-toggle="tab" href="#usdt" role="tab" aria-controls="usdt" aria-selected="true">
                            <div class="cardMain" style="--activeTab:#1ba27a">
                                <div class="cardMain__head">
                                        <div class="icon">
                                            <img src="src/images/icons/usdt.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="title">
                                            <h3>USDT</h3>
                                        </div>
                                </div> 
                                <div class="cardMain__foot">
                                    <button class="btn btn-primary">withdraw <span class="minus"></span></button>
                                </div> 
                            </div>
                        </a>
                    </li>
                    <!-- <li class="withdrawal__header--item nav-item" role="presentation">
                        <a class="nav-link" id="paypal-tab" data-toggle="tab" href="#paypal" role="tab" aria-controls="paypal" aria-selected="false">
                            <div class="cardMain" style="--activeTab:#00186a">
                                <div class="cardMain__head">
                                        <div class="icon">
                                            <img src="src/images/icons/paypal.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="title">
                                            <h3>PayPal</h3>
                                        </div>
                                </div> 
                                <div class="cardMain__foot ">
                                    <button class="btn btn-primary">withdraw <span class="minus"></span></button>
                                </div> 
                            </div>
                        </a>
                    </li> -->
                    <li class="withdrawal__header--item nav-item" role="presentation">
                        <a class="nav-link" id="paypall-tab" data-toggle="tab" href="#paypall" role="tab" aria-controls="paypall" aria-selected="false">
                            <div class="cardMain" style="--activeTab:#00186a">
                                <div class="cardMain__head">
                                        <div class="icon">
                                            <img src="src/images/icons/paypal.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="title">
                                            <h3>PayPal</h3>
                                        </div>
                                </div> 
                                <div class="cardMain__foot ">
                                    <button class="btn btn-primary">withdraw <span class="minus"></span></button>
                                </div> 
                            </div>
                        </a>
                    </li>
                    <li class="withdrawal__header--item nav-item" role="presentation">
                        <a class="nav-link" id="jazzcash-tab" data-toggle="tab" href="#jazzcash" role="tab" aria-controls="jazzcash" aria-selected="false">
                            <div class="cardMain" style="--activeTab:#971b20">
                                <div class="cardMain__head">
                                        <div class="icon">
                                            <img src="src/images/icons/jazz-cash.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="title">
                                            <h3>JazzCash</h3>
                                        </div>
                                </div> 
                                <div class="cardMain__foot">
                                    <button class="btn btn-primary">withdraw <span class="minus"></span></button>
                                </div> 
                            </div>
                        </a>
                    </li>
                    <li class="withdrawal__header--item nav-item" role="presentation">
                        <a class="nav-link" id="easypasa-tab" data-toggle="tab" href="#easypasa" role="tab" aria-controls="easypasa" aria-selected="false">
                            <div class="cardMain" style="--activeTab:#a7c638">
                                <div class="cardMain__head">
                                        <div class="icon">
                                            <img src="src/images/icons/easypaisa-logo.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="title">
                                            <h3>EasyPaisa</h3>
                                        </div>
                                </div> 
                                <div class="cardMain__foot">
                                    <button class="btn btn-primary">withdraw <span class="minus"></span></button>
                                </div> 
                            </div>
                        </a>
                    </li>
                    <li class="withdrawal__header--item nav-item" role="presentation">
                        <a class="nav-link" id="bank-tab" data-toggle="tab" href="#bank" role="tab" aria-controls="bank" aria-selected="false">
                            <div class="cardMain" style="--activeTab:#285680">
                                <div class="cardMain__head">
                                        <div class="icon">
                                            <img src="src/images/icons/bankk.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="title">
                                            <h3>Bank </h3>
                                        </div>
                                </div> 
                                <div class="cardMain__foot">
                                    <button class="btn btn-primary">withdraw <span class="minus"></span></button>
                                </div> 
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="withdrawal__content tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="usdt" role="tabpanel" aria-labelledby="usdt-tab">
                        <div class="card lg">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="control-label">Withdraw Amount</label>
                                        <div class="has-label">
                                            <input type="text" class="form-control" placeholder="5.00 USDT ">
                                            <span class="info-label">MAX</span>
                                        </div>
                                        <div class="text-right">
                                            <span class="text-muted font-weight-bold mt-5 d-inline-block">Fee: 1USDT</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- <div class="d-flex align-items-center">
                                    <div class="form_Info">
                                        
                                    </div>
                                    <div class="text-right">
                                        <span class="text-muted font-weight-bold ml-10 d-inline-block">Note:Choose network type wisely. We won’t responsible for any kind of fund loss.</span>
                                    </div>
                                </div>  --> 
                                <label for="kh" class="control-label">Withdraw Address</label>
                                <div class="row align-items-center col-gap-15">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Paste your USDT address here ">
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="note">Note:Choose network type wisely. <br> We won’t responsible for any kind of fund loss.</p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                
                                
                                <div class="row align-items-center col-gap-15">
                                    <div class="col-sm-6">
                                        <div class="label-wrapper">
                                            <label for="kh" class="control-label">Network</label>
                                            <ul class="radio">
                                                <li>
                                                    <label>
                                                        <input type="radio" name="name68799">
                                                        <span>TRC 20</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="radio" name="name68799">
                                                        <span>ERC 20</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Enter Withdraw Pin">
                                    </div>
                                    
                                    <div class="col-sm-12 mt-20">
                                        <a href="#" class="btn btn-primary">Proceed</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="paypall" role="tabpanel" aria-labelledby="paypall-tab">
                        <div class="card lg">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="control-label">Withdraw Amount</label>
                                        <div class="has-label">
                                            <input type="text" class="form-control" placeholder="5.00 USDT ">
                                            <span class="info-label">MAX</span>
                                        </div>
                                        <div class="text-right">
                                            <span class="text-muted font-weight-bold mt-5 d-inline-block">Fee: 1USDT</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- <div class="d-flex align-items-center">
                                    <div class="form_Info">
                                        
                                    </div>
                                    <div class="text-right">
                                        <span class="text-muted font-weight-bold ml-10 d-inline-block">Note:Choose network type wisely. We won’t responsible for any kind of fund loss.</span>
                                    </div>
                                </div>  --> 
                                <label for="kh" class="control-label">Withdraw Address</label>
                                <div class="row align-items-center col-gap-15">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Paste your PayPal account ">
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="note">Note:Choose network type wisely. <br> We won’t responsible for any kind of fund loss.</p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                
                                
                                <div class="row align-items-center col-gap-15">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Account Title">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                
                                
                                <div class="row align-items-center col-gap-15">
                                    
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Enter Withdraw Pin">
                                    </div>
                                    <div class="col-sm-12 mt-20">
                                        <a href="#" class="btn btn-primary">Proceed</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="tab-pane fade" id="paypal" role="tabpanel" aria-labelledby="paypal-tab">2</div> -->
                    <div class="tab-pane fade" id="jazzcash" role="tabpanel" aria-labelledby="jazzcash-tab">
                        <div class="card lg">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="control-label">Withdraw Amount</label>
                                        <div class="has-label">
                                            <input type="text" class="form-control" placeholder="5.00 USDT ">
                                            <span class="info-label">MAX</span>
                                        </div>
                                        <div class="text-right">
                                            <span class="text-muted font-weight-bold mt-5 d-inline-block">Fee: 1USDT</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- <div class="d-flex align-items-center">
                                    <div class="form_Info">
                                        
                                    </div>
                                    <div class="text-right">
                                        <span class="text-muted font-weight-bold ml-10 d-inline-block">Note:Choose network type wisely. We won’t responsible for any kind of fund loss.</span>
                                    </div>
                                </div>  --> 
                                <label for="kh" class="control-label">Withdraw Address</label>
                                <div class="row align-items-center col-gap-15">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Paste your JazzCash account ">
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="note">Note:Choose network type wisely. <br> We won’t responsible for any kind of fund loss.</p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                
                                
                                <div class="row align-items-center col-gap-15">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Account Title">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                
                                
                                <div class="row align-items-center col-gap-15">
                                    
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Enter Withdraw Pin">
                                    </div>
                                    <div class="col-sm-12 mt-20">
                                        <a href="#" class="btn btn-primary">Proceed</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="easypasa" role="tabpanel" aria-labelledby="easypasa-tab">
                        <div class="card lg">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="control-label">Withdraw Amount</label>
                                        <div class="has-label">
                                            <input type="text" class="form-control" placeholder="5.00 USDT ">
                                            <span class="info-label">MAX</span>
                                        </div>
                                        <div class="text-right">
                                            <span class="text-muted font-weight-bold mt-5 d-inline-block">Fee: 1USDT</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- <div class="d-flex align-items-center">
                                    <div class="form_Info">
                                        
                                    </div>
                                    <div class="text-right">
                                        <span class="text-muted font-weight-bold ml-10 d-inline-block">Note:Choose network type wisely. We won’t responsible for any kind of fund loss.</span>
                                    </div>
                                </div>  --> 
                                <label for="kh" class="control-label">Withdraw Address</label>
                                <div class="row align-items-center col-gap-15">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Paste your EasyPaisa account">
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="note">Note:Choose network type wisely. <br> We won’t responsible for any kind of fund loss.</p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                
                                
                                <div class="row align-items-center col-gap-15">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Account Title">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                
                                
                                <div class="row align-items-center col-gap-15">
                                    
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Enter Withdraw Pin">
                                    </div>
                                    <div class="col-sm-12 mt-20">
                                        <a href="#" class="btn btn-primary">Proceed</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="bank" role="tabpanel" aria-labelledby="bank-tab">
                        <div class="card lg">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="control-label">Select Bank</label>
                                        <div class="input-style">
                                            <select class="selectpicker">
                                                <option>Meezan Bank</option>
                                                <option>UBL Bank</option>
                                                <option>Habib Bank</option>
                                                <option>Allied Bank</option>
                                                <option>Muslim Commerical Bank</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="control-label">Withdraw Amount</label>
                                        <div class="has-label">
                                            <input type="text" class="form-control" placeholder="5.00 USDT ">
                                            <span class="info-label">MAX</span>
                                        </div>
                                        <div class="text-right">
                                            <span class="text-muted font-weight-bold mt-5 d-inline-block">Fee: 1USDT</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- <div class="d-flex align-items-center">
                                    <div class="form_Info">
                                        
                                    </div>
                                    <div class="text-right">
                                        <span class="text-muted font-weight-bold ml-10 d-inline-block">Note:Choose network type wisely. We won’t responsible for any kind of fund loss.</span>
                                    </div>
                                </div>  --> 
                                <label for="kh" class="control-label">Withdraw Address</label>
                                <div class="row align-items-center col-gap-15">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Paste your Bank account">
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="note">Note:Choose network type wisely. <br> We won’t responsible for any kind of fund loss.</p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                
                                
                                <div class="row align-items-center col-gap-15">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Account Title">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                
                                
                                <div class="row align-items-center col-gap-15">
                                    
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Enter Withdraw Pin">
                                    </div>
                                    <div class="col-sm-12 mt-20">
                                        <a href="#" class="btn btn-primary">Proceed</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <!-- Dashboard Right Contents -->
</div>

