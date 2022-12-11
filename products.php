<?php
    require('opencon.php');
    $strsql = "SELECT * FROM tbl_products";
    function viewRS($con, $strsql){
        $rs = [];
        $i = 0;
        if($stmt = mysqli_query($con, $strsql)){
            if(mysqli_num_rows($stmt) == 1){
                $record = mysqli_fetch_array($stmt);
                foreach($record as $key => $value){
                    $rs[$key] = $value;
                }
            }
            elseif(mysqli_num_rows($stmt) > 1){
                while($record = mysqli_fetch_array($stmt)){
                    foreach($record as $key => $value){
                        $rs[$i][$key] = $value;
                    }
                    $i++;
                }
            }
            mysqli_free_result($stmt);
        }
        return $rs;
    }
    
    $arrProducts = viewRS($con,$strsql);
    require('closecon.php');
     $arrProducts = array(         array(
            'item' => "Black Slit Dress",
             'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima itaque deleniti in dignissimos atque amet corrupti laborum illum voluptates aliquam.",
             'price' => "560",
            'img1' => "item1A.jpg",
            'img2' => "item1B.jpg"
         ),
         array(
             'item' => "Checkered Dress",
             'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima itaque deleniti in dignissimos atque amet corrupti laborum illum voluptates aliquam.",
             'price' => "500",
             'img1' => "item2A.jpg",
             'img2' => "item2B.jpg"
         ),
         array(
             'item' => "Floral Short Dress",
             'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima itaque deleniti in dignissimos atque amet corrupti laborum illum voluptates aliquam.",
             'price' => "600",
             'img1' => "item3A.jpg",
             'img2' => "item3B.jpg"
         ),
         array(
             'item' => "Green Dress",
             'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima itaque deleniti in dignissimos atque amet corrupti laborum illum voluptates aliquam.",
             'price' => "450",
             'img1' => "item4A.jpg",
             'img2' => "item4B.jpg"
         ),
         array(
             'item' => "Mint Puff Dress",
             'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima itaque deleniti in dignissimos atque amet corrupti laborum illum voluptates aliquam.",
             'price' => "800",
             'img1' => "item5A.jpg",
             'img2' => "item5B.jpg"
         ),array(
             'item' => "Orange Dress",
             'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima itaque deleniti in dignissimos atque amet corrupti laborum illum voluptates aliquam.",
             'price' => "780",
             'img1' => "item6A.jpg",
             'img2' => "item6B.jpg"
         ),
         array(
             'item' => "Simple White Dress",
             'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima itaque deleniti in dignissimos atque amet corrupti laborum illum voluptates aliquam.",
             'price' => "300",
             'img1' => "item7A.jpg",
             'img2' => "item7B.jpg"
         ),
         array(
             'item' => "White Slit Dress",
             'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima itaque deleniti in dignissimos atque amet corrupti laborum illum voluptates aliquam.",
             'price' => "480",
             'img1' => "item8A.jpg",
             'img2' => "item8B.jpg"
         )
     )



 ?>