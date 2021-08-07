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
                                    <button class="btn btn-primary">Deposit <span class="plus"></span></button>
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
                                    <button class="btn btn-primary">Deposit <span class="plus"></span></button>
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
                                    <button class="btn btn-primary">Deposit <span class="plus"></span></button>
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
                                    <button class="btn btn-primary">Deposit <span class="plus"></span></button>
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
                                    <button class="btn btn-primary">Deposit <span class="plus"></span></button>
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
                                    <button class="btn btn-primary">Deposit <span class="plus"></span></button>
                                </div> 
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="withdrawal__content tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="usdt" role="tabpanel" aria-labelledby="usdt-tab">
                        <div class="card lg">
                            <div class="form-group">
                               
                                <label for="kh" class="control-label">Deposit Address</label>
                                <div class="deposit-details">
                                    <ul>
                                        <li>USTD Address</li>
                                        <li>
                                            <input type="text" id="innerText" readonly value="TRGIUDWHXDASHDIADIHOAISHDOIASHSIAD">
                                            
                                            <a href="#" id="copyEle" class="copy-text" data-toggle="tooltip" data-placement="top" title="Copied">
                                                <img src="src/images/icons/copy-icon.png" class="img-fluid" alt="">
                                                Copy
                                            </a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>Network</li>
                                        <li>TRC20</li>
                                    </ul>
                                </div>
                                <div class="row align-items-center col-gap-15">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Ammount">
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="note">
                                            Send this amount to the given account.
                                        </p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                            
                                <div class="row align-items-center col-gap-15">
                                    <div class="col-sm-6">
                                        <div class="form-group type-file mb-0">
                                            <div class="file-wrapper">
                                                <input type="file" class="form-control" name="file">
                                            </div>
                                            <div class="file-name">
                                                <span class="file_name"></span>
                                                <span class="cross">
                                                    
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <p class="note">Please attach screenshot here to verify your transaction.</p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                
                                
                                <div class="row align-items-center col-gap-15">
                                    
                                    <div class="col-sm-12">
                                        <a href="#" class="btn btn-primary mt-20">Proceed</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="paypall" role="tabpanel" aria-labelledby="paypall-tab">
                        <div class="card lg">
                            <div class="form-group">
                               
                                <label for="kh" class="control-label">Deposit Address</label>
                                <div class="row align-items-center col-gap-15">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="abc@abc.com">
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="note">Note: Only send PayPal USD to this address
                                        otherwise we won’t responsible for any kind of
                                        fund loss.</p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kh" class="control-label">Account Title: EazySwipe</label>
                                <div class="row align-items-center col-gap-15">
                                    <div class="col-sm-6">
                                        <div class="form-group type-file mb-0">
                                            <div class="file-wrapper">
                                                <input type="file" class="form-control" name="file">
                                            </div>
                                            <div class="file-name">
                                                <span class="file_name"></span>
                                                <span class="cross">
                                                    
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <p class="note">Please attach screenshot here to verify your transaction.</p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                
                                
                                <div class="row align-items-center col-gap-15">
                                    
                                    <div class="col-sm-12">
                                        <a href="#" class="btn btn-primary">Proceed</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="tab-pane fade" id="paypal" role="tabpanel" aria-labelledby="paypal-tab">2</div> -->
                    <div class="tab-pane fade" id="jazzcash" role="tabpanel" aria-labelledby="jazzcash-tab">
                        <div class="card lg">
                            <div class="form-group">
                               
                                <label for="kh" class="control-label">Deposit Address</label>
                                <div class="deposit-details">
                                    <ul>
                                        <li>Bank Name: </li>
                                        <li>MCB</li>
                                    </ul>
                                    <ul>
                                        <li>Account #: </li>
                                        <li>xxxxxx-xxxxxx-xx</li>
                                    </ul>
                                    <ul>
                                        <li>Account #: </li>
                                        <li>EazySwipe</li>
                                    </ul>
                                    <ul>
                                        <li>Receiver Mobile #: </li>
                                        <li>0302-0000000</li>
                                    </ul>
                                    <ul>
                                        <li>Receiver Mobile #: </li>
                                        <li>0302-0000000</li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <a href="#">Change Bank</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="row align-items-center col-gap-15">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Ammount">
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="note">
                                            Send this amount to the given account.
                                        </p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                            
                                <div class="row align-items-center col-gap-15">
                                    <div class="col-sm-6">
                                        <div class="form-group type-file mb-0">
                                            <div class="file-wrapper">
                                                <input type="file" class="form-control" name="file">
                                            </div>
                                            <div class="file-name">
                                                <span class="file_name"></span>
                                                <span class="cross">
                                                    
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <p class="note">Please attach screenshot here to verify your transaction.</p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                
                                
                                <div class="row align-items-center col-gap-15">
                                    
                                    <div class="col-sm-12">
                                        <a href="#" class="btn btn-primary mt-20">Proceed</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="easypasa" role="tabpanel" aria-labelledby="easypasa-tab">
                        <div class="card lg">
                            <div class="form-group">
                               
                                <label for="kh" class="control-label">Deposit Address</label>
                                <div class="deposit-details">
                                    <ul>
                                        <li>Bank Name: </li>
                                        <li>MCB</li>
                                    </ul>
                                    <ul>
                                        <li>Account #: </li>
                                        <li>xxxxxx-xxxxxx-xx</li>
                                    </ul>
                                    <ul>
                                        <li>Account #: </li>
                                        <li>EazySwipe</li>
                                    </ul>
                                    <ul>
                                        <li>Receiver Mobile #: </li>
                                        <li>0302-0000000</li>
                                    </ul>
                                    <ul>
                                        <li>Receiver Mobile #: </li>
                                        <li>0302-0000000</li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <a href="#">Change Bank</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="row align-items-center col-gap-15">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Ammount">
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="note">
                                            Send this amount to the given account.
                                        </p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                            
                                <div class="row align-items-center col-gap-15">
                                    <div class="col-sm-6">
                                        <div class="form-group type-file mb-0">
                                            <div class="file-wrapper">
                                                <input type="file" class="form-control" name="file">
                                            </div>
                                            <div class="file-name">
                                                <span class="file_name"></span>
                                                <span class="cross">
                                                    
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <p class="note">Please attach screenshot here to verify your transaction.</p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                
                                
                                <div class="row align-items-center col-gap-15">
                                    
                                    <div class="col-sm-12">
                                        <a href="#" class="btn btn-primary mt-20">Proceed</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="bank" role="tabpanel" aria-labelledby="bank-tab">
                        <div class="card lg">
                            <div class="form-group">
                               
                                <label for="kh" class="control-label">Deposit Address</label>
                                <div class="deposit-details">
                                    <ul>
                                        <li>Bank Name: </li>
                                        <li>MCB</li>
                                    </ul>
                                    <ul>
                                        <li>Account #: </li>
                                        <li>xxxxxx-xxxxxx-xx</li>
                                    </ul>
                                    <ul>
                                        <li>Account #: </li>
                                        <li>EazySwipe</li>
                                    </ul>
                                    <ul>
                                        <li>Receiver Mobile #: </li>
                                        <li>0302-0000000</li>
                                    </ul>
                                    <ul>
                                        <li>Receiver Mobile #: </li>
                                        <li>0302-0000000</li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <a href="#">Change Bank</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="row align-items-center col-gap-15">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Ammount">
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="note">
                                            Send this amount to the given account.
                                        </p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                            
                                <div class="row align-items-center col-gap-15">
                                    <div class="col-sm-6">
                                        <div class="form-group type-file mb-0">
                                            <div class="file-wrapper">
                                                <input type="file" class="form-control" name="file">
                                            </div>
                                            <div class="file-name">
                                                <span class="file_name"></span>
                                                <span class="cross">
                                                    
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <p class="note">Please attach screenshot here to verify your transaction.</p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                
                                
                                <div class="row align-items-center col-gap-15">
                                    
                                    <div class="col-sm-12">
                                        <a href="#" class="btn btn-primary mt-20">Proceed</a>
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

