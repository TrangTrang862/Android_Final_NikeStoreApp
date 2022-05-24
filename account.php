<?php
    $query = "SELECT *FROM account";
    $connect = mysqli_connect("localhost","root","","shoe_store");
    $data = mysqli_query($connect,$query) or mysqli_error($connect);
    $array_infor = array();
    while($row = mysqli_fetch_assoc($data)){
        array_push($array_infor, (object)[
                                'id' => $row["id"],
                                'username' => $row["username_png"],
                                'password' => $row['password_png'] 
                            ]);
       }
        echo json_encode($array_infor);   
$connect->close();
?>