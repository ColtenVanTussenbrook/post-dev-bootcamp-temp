<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    validate_input($_POST["name"], $_POST["email"]);
}

function validate_input($name, $email) {

    if (empty($name)) {
        echo "Please enter your name (characters only)";
        return;
    } else {
        if (ctype_alpha(str_replace(' ', '', $name)) === false) {
            echo 'Name must contain letters and spaces only';
            return;
          }
    }

    if (empty($email)) {
        echo "Please enter your name (characters only)";
        return;
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
            return;
          }
    }

    echo "name: " . $name;
    echo "<br>";
    echo "email: " . $email;

}


?>