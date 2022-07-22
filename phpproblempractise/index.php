<!DOCTYPE html>
<html>
    <head>
        <title>PHP Problems</title>
    </head>
    <body>
        <h1>This is my php problem practise page.</h1>
        <?php
            echo "<p>Hello World</p>"
        ?>
        <?php
            if ($strpos ($_SERVER ['HTTP_USER_AGENT'], 'MSIE') !==FALSE)
            {echo 'You are using Internet Explorer.'; }
            else ($strpos ($_SERVER ['HTTP_USER_AGENT'], 'MSIE') !==TRUE)
            {echo 'You are not using Internet Explorer.';}
        
        ?>

    </body>

    
</html>