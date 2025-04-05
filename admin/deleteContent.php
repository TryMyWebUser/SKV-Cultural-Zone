<?php

include "../libs/load.php";

// Secure delete operation
if (isset($_GET['delete_id'])) {
    $conn = Database::getConnect();
    
    $delete_id = intval($_GET['delete_id']); // Convert to integer to prevent SQL injection
    $cat = intval($_GET['cate']);
    $qry = $conn->query("SELECT * FROM `cate-content` where `id` = '$delete_id' OR `category` = '$cat'")->fetch_array();
    $cate = $qry['category'];
    $qr = $conn->query("SELECT * FROM `sub-category` WHERE `title` = '$cate'")->fetch_array();
    $qr = $qr['category'];
    $q = $conn->query("SELECT * FROM `category` WHERE `title` = '$qr'")->fetch_array();
    $cate = $q['page'];
    $sql = "DELETE FROM `cate-content` WHERE `id` = '$delete_id' OR `category` = '$cat'";
    $result = $conn->query($sql);
    if ($result) {
        if(!empty($qry['img'])){
            if(is_file($qry['img'])) {
                unlink($qry['img']);
                if ($cate === "class") {
                    header("Location: viewCl_C.php");
                    exit;
                } else {
                    header("Location: viewCo_C.php");
                    exit;
                }
            }
        }
    } else {
        if ($cate === "class") {
            header("Location: viewCl_C.php?error=Failed to delete image");
            exit;
        } else {
            header("Location: viewCo_C.php?error=Failed to delete image");
            exit;
        }
    }
} 

?>