<?php

include "db.php";

// $db = new PDO('mysql:host=localhost;dbname=lesson9', 'student', 'secret_pas/* /* s');

// $insert = $db->prepare("INSERT INTO categories(`title`) VALUES(?)");
// $insert->execute(array('bicycles'));

// $insert = $db->prepare("INSERT INTO categories(`title`) VALUES(?), (?), (?), (?), (?)");
// $insert->execute(array('food','leisure','tech','clothes','auto'));


// $insert = $db->prepare("INSERT INTO users(`name`,`email`,`age`,`birth`) VALUES(:name, :email, :age, :birth)");
// $insert->execute(array('name' => 'Vasiliy', 'email' => 'vaska123@gmail.com', 'age' => 21, 'birth' => '1996-11-30 12:36:00'));

// $insert = $db->prepare("INSERT INTO users SET `name`=?,`email`=?, `age`=?,`birth`=?");
// $insert->execute(array('Grigoriy','grisha@mail.ru','31','1985-6-1 21:01:00'));

// var_dump( $db->lastInsertId() );

// $db->exec("INSERT INTO users SET `name`='Evgen',`email`='gena@yandex.ru', `age`=22,`birth`=DATE('1997-7-15 19:00:00')");

// $categories = $db->query('SELECT * FROM `categories`');

// var_dump( $categories->rowCount() );

// $categories = $categories->fetchAll(PDO::FETCH_ASSOC);

// foreach( $categories as $key => $category ) {
	// print_r($category); echo '<br/>';
// }

// echo '<hr/>';

// $users = $db->query('SELECT * FROM `users`');
// $users = $users->fetchAll(PDO::FETCH_ASSOC);

// foreach($users as $user) {
	// print_r($user); echo '<br/>';
// }

// $db->exec("UPDATE `users` SET `name`='Misha' WHERE `name`='Vasiliy'");

// $insert = $db->prepare("UPDATE `users` SET `name`=? WHERE `name`=?");
// $insert->execute(array('Misha','Grigoriy'));


// $db->exec("DELETE FROM `categories`");
// $db->exec("DELETE FROM `users`");

// $delete = $db->prepare("DELETE FROM `users` WHERE `name`=?");
// $delete->execute(array('Evgen'));


// $newCats = sql($db, 'INSERT INTO categories(`title`) VALUES(?), (?), (?), (?), (?)', ['food','leisure','tech','clothes','auto']);
// var_dump($newCats);

$categories = sql($db, 'SELECT * FROM `categories`', [], 'rows');
var_dump($categories); */ */






