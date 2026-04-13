<?php
require_once('config.php');
    if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['SIGNUP'])){
        echo "<form action='signup.php' method='POST'>
        <input type='submit' value='SIGNUP ?'/>
        ";
    }
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        echo '
        <h1 style="text-align: center; text-shadow: 0 0 5px blue">
      <i><b>SIGNUP</b></i>
    </h1>
        <form action="'.$_SERVER['PHP_SELF'].'" method="post">
     <fieldset style="
          background:linear-gradient(10deg,rgb(129, 2, 2) ,rgb(255,255,255) );
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
          <td><label for="xemail">Name :</label></td>
          <td><input type="email" name="xemail" id="xemail" required /></td>
        </tr>
        <tr style="border: 1px solid">
          <td><label for="xpwd">Password :</label></td>
          <td><input type="password" name="xpwd" id="xpwd" required /></td>
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
    </form>';
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!isset($_POST['xemail']) || !isset($_POST['xpwd']))
        {
            echo "PLEASE FILL FORM FIRST : INVALID SIGNUP SESSION";
            echo "<br /><a href='index.php'><button> RETURN </button></a>";
        }
    }
?>