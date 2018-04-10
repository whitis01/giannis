<?php
$result = [];
parse_str($_SERVER['QUERY_STRING'], $result);
$js = 'http://' . $_SERVER['HTTP_HOST'] . '/js/embed.js';
$url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['DOCUMENT_URI'];
//var_dump($result);
?>
<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" async src="<?= $js; ?>"></script>
    <meta property="og:video"            content="https://youtu.be/zjDQYYOPCAY">
    <meta property="og:image"            content="https://img.youtube.com/vi/zjDQYYOPCAY/0.jpg">
    <meta property="og:title"            content="We came to see Giannis!!">
    <meta property="og:description"      content="Giannis Turns 23, so let's celebrate his 34 greatest plays!">
    <meta property="og:url"              content="<?= $url; ?>">
    <meta property="fb:app_id"           content="514918008605706">
    <meta property="og:type"             content="article">
</head>
<body>
<!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
<div id="player"></div>
</body>
</html>

