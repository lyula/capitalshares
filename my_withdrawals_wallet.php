


<div class="col">
    <h6 class="m-b-5 text-white">WITHDRAWALS</h6>
    <h3 class="m-b-0 f-w-700 text-white">Ksh. <?=number_format(sqlValue("SELECT SUM(amount) FROM withdrawals WHERE user_id = '{$user_data['user_id']}' AND status = 'success'"),2);?></h3>
</div>