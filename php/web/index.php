<?php
$data ="";
$forms_data = [];
if ($_SERVER['REQUEST_URI'] === '/')
	$data="Hello World";
if ($_SERVER['REQUEST_URI'] === '/feedback') {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['feedback'];
        $feedback = [
            'name' => $name,
            'email' => $email,
            'feedback' => $message,
        ];
        array_push($forms_data, $feedback);
        $data = b"Your feedback submitted successfully.";
    }
}
echo $data;
