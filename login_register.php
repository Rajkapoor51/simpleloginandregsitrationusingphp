<?php 

require('connection.php');

// For Login
session_start();


if(isset($_POST['login'])){
    $query="SELECT * FROM `user` WHERE `email`='$_POST[email]'";

    $login_result=mysqli_query($con, $query);

    if(mysqli_num_rows($login_result)==1){
        $result_fetch=mysqli_fetch_assoc($login_result);
        
        if(password_verify($_POST['password'],$result_fetch['password']))
        {
            $_SESSION['logged_in']=true;
            $_SESSION['email']=$result_fetch['email'];
            $_SESSION['name']=$result_fetch['name'];
            $_SESSION['dob']=$result_fetch['dob'];
            $_SESSION['country']=$result_fetch['country'];
            header("Location: dashboard.php");


        }else{
            echo "<script>alert('Incorrect Password')
        window.location.href='login.php'</script>;
        ";

        }
    }else{
        echo "<script>alert('Email is Incorrect')
        window.location.href='login.php'</script>;
        ";
    }
   }


// For register
if(isset($_POST['register'])){
    $user_exist="SELECT * from `user` WHERE `email`='$_POST[email]'";
    $result=mysqli_query($con, $user_exist);

    if($result){
        if(mysqli_num_rows($result)>0){
            // user already exist
            $result_fetch=mysqli_fetch_assoc($result);
            if($result_fetch['email']==$_POST['email']){
                echo "<script>alert('Already registered')
                window.location.href='register.php'</script>";

            }else{
                echo "<script>alert('Email already Exist')
                window.location.href='register.php';</script>;
                ";

            }

        }
        else{
            $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
            $vs_code=bin2hex(random_bytes((16)));
            $query="INSERT INTO `user`(`name`, `dob`, `email`, `password`, `country`, `varification_code`, `is_varified`) VALUES ('$_POST[name]','$_POST[dob]','$_POST[email]','$password','$_POST[country]', '$vs_code', '0')";
            if(mysqli_query($con, $query) ){
                $_SESSION['logged_in']=true;
                $_SESSION['email']=$_POST['email'];
                $_SESSION['name']=$_POST['name'];
                $_SESSION['dob']=$_POST['dob'];
                $_SESSION['country']=$_POST['country'];
                // header("Location: dashboard.php");
                echo "<script>alert('Registered successfully')
                window.location.href='dashboard.php';</script>;
                ";

            }else{
                echo "<script>alert('email atready taken')
                window.location.href='login.php';</script>;
                ";

            }

        }
        

    }else{
        echo "<script>alert('Server Down')
        window.location.href='login.php'</script>;
        ";
    }
};

?>