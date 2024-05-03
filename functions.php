<?php 

function check_login()
{

    if(isset($_SESSION['user_id']))
    {

        $id = $_SESSION['user_id'];
        $query = "select COUNT(*) from users where id = '$id' limit 1";

        $result = sqlValue($query);
        if($result > 0)
        {

            $user_data = sql("select * from users where id = '$id' limit 1", $eo);
            $data=[];
            foreach ($user_data as $key => $value) {
                $data['user_id'] = $value['id'];
                $data['first_Name'] = $value['first_Name'];
                $data['last_Name'] = $value['last_Name'];
                $data['username'] = $value['username'];
                $data['email'] = $value['email'];
                $data['password'] = $value['password'];
                $data['date_joined'] = $value['date_joined'];
                $data['refferal_code'] = $value['refferal_code'];
                $data['reffered_by'] = $value['reffered_by'];
                
            }
            return $data;
        }
    }

    //redirect to login
    header("Location: login.php");
    die;

}

function wallet_balance($user_id,$wallet_type){

    $query = "select available_amount from wallets where user_id = '$user_id' and wallet_type = '$wallet_type' limit 1";
    $result = sqlValue($query);
    return $result;
}