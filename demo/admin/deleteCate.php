<?php

include "../libs/load.php";

// Secure delete operation
if (isset($_GET['delete_id'])) {
    $conn = Database::getConnect();
    
    $delete_id = intval($_GET['delete_id']); // Convert to integer to prevent SQL injection
    $qry = $conn->query("SELECT * FROM `category` where `id` = '$delete_id' ")->fetch_array();
    $cate = $qry['title'];
    $sql = "DELETE FROM `category` WHERE `id` = '$delete_id'";
    $result = $conn->query($sql);
    if ($result) {
        if(!empty($qry['img'])){
            if(is_file($qry['img'])) {
                unlink($qry['img']);
                if ($qry['page'] === "class") {
                    header("Location: deleteSubCl.php?cate=" . $cate);
                    header("Location: viewCl_Cate.php");
                    exit;
                } else {
                    header("Location: deleteSubCo.php?cate=" . $cate);
                    header("Location: viewCo_Cate.php");
                    exit;
                }
            }
        }
    } else {
        if ($qry['page'] === "class") {
            header("Location: viewCl_Cate.php?error=Failed to delete image");
            exit;
        } else {
            header("Location: viewCo_Cate.php?error=Failed to delete image");
            exit;
        }
    }
} 

?>