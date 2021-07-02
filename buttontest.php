<html>
    <head>
    <title>My Online Store</title>

    <body>
        
    <img src="{{ url_for('video_feed') }}">

    <form method="POST" >
        <input name = "update" type="submit" value="update"> Rawr </button>
    </form>

</body>
</html>

<?php

if (isset($_POST['update']))
    {

        //$command_exec = escapeshellcmd('D:/Repos/yolov4-custom-functions/channel_1.py');
        //$str_output = shell_exec($command_exec);
        //echo $str_output;

        exec("python D:/Repos/yolov4-custom-functions/channel_1.py");
        
        #echo "GRR";
    }

?>


