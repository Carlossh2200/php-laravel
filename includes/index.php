<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    
    <p>Forms in php</p>
    <form action="includes/formHandler.php" method="post">
        <label for="firstname">First name: </label><br>
        <input id="firstname" type="text" name="firstname" placeholder="First name"><br>
        <label for="lastname">Last name: </label><br>
        <input id="lastname" type="text" id="lastname" lastname="lastname" placeholder="Last name"><br>
        <label for="favoritemascot">Favorite mascot: </label><br>
        <select id="favMascot" name="favMascot">
            <option value="none">None</option>
            <option value="Master Chief">Master Chief</option>
            <option value="Mario">Mario</option>
            <option value="Kratos">Kratos</option>
        </select>
        
        <button type="submit">Submit</button>
    </form>

</body>
</html>