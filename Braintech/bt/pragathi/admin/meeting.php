<?php
    require_once("../include/initialize.php");
    require_once ("../include/connection.php");
    require_once("inc/redirect.php");
                                                    $CID = $_SESSION['CID'];
                                                    $count = 0;
                                                    $select = 0;
                                                    $result = $mysqli->query("SELECT * FROM tblive WHERE CID=$CID") or die($mysqli->error);
                                                    while ($row = $result->fetch_assoc()):
                                                        $select = 1;
                                                        $LiveID = $row['LID'];
                                                        $Title = $row['TITLE'];
                                                        $Link = $row['LINK'];
                                                    endwhile;

                                                    
                                                ?> 
<html>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# zoomvideocall: http://ogp.me/ns/fb/zoomvideocall#">

<title>Launch Meeting - Zoom</title>

</head>
<body>
    <embed type="text/html" src="<?php echo $Link; ?>" width="100%" height="100%">



<script nonce="jPsp2BCxR0-z1mnuoKfI_g" id="__ada" data-handle="zoom" src="https://static.ada.support/embed.js"></script>
</body>

</html>