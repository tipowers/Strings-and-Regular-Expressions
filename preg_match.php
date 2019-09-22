<?php
    $pattern = '/\w+\\(?:\..{2,3})?(?:$|(?=\/))/i';
    $url = 'http://sdev253.net/home.html';
    if (preg_match($pattern, $url, $matches) === 1) {
        echo $matches[0];
    }
?>