<?php
    require_once '../Auth/RefreshToken.php';
    require_once '../Request/RefreshTokenRequest.php';

    $refreshToken = new RefreshToken();

    $refreshToken->setRefreshToken('39b847f1a7f626ee70e39d3529ce790e6QVAo/IFaFIXmwU4APyTRms3zE/JqpU04qRgZUoyHbSBdtsDJGH1fCeahkDUouSS');

    $refreshTokenRequest = new RefreshTokenRequest('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1aWQiOjMsImlhdCI6MTU3NjI1NjQ1MywiZXhwIjoxNTc4ODQ4NDUzfQ.9HksjlwcvMZamTKaWapylh2aHdxFXFrHYUaa0PRmGis');

    echo('<pre>'. $refreshTokenRequest->send(json_encode($refreshToken)) . '</pre>');
?>