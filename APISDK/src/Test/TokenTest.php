<?php
    require_once '../Auth/Token.php';
    require_once '../Request/TokenRequest.php';

    $token = new Token();

    $token->setRefreshToken('efd858e612015242a25b000b8b19bb76YZMm567WOFsrYqcxsZK/9jKI7Zd2b2Fokw4Vvw2w/SB7Jvwz2uTy0+98oCbYsLGK');

    $tokenRequest = new TokenRequest('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1aWQiOjMsImlhdCI6MTU3NjI1NzExMSwiZXhwIjoxNTc4ODQ5MTExfQ.R3RWh7ukCJUCzzZ7t6V1dOO43YLfc6fmOREu0JgFCTo');

    echo('<pre>'. $tokenRequest->send(json_encode($token)) . '</pre>');
?>