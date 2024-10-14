<?php
if (isset($_POST['g-recaptcha-response'])) {
    $secret = 'TU_CLAVE_SECRETA';
    $response = $_POST['g-recaptcha-response'];
    $remoteip = $_SERVER['REMOTE_ADDR'];

    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip";
    $result = file_get_contents($url);
    $result = json_decode($result);

    if ($result->success) {
        echo "reCAPTCHA verified successfully.";
    } else {
        echo "reCAPTCHA verification failed.";
    }
} else {
    echo "reCAPTCHA response is missing.";
}
?>