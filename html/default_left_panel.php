<table class="dashedtable" width="100%" cellspacing="0" cellpadding="2">
  <tbody>
    <tr>
      <td align="right">
        <p>
        </p>
        <form method="post" action="login.php">
          Email:<br> <input type="hidden" name="noerror" value="1"><input type="text" class="inputtext" name="email" value="" id="email" size="20"><br> Password:<br>
          <input type="password" class="inputtext" name="pass" id="pass" size="20"><br>
          <center><input type="submit" class="inputsubmit" value="login">&nbsp;
            <input type="button" class="inputsubmit" value="register" onclick="javascript:document.location='register.php';"></center>
        </form>
        <!--<br>-->
      </td>
    </tr>
  </tbody>
</table>
<script type="text/javascript" language="JavaScript">
  document.getElementById('email').focus() if (document.getElementById("email").value)
    document.getElementById("pass").focus();
</script>
