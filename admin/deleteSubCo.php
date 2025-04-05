<?php

include "../libs/load.php";

// Secure delete operation
if (isset($_GET['delete_id'])) {
    $conn = Database::getConnect();
    
    $delete_id = intval($_GET['delete_id']); // Convert to integer to prevent SQL injection
    $cate = intval($_GET['cate']);
    $qry = $conn->query("SELECT * FROM `sub-category` where `id` = '$delete_id' OR `category` = '$cate'")->fetch_array();
    $cate = $qry['title'];
    $sql = "DELETE FROM `sub-category` WHERE `id` = '$delete_id' OR `category` = '$cate'";
    $result = $conn->query($sql);
    if ($result) {
        if(!empty($qry['img'])){
            if(is_file($qry['img'])) {
                unlink($qry['img']);
                header("Location: deleteContent.php?cate=" . $cate);
                header("Location: viewCo_Sub.php");
                exit;
            }
        }
    } else {
        header("Location: viewCo_Sub.php?error=Failed to delete image");
        exit;
    }
} 

?>