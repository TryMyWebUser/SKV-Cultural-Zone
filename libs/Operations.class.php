<?php

class Operations
{

    public static function getCategory()
    {
        $conn = Database::getConnect();
        $sql = "SELECT * FROM `category` ORDER BY `created_at` ASC";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }
    public static function getSubCategory($cate)
    {
        $conn = Database::getConnect();

        // Join category and sub-category tables
        $sql = "SELECT sub.* FROM `sub-category` sub 
                INNER JOIN `category` cat ON sub.category = cat.title 
                WHERE cat.page = '$cate'";
        
        $result = $conn->query($sql);

        return iterator_to_array($result);
    }
    public static function getESubCategory($cate, $conn)
    {
        // Join category and sub-category tables
        $sql = "SELECT sub.* FROM `sub-category` sub 
                INNER JOIN `category` cat ON sub.category = cat.title 
                WHERE cat.page = '$cate'";
        
        $result = $conn->query($sql);

        return iterator_to_array($result);
    }
    public static function getCateChecker($conn)
    {
        $sql = "SELECT * FROM `category` ORDER BY `id` ASC";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }
    public static function getSubCateChecker($conn)
    {
        $sql = "SELECT * FROM `sub-category` ORDER BY `created_at` ASC";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }
    public static function getSubCategoryChecker($conn)
    {
        $getData = $_GET['data'];
        $sql = "SELECT * FROM `sub-category` WHERE `category` = '$getData'";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }
    public static function getContentChecker($conn)
    {
        $sql = "SELECT * FROM `cate-content` ORDER BY `created_at` ASC";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }
    
    public static function getCate($conn)
    {
        $getID = $_GET['edit_id'];
        $sql = "SELECT * FROM `category` WHERE `id` = '$getID'";
        $result = $conn->query($sql);
        return $result ? $result->fetch_assoc() : null;
    }
    public static function getSubCate($conn)
    {
        $getID = $_GET['edit_id'];
        $sql = "SELECT * FROM `sub-category` WHERE `id` = '$getID'";
        $result = $conn->query($sql);
        return $result ? $result->fetch_assoc() : null;
    }
    public static function getContent($conn)
    {
        $getID = $_GET['edit_id'];
        $sql = "SELECT * FROM `cate-content` WHERE `id` = '$getID'";
        $result = $conn->query($sql);
        return $result ? $result->fetch_assoc() : null;
    }
}

?>