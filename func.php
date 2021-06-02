<?php

include 'config.php';

$name = $_POST['name'];
$last_name = $_POST['last_name'];
$pos = $_POST['pos'];

// Create
if (isset($_POST['submit'])) {
    $sql = ("INSERT INTO `users`(`name`, `last_name`, `pos`) VALUES(?,?,?)");
    $query = $pdo->prepare($sql);
    $query->execute([$name, $last_name, $pos]);
    $success = '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Данные успешно отправлены!</strong> Вы можете закрыть это сообщение.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
} else {
    echo 'error';
}
