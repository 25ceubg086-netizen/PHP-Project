<html>
  <body style="background-color:gray">
    <h1 style="text-align: center; text-shadow: 0 0 5px blue">
      <i><b>Login As Admin</b></i>
    </h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
     <fieldset style="
          background:linear-gradient(10deg,rgb(100,100,100) ,rgb(255,255,255) );
     ">
       <table
        style="
          width: 100%;
          text-align: left;
          color: black;
          font-style: italic;
          float: s;
          box-shadow: 0 0 5px black;
          text-shadow: 0 0 5px lime;
        "
      >
        <tr>
          <td><label for="name">Name :</label></td>
          <td><input type="text" name="name" id="name" required /></td>
        </tr>
        <tr style="border: 1px solid">
          <td><label for="pwd">Password :</label></td>
          <td><input type="password" name="pwd" id="pwd" required /></td>
        </tr>
      </table>
      <input
        type="submit"
        id="submit_admin"
        style="margin-top: 4px; box-shadow: 0 0 7px gold"
      />
      <input
        type="reset"
        id="reset"
        style="margin-top: 4px; box-shadow: 0 0 7px #f00"
      />
     </fieldset>
    </form>
    <a href="index.php" style="box-shadow: 0 0 5px black">
      <button>Login As User</button>
    </a>
  </body>

 
</html>
<?php 
require_once('config.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    { 
      setcookie('un',$_POST['name'],time() + 3600);
      setcookie('pwd',$_POST['pwd'],time() + 3600);
      setcookie('utype','admin',time() + 3600);
      header('location:validate.php?login=admin');  
    } 
?>
