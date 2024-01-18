<?php
if (isset($_POST['send_message'])) {
    include_once 'classes.php';
    $msg_room = new CHAT();  
    $message = $_POST['send_message'];
    $sql = "INSERT INTO room_chat (message) VALUES ('$message')";
    $msg_room->insert($sql);
    $msg_room->select_msg();

}