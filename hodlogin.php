<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <style media="screen">
      body{
        background-image:url('https://png.pngtree.com/thumb_back/fh260/back_our/20190621/ourmid/pngtree-teacher-s-college-classroom-coaching-course-poster-background-image_188494.jpg');
        background-repeat:no-repeat;
        background-size:cover;
        background-attachment:fixed;
        font-style:italic;
      }
      .login{
        width:300px;
        height: 200px;
        text-align: center;
        padding-top: 50px;
        margin:auto;
      }
      .sub{
        height: 25px;
    width: 260px;
    background-color: LemonChiffon;
    border-radius: 20px;
    border: none;
    font-size: 20px;
    border-shadow: 5px 5px;
    box-shadow: 0 2px 4px grey;
      }
    .uname{
      width:250px;
      height: 20px;
      border-radius: 10px;
    }
    </style>
  </head>
  <body>
    <h1 style="color:blue; text-align:center;">Login as HOD</h1>
    <fieldset class="login">
      <legend align="center"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQX-BH0rwTlqY-_4BGCB_EYWt0vkOJkI8aBDQ&usqp=CAU" width="38" height="38"></legend>
      <form name="sform"  class="form" action="hodvalidate.php" method="post">
    		<input type="text" class="uname" name="uname" size="25" placeholder="USERNAME"><br><br>
    		<input type="password"class="uname" name="password" size="25" placeholder="PASSWORD"><br><br>
    	 <input type="submit" name="Submit"  class="sub" value="Submit">
    	</form>
    </fieldset>
  </body>
</html>
