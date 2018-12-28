<!doctype html>
<html>
<head>
    <title>Phonebook</title>
    <link rel='stylesheet' href="css/style.css">
</head>
<body>
    <div id='wrap'>
        <div id='search'>
            <img src='img/add.png'>
            <a href='index.php'><img src='img/search.png' height='50px' title='Search contact'></a>
            <a href='remove.php'><img src='img/remove.png' height='50px' title='Remove contact'></a>
            <form action='#' method='post'>
                <label>First name:</label><br>
                <input type='text' name='fname' ><br>
                <label>Last name:</label><br>
                <input type='text' name='lname' ><br>
                <label>Tel:</label><br>
                <input type='text' name='tel'><br>
                
                <input type='submit' name='insert' value='Insert'><br>
            </form>
        </div>
        <div id='message'>
            <?php
                if (isset($_POST['insert'])) {
                    if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['tel'])) {
                        if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['tel'])) {
                            $fname = trim($_POST['fname']);
                            $lname = trim($_POST['lname']);
                            $tel = trim($_POST['tel']);
                            require 'inc/connect.php';
                            $fname = mysqli_real_escape_string($conn, $fname);
                            $lname = mysqli_real_escape_string($conn, $lname);
                            $tel = mysqli_real_escape_string($conn, $tel);

                            $query = "INSERT INTO contacts (fname, lname, tel) VALUES ('$fname}', '{$lname}', '{$tel}')";
                            if (mysqli_query($conn, $query) === TRUE) {
                                echo 'New record succesfully created.';
                            } else {
                                echo 'Error!';
                            }
                        } else {
                            echo 'All fileds must be filled in.';
                        }
                    }
                } else {
                    echo 'All parameters must be sent!';
                }
            ?>
        </div>
    </div>
</body>
</html>