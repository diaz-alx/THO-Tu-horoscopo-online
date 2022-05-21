<?php
function getEdad($date) {
    return intval(date('Y', time() - strtotime($date))) - 1970;
}
?>