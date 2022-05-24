<?php
    $query = "SELECT *FROM newrealeses";
    $connect = mysqli_connect("localhost","root","root","shoe_store");
    $data = mysqli_query($connect,$query) or mysqli_error($connect);
    $array_infor = array();
    while($row = mysqli_fetch_assoc($data)){
        array_push($array_infor, (object)[
                                'id' =>(int) $row["id"],
                                'name' => $row['name'],
                                'imgJpg' => $row["imgUrl_jpg"],
                                'imgPng' => $row['imgUrl_png'],
                                'gender' => $row['gender'],
                                'price' => (int)$row['price'],
                                'description' => $row['description'],
                                'rating' =>(int) $row['rating']
                            ]);
       }
        echo json_encode($array_infor);   
$connect->close();
?>