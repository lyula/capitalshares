<div class="col-xl-12">
    <div class="card product-progress-card">
        <div class="card-block">
            <div class="row pp-main">
                <div class="col-xl-3 col-md-6">
                    <div class="pp-cont">
                        <div class="row align-items-center m-b-20">
                            <div class="col-auto">
                                <i class="far fa-credit-card f-24 text-mute"></i>
                            </div>
                            <div class="col text-end">
                                <h4 class="m-b-0 text-c-blue">KES
                                    <?= number_format(sqlValue("SELECT SUM(amount) FROM deposits WHERE user_id = '{$user_data['user_id']}' AND status = 'success'"), 2); ?>
                                </h4>
                            </div>
                        </div>
                        <div class="row align-items-center m-b-15">
                            <div class="col-auto">
                                <p class="m-b-0">Deposits</p>
                            </div>
                            <div class="col text-end">
                                <p class="m-b-0 text-c-blue"><button data-bs-toggle="modal" data-bs-target="#myModal"
                                        class="fixmodal btn btn-success btn-sm">Deposit</button></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="pp-cont">
                        <div class="row align-items-center m-b-20">
                            <div class="col-auto">
                                <i class="far fa-money-bill-alt f-24 text-mute"></i>
                            </div>
                            <div class="col text-end">
                                <h5 class="m-b-0 text-c-yellow">KES
                                    <?= number_format(sqlValue("SELECT SUM(amount) FROM withdrawals WHERE user_id = '{$user_data['user_id']}' AND status = 'success'"), 2); ?>
                                </h5>
                            </div>
                        </div>
                        <div class="row align-items-center m-b-15">
                            <div class="col-auto">
                                <p class="m-b-0">Withdrawals</p>
                            </div>
                            <div class="col text-end">
                            <p class="m-b-0 text-c-yellow"><i class="fas fa-long-arrow-alt-up m-r-10"></i></p>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-c-yellow" style="width:65%"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="pp-cont">
                        <div class="row align-items-center m-b-20">
                            <div class="col-auto">
                                <i class="fas fa-hand-holding-usd f-24 text-mute"></i>
                            </div>
                            <div class="col text-end">
                                <h5 class="m-b-0 text-c-red">KES
                                    <?= number_format(wallet_balance($user_data['user_id'], "Wallet"), 2); ?></h5>
                            </div>
                        </div>
                        <div class="row align-items-center m-b-15">
                            <div class="col-auto">
                                <p class="m-b-0"> Wallet</p>
                            </div>
                            <div class="col text-end">
                                <p class="m-b-0 text-c-yellow">
                                    <button data-bs-toggle="modal" data-bs-target="#myModal2"
                                        class="fixmodal btn btn-danger btn-sm">Withdraw</button>
                                </p>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="pp-cont">
                        <div class="row align-items-center m-b-20">
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign f-24 text-mute"></i>
                            </div>
                            <div class="col text-end">
                                <h5 class="m-b-0 text-c-green">KES
                                    <?= number_format(wallet_balance($user_data['user_id'], "Trading Wallet"), 2); ?></h5>
                            </div>
                        </div>
                        <div class="row align-items-center m-b-15">
                            <div class="col-auto">
                                <p class="m-b-0">Trading wallet</p>
                            </div>
                            <div class="col text-end">
                                <p class="m-b-0 text-c-green"><i class="fas fa-long-arrow-alt-up m-r-10"></i></p>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-c-green" style="width:35%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- deposit modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Deposit to Trading Wallet</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form id="depositForm" style="text-align: center;" method="post" action="">
                    <div style="margin-bottom: 10px;">
                        <label for="phone">Phone Number:</label><br>
                        <input type="text" id="depositPhone" name="phone" required>
                    </div>
                    <div>
                        <label for="amount">Amount:</label><br>
                        <input type="text" id="depositAmount" name="amount" required>
                    </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="submit" name="deposit" class="btn btn-success" data-bs-dismiss="modal">Confirm</button>
            </div>
            </form>
        </div>
    </div>
</div>


<!-- Deposit form subission php/mySQL code -->


<!-- Deposit form subission php/mySQL code -->

<!-- depo/withdraw modals -->
<div class="modal" id="myModal2">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Withdraw</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form id="depositForm" style="text-align: center;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div style="margin-bottom: 10px;">
                        <label for="phone">Phone Number:</label><br>
                        <input type="text" id="withdrawPhone" name="phone" required>
                    </div>
                    <div>
                        <label for="amount">Amount:</label><br>
                        <input type="text" id="withdrawAmount" name="amount" required>
                    </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="submit" name="withdraw" class="btn btn-success" data-bs-dismiss="modal">Confirm</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
        // Find all elements with the class fixmodal
        var modalButtons = document.querySelectorAll('.fixmodal');
        // Add click event listener to each element with the class fixmodal
        modalButtons.forEach(function (modalButton) {
            modalButton.addEventListener('click', function () {
                // Find the div with class modal-backdrop show
                var backdrop = document.querySelector('.modal-backdrop.show');

                // Check if such element exists
                if (backdrop) {
                    // Remove the show class
                    backdrop.classList.remove('modal-backdrop');
                    backdrop.classList.remove('show');
                }
            });
        });

    </script>

    <?php
if(isset($_POST["deposit"])){
    $phone=$_POST['phone'];
    $amount=$_POST['amount'];
    if($amount<1000){
        echo "<script>Swal.fire({
            title: 'Error!',
            text: 'Amount cannot be less than KES 1,000',
            icon: 'error',
            confirmButtonText: 'Cool'
          })</script>";
    }
    else{
        $user_id=$user_data['user_id'];
        $username=$user_data['username'];
        $date=date('Y-m-d');
        $current_balance=wallet_balance($user_data['user_id'], "Trading Wallet");
        $new_balance=($current_balance+$amount);
        sql("INSERT INTO deposits SET user_id='$user_id',amount='$amount',phone_number='$phone',date='$date',status='success'",$eo);
        sql("UPDATE wallets SET available_amount='$new_balance' WHERE user_id='$user_id' AND wallet_type='Trading Wallet'",$eo);
        echo "<script>Swal.fire({
            title: 'Congratulations ".$username."',
            text: 'Your deposit was successful',
            icon: 'success',
            confirmButtonText: 'Cool'
          })</script>";
    }
}
?>
<?php
if(isset($_POST["withdraw"])){
    $phone=$_POST['phone'];
    $amount=$_POST['amount'];
    if($amount<1000){
        echo "<script>Swal.fire({
            title: 'Error!',
            text: 'Amount cannot be less than KES 1,000',
            icon: 'error',
            confirmButtonText: 'Cool'
          })</script>";
    }
    else{
        $user_id=$user_data['user_id'];
        $username=$user_data['username'];
        $date=date('Y-m-d');
        $current_balance=wallet_balance($user_data['user_id'], "Wallet");
        $new_balance=($current_balance-$amount);
        sql("INSERT INTO withdrawals SET user_id='$user_id',amount='$amount',phone_number='$phone',date='$date',status='success'",$eo);
        sql("UPDATE wallets SET available_amount='$new_balance' WHERE user_id='$user_id' AND wallet_type='Wallet'",$eo);
        echo "<script>Swal.fire({
            title: 'Congratulations ".$username."',
            text: 'Your withdrawal was successful',
            icon: 'success',
            confirmButtonText: 'Cool'
          })</script>";
    }
}
?>