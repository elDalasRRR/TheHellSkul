<table class='bordertable' cellspacing=0 cellpadding=0 width=100%>
  <tr>
    <td>
      <table cellspacing=0 cellpadding=2 border=0 width=100%>
        <tr>
          <td class='white' bgcolor=#3B5998 colspan=2>
            Picture
          </td>
          <td align=right class='white' bgcolor=#3B5998>
            [ <a href="edit_picture.php" class=menu>edit</a> ]
          </td>
        </tr>
      </table>
      <br>
      <center>
        <table cellspacing=0 cellpadding=2 border=0 width=95%>
          <tr>
            <td align=center>
              <?PHP
              $pic=$profile->picture;
              echo "<img src=images/".$pic.">";
              ?>
            </td>
          </tr>
        </table>
    </td>
  </tr>
</table>
<br>
