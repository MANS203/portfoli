<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Frist_ASS </title>
</head>
<body>

    <form style="border:rgb(212, 220, 220);">
        <fieldset style="background-color:rgb(118, 5, 255) " >
            <legend style="background-color: blanchedalmond;"> User name </legend>
            <br>
            <div style="background-color: rgb(0, 255, 208);">
              <label for="user"> username </label>
              <input type="text" name="username" id="user" placeholder="username">
              <br>
              <br>
              <label for="mail"> e-mail </label>
              <input type="email " name="e-mail" id="mail" placeholder="ekkkkkk@outlook.com">
              <br>
              <br>
              <label for="****"> password </label>
              <input type="password" name="password" id="****" placeholder="password">
            </div>
            <br>
            <label for="user"><span style="color: rgb(245, 222, 12) ;" > gender</span> </label>
            <br>
            <!-- 
                in radio / checkbox you should named all input the same name but in different values
             -->
            <label> male</label>
            <input type="radio" name="male" value="male" >
            <br>
            <label> female</label>
            <input type="radio" name="female" value="female" >
            <br>
            <label> <h4> the notfication </h4></label>
            <br>
            <input type="checkbox" name="facebook" value="face" >
            <label> facebok</label>
            <br>
            <input type="checkbox" name="sim" value="sim" >
            <label> sim </label>
            <br>
            <input type="checkbox" name="whats" value="whats" >
            <label> whats</label>
            <br>
            <label for="coun"> country </label>
            <select name="country" id="coun">
                <option value="1"> Egypt </option>
                <option value="2"> farnch </option>
                <option value="3"> england</option>
            </select>
            <br>
            <br>
            <label for="comment"> comment</label>
            <br>
            <!-- add name textarea -->
            <textarea cols="5" role="10" id="comment" placeholder="comment"></textarea>
            <br><br>
            <button type="submit"> submit</button>
        </fieldset>
    </form>
    
</body>
</html>