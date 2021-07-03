<?php
if (isset($_SESSION['response'])) {
    $type = $_SESSION['response']['type'];
    echo '<div class="alert alert-' . $type . '">' . $_SESSION['response']['message'] . '</div>';
    echo '<div class="alert alert-' . $type . '">' . APP_URI . '/' . $_SESSION['response']['data'] . '</div>';
    unset($_SESSION['response']);
}