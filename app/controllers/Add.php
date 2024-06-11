<?php


$id = '';
$title = '';
$img = '';


// Код для формы создания записи
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_post'])){


    $title = trim($_POST['title']); 
    $price = trim($_POST['price']);
    $post = [
            'title' => $title,          
            'img' => $_POST['img'],           
            'price' => $publish,
           
        ];
        print("+");
        $post = insert('arders', $post);
        $post = selectOne('orders', ['id' => $id] );
    
   
    }
else{
    $id = '';
    $title = '';
    $price = '';
}
