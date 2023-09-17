<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $name=$_REQUEST['name'];
            $mobile=$_REQUEST['mobile'];
            $user=$_REQUEST['user'];
            $pass=$_REQUEST['pass'];
            $age=$_REQUEST['age'];
            $dob=$_REQUEST['dob'];
            $gender=$_REQUEST['gender'];
            $con= mysql_connect("localhost","root","");
            mysql_selectdb("vaccorg",$con);
            $qry="insert into login values('$name','$mobile','$user','$pass','$age','$dob','$gender')";
            $cnt=  mysql_query($qry,$con);
                    if($cnt>0)
                        echo "saved";
        ?>
    </body>
</html>
