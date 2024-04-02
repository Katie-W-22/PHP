<?php
//safe inputs
//htmlspecialchars() function converts special characters to HTML entities. This means that it will replace characters like < and > with &lt and &gt for security purposes.
if(isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    echo $name;
    echo $age;
}

//could also use filter_input() function eg
    /*$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_Special_CHARS);*/

//OR you could use filter_var() function eg
    /*$name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);*/
?>

<form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age</label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>
