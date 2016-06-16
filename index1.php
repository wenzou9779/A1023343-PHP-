<?php
$email = "saowalak9779@gmail.com";


$email = filter_var($email, FILTER_SANITIZE_EMAIL);

if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo(" 大家好this這是is一個a有趣php的字串test");
} else {
    echo(" 大家好this這是is一個a有趣php的字串test");
}
?>