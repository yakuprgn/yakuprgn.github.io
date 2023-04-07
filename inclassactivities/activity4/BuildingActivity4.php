<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> BuildingActivity4 Php file </title>

    </head>
    <body>
        <h1>Registration Form</h1>
        <form action="BuildingActivity4-preview.php" method="post">
            Name: <input type="text" name="name" id="name"><br><br>

            Username: <input type="text" name="username" id="username"><br><br>

            Password: <input type="password" name="password" id="password"><br><br>

            Address: <input type="text" name="address" id="address"><br><br>

            Country: 
            <select name="country-list" id="country-list">
                <option value="none">(Please select a country)</option>
                <option value="Türkiye">Türkiye</option>
                <option value="Italy">Italy</option>
                <option value="France">France</option>
                <option value="Germany">Germany</option>
            </select><br><br>

            ZIP Code: 
            <input type="text" name="zipcode" id="zipcode"><br><br>

            Email: <input type="email" name="email" id="email"><br><br>

            Sex: 
            <input type="radio" name="sex" id="sex" value="Male">Male
            <input type="radio" name="sex" id="sex" value="Female">Female<br><br>

            Language: 
            English<input type="checkbox" name="languages[]" id="language" value="English">
            French<input type="checkbox" name="languages[]" id="language" value="French">
            German<input type="checkbox" name="languages[]" id="language" value="German"><br><br>

            <label>About :</label>
            <textarea name="about" id="about" cols="24" rows="6"></textarea><br><br>

            <input type="submit" value="Submit" id="submit-btn">
        </form>
    </body>

</html>