<?php
    $query = "SELECT *FROM bestseller";
    $connect = mysqli_connect("localhost","root","root","shoe_store");
    $data = mysqli_query($connect,$query) or mysqli_error($connect);
    $array_infor = array();
    while($row = mysqli_fetch_assoc($data)){
        array_push($array_infor, (object)[
                                'id' =>(int) $row["id"],
                                'imgJpg' => $row["imgUrl_jpg"],
                                'imgPng' => $row['imgUrl_png'],
                                'name' => $row['name'],
                                'price' => (int)$row['price'],
                                'rating' =>(int) $row['rating'],
                                'description' =>$row['description'],
                                'type' => $row['type']  
                            ]);
       }
        echo json_encode($array_infor);   
$connect->close();
?>