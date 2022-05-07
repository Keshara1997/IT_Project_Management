<?php 
    require_once("../include/initialize.php");
    require_once ("../include/connection.php");
    require_once("inc/redirect2.php");
    $CID = $_SESSION['STCID'];
                                                
    $result = $mysqli->query("SELECT * FROM tblive WHERE CID=$CID") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):
        $link = $row['LINK'];
    endwhile;



 
?>




<html>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# zoomvideocall: http://ogp.me/ns/fb/zoomvideocall#">
<meta charset="utf-8">
<meta name="referrer" content="origin-when-cross-origin">
<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0">
<title>Launch Meeting - Zoom</title>
<meta name="keywords" content="zoom, zoom.us, video conferencing, video conference, online meetings, web meeting, video meeting, cloud meeting, cloud video, group video call, group video chat, screen share, application share, mobility, mobile collaboration, desktop share, video collaboration, group messaging">
<meta name="description" content="Zoom is the leader in modern enterprise video communications, with an easy, reliable cloud platform for video and audio conferencing, chat, and webinars across mobile, desktop, and room systems. Zoom Rooms is the original software-based conference room solution used around the world in board, conference, huddle, and training rooms, as well as executive offices and classrooms. Founded in 2011, Zoom helps businesses and organizations bring their teams together in a frictionless environment to get more done. Zoom is a publicly traded company headquartered in San Jose, CA.">
<meta name="robots" content="noindex,nofollow">
<meta property="og:type" content="activity">
<meta property="og:title" content="Join our Cloud HD Video Meeting">
<meta property="og:description" content="Zoom is the leader in modern enterprise video communications, with an easy, reliable cloud platform for video and audio conferencing, chat, and webinars across mobile, desktop, and room systems. Zoom Rooms is the original software-based conference room solution used around the world in board, conference, huddle, and training rooms, as well as executive offices and classrooms. Founded in 2011, Zoom helps businesses and organizations bring their teams together in a frictionless environment to get more done. Zoom is a publicly traded company headquartered in San Jose, CA.">
<meta property="og:url" content="https://us02web.zoom.us/j/4802849437?pwd=VHVpV3NnVFNRNDFEaUZKN2ZrdXhvZz09">
<meta property="og:site_name" content="Zoom Video">
<meta property="fb:app_id" content="113289095462482">
<meta property="twitter:account_id" content="522701657">
<script nonce="jPsp2BCxR0-z1mnuoKfI_g" src="/lres"></script>
<link rel="shortcut icon" href="/zoom.ico">
</head>
<body>
    <embed type="text/html" src="<?php echo $link; ?>" width="100%" height="100%">



<script nonce="jPsp2BCxR0-z1mnuoKfI_g" id="__ada" data-handle="zoom" src="https://static.ada.support/embed.js"></script>
</body>

</html>