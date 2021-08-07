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
                <h4>Available Balance</h4>
                <ul class="withdrawal__header nav nav-tabs" id="myTab" role="tablist">
                    <li class="withdrawal__header--item nav-item" role="presentation">
                        <div class="nav-link active" id="usdt-tab" data-toggle="tab" href="#usdt" role="tab" aria-controls="usdt" aria-selected="true">
                            <div class="cardMain" style="--activeTab:#1ba27a">
                                <div class="cardMain__head">
                                        <div class="icon">
                                            <img src="src/images/icons/usdt.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="title">
                                            <h3>USDT</h3>
                                        </div>
                                        <div class="total-balance">
                                            $1000.12
                                        </div>
                                </div> 
                                <div class="cardMain__foot">
                                    <div class="inline-buttons">
                                        <button class="btn btn-primary">withdraw</button>
                                        <button class="btn btn-primary light">Transfer</button>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </li>
                    <li class="withdrawal__header--item nav-item" role="presentation">
                        <div class="nav-link" id="paypall-tab" data-toggle="tab" href="#paypall" role="tab" aria-controls="paypall" aria-selected="false">
                            <div class="cardMain" style="--activeTab:#00186a">
                                <div class="cardMain__head">
                                        <div class="icon">
                                            <img src="src/images/icons/paypal.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="title">
                                            <h3>PayPal</h3>
                                        </div>
                                        <div class="total-balance">
                                            $1000.12
                                        </div>
                                </div> 
                                <div class="cardMain__foot">
                                    <div class="inline-buttons">
                                        <button class="btn btn-primary">withdraw</button>
                                        <button class="btn btn-primary light">Transfer</button>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </li>
                    <li class="withdrawal__header--item nav-item" role="presentation">
                        <div class="nav-link" id="jazzcash-tab" data-toggle="tab" href="#jazzcash" role="tab" aria-controls="jazzcash" aria-selected="false">
                            <div class="cardMain" style="--activeTab:#971b20">
                                <div class="cardMain__head">
                                        <div class="icon">
                                            <img src="src/images/icons/jazz-cash.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="title">
                                            <h3>JazzCash</h3>
                                        </div>
                                        <div class="total-balance">
                                            $1000.12
                                        </div>
                                </div> 
                                <div class="cardMain__foot">
                                    <div class="inline-buttons">
                                        <button class="btn btn-primary">withdraw</button>
                                        <button class="btn btn-primary light">Transfer</button>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </li>
                    <li class="withdrawal__header--item nav-item" role="presentation">
                        <div class="nav-link" id="easypasa-tab" data-toggle="tab" href="#easypasa" role="tab" aria-controls="easypasa" aria-selected="false">
                            <div class="cardMain" style="--activeTab:#a7c638">
                                <div class="cardMain__head">
                                        <div class="icon">
                                            <img src="src/images/icons/easypaisa-logo.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="title">
                                            <h3>EasyPaisa</h3>
                                        </div>
                                        <div class="total-balance">
                                            $1000.12
                                        </div>
                                </div> 
                                <div class="cardMain__foot">
                                    <div class="inline-buttons">
                                        <button class="btn btn-primary">withdraw</button>
                                        <button class="btn btn-primary light">Transfer</button>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </li>
                    <li class="withdrawal__header--item nav-item" role="presentation">
                        <div class="nav-link" id="bank-tab" data-toggle="tab" href="#bank" role="tab" aria-controls="bank" aria-selected="false">
                            <div class="cardMain" style="--activeTab:#285680">
                                <div class="cardMain__head">
                                        <div class="icon">
                                            <img src="src/images/icons/bankk.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="title">
                                            <h3>Bank </h3>
                                        </div>
                                        <div class="total-balance">
                                            $1000.12
                                        </div>
                                </div> 
                                <div class="cardMain__foot">
                                    <div class="inline-buttons">
                                        <button class="btn btn-primary">withdraw</button>
                                        <button class="btn btn-primary light">Transfer</button>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="withdrawal__content tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="usdt" role="tabpanel" aria-labelledby="usdt-tab">
                        <div class="card full">
                            <div class="table-head">
                                <h5>Recent Activities</h5>
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="pills-monthly-tab" data-toggle="pill" href="#pills-monthly" role="tab" aria-controls="pills-monthly" aria-selected="true">Monthly</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="pills-weekly-tab" data-toggle="pill" href="#pills-weekly" role="tab" aria-controls="pills-weekly" aria-selected="false">Weekly</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="pills-today-tab" data-toggle="pill" href="#pills-today" role="tab" aria-controls="pills-today" aria-selected="false">Today</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
                                    <table class="activities-table">
                                        <tbody>
                                            <tr>
                                                <td class="black">
                                                    <span class="rating">
                                                        <svg 
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                                             width="21px" height="16px">
                                                            <path fill-rule="evenodd"  fill="rgb(110, 197, 46)"
                                                             d="M20.128,11.027 C19.193,11.901 17.677,11.901 16.742,11.027 L13.112,7.629 L13.112,13.726 C13.112,14.526 12.464,15.175 11.664,15.175 L9.901,15.175 C9.101,15.175 8.452,14.526 8.452,13.726 L8.452,7.886 L4.897,11.213 C3.928,12.120 2.359,12.120 1.391,11.213 C0.423,10.307 0.423,8.837 1.391,7.932 L8.404,1.368 C9.158,0.662 10.275,0.513 11.190,0.907 C11.949,0.764 12.768,0.967 13.356,1.518 L20.128,7.857 C21.063,8.732 21.063,10.151 20.128,11.027 Z"/>
                                                        </svg>
                                                    </span>
                                                    <span class="icon"><img src="src/images/icons/usdt.png" class="img-fluid"></span>
                                                    USDT
                                                </td>
                                                <td>06:24:45 AM</td>
                                                <td>+$8,553 </td>
                                                <td class="green">Buy</td>
                                            </tr>
                                            <tr>
                                                <td class="black">
                                                    <span class="rating">
                                                        <svg 
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                                             width="20px" height="15px">
                                                            <path fill-rule="evenodd"  fill="rgb(241, 91, 89)"
                                                             d="M19.290,7.093 L12.571,13.226 C11.987,13.760 11.175,13.956 10.421,13.817 C9.513,14.199 8.405,14.055 7.657,13.372 L0.698,7.021 C-0.263,6.144 -0.263,4.722 0.698,3.845 C1.659,2.968 3.215,2.968 4.177,3.845 L7.690,7.052 L7.690,1.448 C7.690,0.648 8.338,-0.000 9.138,-0.000 L10.893,-0.000 C11.693,-0.000 12.341,0.648 12.341,1.448 L12.341,7.302 L15.931,4.026 C16.858,3.180 18.362,3.180 19.290,4.026 C20.218,4.873 20.218,6.246 19.290,7.093 Z"/>
                                                        </svg>
                                                    </span>
                                                    <span class="icon"><img src="src/images/icons/paypal-big.png" class="img-fluid" alt=""></span>
                                                    Paypal
                                                </td>
                                                <td>06:24:45 AM</td>
                                                <td>+$8,553 </td>
                                                <td class="red">Sell</td>
                                            </tr>
                                            <tr>
                                                <td class="black">
                                                    <span class="rating">
                                                        <svg 
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                                             width="21px" height="16px">
                                                            <path fill-rule="evenodd"  fill="rgb(110, 197, 46)"
                                                             d="M20.128,11.027 C19.193,11.901 17.677,11.901 16.742,11.027 L13.112,7.629 L13.112,13.726 C13.112,14.526 12.464,15.175 11.664,15.175 L9.901,15.175 C9.101,15.175 8.452,14.526 8.452,13.726 L8.452,7.886 L4.897,11.213 C3.928,12.120 2.359,12.120 1.391,11.213 C0.423,10.307 0.423,8.837 1.391,7.932 L8.404,1.368 C9.158,0.662 10.275,0.513 11.190,0.907 C11.949,0.764 12.768,0.967 13.356,1.518 L20.128,7.857 C21.063,8.732 21.063,10.151 20.128,11.027 Z"/>
                                                        </svg>
                                                    </span>
                                                    <span class="icon"><img src="src/images/icons/usdt.png" class="img-fluid"></span>
                                                    USDT
                                                </td>
                                                <td>06:24:45 AM</td>
                                                <td>+$8,553 </td>
                                                <td class="green">Buy</td>
                                            </tr>
                                            <tr>
                                                <td class="black">
                                                    <span class="rating">
                                                        <svg 
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                                             width="20px" height="15px">
                                                            <path fill-rule="evenodd"  fill="rgb(241, 91, 89)"
                                                             d="M19.290,7.093 L12.571,13.226 C11.987,13.760 11.175,13.956 10.421,13.817 C9.513,14.199 8.405,14.055 7.657,13.372 L0.698,7.021 C-0.263,6.144 -0.263,4.722 0.698,3.845 C1.659,2.968 3.215,2.968 4.177,3.845 L7.690,7.052 L7.690,1.448 C7.690,0.648 8.338,-0.000 9.138,-0.000 L10.893,-0.000 C11.693,-0.000 12.341,0.648 12.341,1.448 L12.341,7.302 L15.931,4.026 C16.858,3.180 18.362,3.180 19.290,4.026 C20.218,4.873 20.218,6.246 19.290,7.093 Z"/>
                                                        </svg>
                                                    </span>
                                                    <span class="icon"><img src="src/images/icons/paypal-big.png" class="img-fluid" alt=""></span>
                                                    Paypal
                                                </td>
                                                <td>06:24:45 AM</td>
                                                <td>+$8,553 </td>
                                                <td class="red">Sell</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="pills-weekly" role="tabpanel" aria-labelledby="pills-weekly-tab">
                                    
                                </div>
                                <div class="tab-pane fade" id="pills-today" role="tabpanel" aria-labelledby="pills-today-tab">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="tab-pane fade" id="paypall" role="tabpanel" aria-labelledby="paypall-tab">2</div>
                    <div class="tab-pane fade" id="jazzcash" role="tabpanel" aria-labelledby="jazzcash-tab">3</div>
                    <div class="tab-pane fade" id="easypasa" role="tabpanel" aria-labelledby="easypasa-tab">4</div>
                    <div class="tab-pane fade" id="bank" role="tabpanel" aria-labelledby="bank-tab">5</div> -->
                </div>
            </div>
        </div>   
    </div>
    <!-- Dashboard Right Contents -->
</div>

