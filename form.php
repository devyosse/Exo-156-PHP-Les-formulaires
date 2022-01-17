

<?php
$prenom = $_POST['username'];

echo "Username: " . $_POST['username'] . "<br>";

if ($prenom == "james"){
    echo "Bond, James Bond";
}
else if($prenom !== "james"){
    echo "Bonjour $prenom";
}

/**
 * if(isset($_GET)){
    echo "Username: " . $_POST["username"] ."<br>";

}
 **/