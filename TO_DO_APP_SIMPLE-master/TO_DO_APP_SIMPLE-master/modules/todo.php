<?php

switch($vars['action']){
    case "list":{
        $items = $db->query('SELECT * FROM items where user_id = ?',$_COOKIE["id"])->fetchAll();
        include("view/header.php");
        include("view/list.php");
        include("view/footer.php");
        exit;
    }break;

    case "do_add":{

        $db->query("INSERT INTO items (title,user_id) VALUES (?,?)",$vars['title'],$_COOKIE["id"]);
        header("location: index.php");
        exit;        
        
    }break;
    
    case "delete":{
        $db->query("DELETE FROM items  WHERE item_id = ? ",$_REQUEST["item_id"]);
        header("location: index.php");

        exit;        
    }break;
    
    case "do_edit":{
        //some code here to edit and save...
        exit;
    }break;
    
    case "help":{
        //some code here to show help 
        exit;
    }break;
    
    
}

?>