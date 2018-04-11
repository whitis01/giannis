<?php
$result = [];
parse_str($_SERVER['QUERY_STRING'], $result);
$js = 'http://' . $_SERVER['HTTP_HOST'] . '/js/embed.js';
$url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['DOCUMENT_URI'];
//var_dump($result);
?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
<head>
    <link rel="shortcut icon" href="/public/assets/buck.png">
    <script type="text/javascript" async src="<?= $js; ?>"></script>
    <meta name="twitter:card"            content="player"/>
    <meta name="twitter:title"           content="Giannis Top 34"/>
    <meta name="twitter:site"            content="@VivialMedia" />
    <meta name="twitter:description"     content="Giannis Turns 23, We Go For 34!!"/>
    <meta name="twitter:creator"         content="@vivial_a" />
    <meta name="twitter:player"          content="https://www.youtube.com/embed/kmblhEj9BSA"/>
    <meta name="twitter:player:width"    content="480"/>
    <meta name="twitter:player:height"   content="240"/>
    <meta name="twitter:image"           content="https://i.ytimg.com/vi/kmblhEj9BSA/maxresdefault.jpg"/>
    <meta property="og:video:secure_url" content="https://youtu.be/kmblhEj9BSA" />
    <meta property="og:video:width"      content="480" />
    <meta property="og:video:height"     content="240" />
    <meta property="og:title"            content="We came to see Giannis!!">
    <meta property="og:description"      content="Giannis Turns 23, so let's celebrate his 34 greatest plays!">
    <meta "property:image"           content="https://i.ytimg.com/vi/kmblhEj9BSA/maxresdefault.jpg"/>
    <meta property="og:url"              content="<?= $url ?>">
    <meta property="fb:app_id"           content="514918008605706">
    <meta property="og:type"             content="article">
</head>
<body>
<!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
<div id="player"></div>
</body>
</html>

