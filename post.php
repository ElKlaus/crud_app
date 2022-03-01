<?php

$data = [
  "title" => $_POST['title'],
  "content" => $_POST['content']
];

$connection = new PDO('mysql:host=localhost;dbname=crud_app','root', 'root');

$sql = 'INSERT INTO users (first_name, last_name, phone, email) VALUES (:title, :content, null, null)';

$statement = $connection -> prepare($sql);

$result = $statement -> execute($data);

var_dump($result);