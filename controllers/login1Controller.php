<?php
    session_start();
    if (file_exists("../Db/Con1Db.php")){
        require_once "../Db/Con1Db.php";
        }
        elseif(file_exists("./Db/Con1Db.php")){
        require_once "./Db/Con1Db.php";
        }
        $conexion = Connection::conn1();
    $username = empty($_POST['username']) ? '' : $_POST['username'];
    $password = empty($_POST['password']) ? '' : $_POST['password'];
    $password2="";
    if($username=="" || $password =="")
    {
        header('Location: ../index.php');
    }


    if($stmt = $conexion->prepare('SELECT Id_Empleado,Contrasena FROM Empleados WHERE Usuario = ?'))
    {

        $stmt->bind_param('s', $username);
        $stmt->execute();
    }

    $stmt->store_result();
    if($stmt->num_rows > 0)
    {
        $stmt->bind_result($id,$password2);
        $stmt->fetch();

        if($password === $password2)
        {

            session_regenerate_id();
            $_SESSION['loggedin'] = true;
            $_SESSION['name'] = $username;
            $_SESSION['id'] = $id;
            header('Location: ../inicio.php');
        }
        else
        {
            header('Location: ../index.php');
        }
    }
    else
    {
        header('Location: ../index.php');
    }

?>
