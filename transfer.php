<?php $ishome = 1; include_once "includes/header.php";?>  
<div class="dashboard">
    <!-- Dashboard Left Menu -->
    <?php include_once "includes/account-menu.php";?>  
    <!-- Dashboard Left Menu -->

    <!-- Dashboard Right Contents -->
    <div class="dashboard__right">  
        <?php include_once "includes/header-dashabord.php";?> 
        <div class="inner-content">
            <div class="card-title font-weight-bold">Transfer</div>
            <div class="card md transferCard">
                <div class="title">Transfer</div>
                <div class="subtitle">Currency transfer is instant</div>
                <p class="ammount">Balance: 20000.00</p>
                <div class="transfer-row">
                    <div class="form-group">
                        <label for="" class="control-label">From</label>
                        <input type="number" class="form-control" placeholder="10000.00">
                    </div>
                    <div class="form-group flex-1">
                        <a href="#" class="limit">MAX</a>
                    </div>
                    <div class="form-group">
                        <select class="selectpicker">
                            <option  data-content="<span><img src='src/images/icons/jazz-cash.png'>JazzCash</span>">JazzCash</option>
                            <option data-content="<span><img src='src/images/icons/easypaisa-logo.png'>EasyPaisa</span>">EasyPaisa</option>
                            <option data-content="<span><img src='src/images/icons/bankk.png'>Bank</span>">Bank </option>
                            <option data-content="<span><img src='src/images/icons/paypal.png'>PayPal</span>">PayPal</option>
                            <option data-content="<span><img src='src/images/icons/usdt.png'>USDT</span>">USDT</option>
                        </select>
                    </div>
                </div>
                <div class="swap--convert">
                    <button class="btn">
                        <svg fill="currentColor" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 984.85 984.85" style="enable-background:new 0 0 984.85 984.85;" xml:space="preserve">
                            <use xlink:href="#up-down-icon"></use>
                        </svg>
                    </button>
                </div>
                <div class="transfer-row">
                    <div class="form-group">
                        <label for="" class="control-label">To</label>
                        <input type="texnumbert" class="form-control" placeholder="100.00" readonly>
                    </div>
                    
                    <div class="form-group">
                        <select class="selectpicker">
                            <option  data-content="<span><img src='src/images/icons/jazz-cash.png'>JazzCash</span>">JazzCash</option>
                            <option data-content="<span><img src='src/images/icons/easypaisa-logo.png'>EasyPaisa</span>">EasyPaisa</option>
                            <option data-content="<span><img src='src/images/icons/bankk.png'>Bank</span>">Bank </option>
                            <option data-content="<span><img src='src/images/icons/paypal.png'>PayPal</span>">PayPal</option>
                            <option data-content="<span><img src='src/images/icons/usdt.png'>USDT</span>">USDT</option>
                        </select>
                    </div>
                </div>
                <p class="ammount">Transfre Rate: 100PKR/USD</p>
                <div class="last-price">Last Price Check: Jun 24, 2:40 AM</div>
                <div class="button-row">
                    <a href="#" class="btn btn-primary">Transfer</a>
                </div>
            </div>
        </div>
        
        
    </div>
    <!-- Dashboard Right Contents -->
</div>