<!DOCTYPE html>
<html>
    <body>
        <p><b>Client side and Server side script</b></p>
        <script type = "text/Javascript">
            document.write("Client's date : " +Date()+ "<br/>");
        </script>
        <?php
            date_default_timezone_set("Asia/Culcutta");
            echo "server's date is ".date("Y-m-d");
            echo "The time is ".date("h:i:sa");
        ?>
    </body>
</html>