<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $user=$_REQUEST['user'];
            $pass=$_REQUEST['pass'];
            $con= mysql_connect("localhost","root","");
            mysql_selectdb("vaccorg",$con);
            $qry="select * from login where user='$user'and pass='$pass'";
            $cnt=  mysql_query($qry,$con);
                    if($cnt>0)
                        echo "hello";
        ?>
    </body>
</html>

