<!doctype html>

<html>
	<head>
<!--
	    exercise_02_05_01
	    Author: Nathan Howard
	    Date: 10.2.18
	    Filename: FileDownloader.php
-->
		<title>File Download Error</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <p>There was an error downloading "
            <?php
                echo htmlentities($_GET['fileName']);
            ?>    
        "</p>
        <p>
            <?php
                echo htmlentities($errorMsg);
            ?>
        </p>
        <?php
            $dir = "../exercise_02_01_01";
            if (isset($_GET['fileName'])) {
                     
            } else {
                $errorMsg = "No filename specified.";
                $showErrorPage = true;
            }
            if ($showErrorPage) {
                ?>
                <?php
            }
        ?>
	</body>
</html>