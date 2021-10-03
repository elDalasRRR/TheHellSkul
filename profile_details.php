<table cellspacing=0 cellpadding=2 border=0 width=100%>
  <tr>
    <td class='white' bgcolor=#3B5998 colspan=2>
      Information
    </td>

    <td align=right class='white' bgcolor=#3B5998>
      [ <a href="edit_profile.php" class=menu>edit</a> ]
    </td>

  </tr>
</table>

<table class='bordertable' cellspacing=0 cellpadding=2 border=0 width=100%>
  <tr>
    <td>
      <table cellspacing=0 cellpadding=0 border=0>
        <tr>
          <td>
            <table cellspacing=0 cellpadding=2 border=0>
              <tr>
                <td colspan=2>
                  <b>Account Info:</b>
                </td>

              </tr>
              <tr>
                <td style="width:104px">
                  Name:
                </td>
                <td style="width:187px">
                  <?php echo "$profile->name"; ?>
                </td>
              <tr>
              <tr>
                <td>
                  Member&nbsp;Since:
                </td>
                <td>
                  <?php echo date('F j, Y', strtotime($profile->member_since)); ?>
                </td>
              <tr>
              <tr>
                <td>
                  Last&nbsp;Update:
                </td>
                <td>
                  <?php echo date('F j, Y', strtotime($profile->last_update)); ?>
                </td>
              <tr>
              <tr>

                <td>
                  <b>Basic Info:</b>
                </td>
                <td align=right style="color:#538ae2">
                  [ <a href="edit_profile.php?s=basic">edit</a> ]
                </td>
              </tr>
              <tr>
                <td>
                  School:
                </td>
                <td>
                  <?php echo "<a href='search.php?school=".$profile->school."'>".$profile->school."</a>"; ?>
                </td>
              <tr>
              <tr>
                <td>
                  Status:
                </td>
                <td>
                  <?php echo "$profile->status"; ?>
                </td>
              <tr>
              <tr>
                <td>
                  Sex:
                </td>
                <td>
                  <?php echo "$profile->sex"; ?>
                </td>
              <tr>
              <tr>
                <td>
                  Birthday:
                </td>
                <td>
                  <?php echo date('F j, Y', strtotime($profile->birthday)); ?>
                </td>
              <tr>
              <tr>
                <td>
                  Home&nbsp;Town:
                </td>
                <td>
                  <?php echo "$profile->home_town"; ?>
                </td>
              <tr>
              <tr>
                <td>
                  Highschool:
                </td>
                <td>
                  <?php echo "$profile->high_school"; ?>
                </td>
              <tr>
              <tr>

                <td>
                  <b>Contact Info:</b>
                </td>
                <td align=right style="color:#538ae2">
                  [ <a href="edit_profile.php?s=contact">edit</a> ]
                </td>

              </tr>
              <tr>
                <td>
                  Email:
                </td>
                <td>
                  <?php echo "$profile->email"; ?>
                </td>
              <tr>
              <tr>
                <td>
                  Screenname:
                </td>
                <td>
                  <?php echo "$profile->screenname"; ?>
                </td>
              <tr>
              <tr>
                <td>
                  Mobile:
                </td>
                <td>
                  <?php echo "$profile->mobile"; ?>
                </td>
              <tr>
              <tr>
                <td>
                  <b>Personal Info:</b>
                </td>
                <td align=right style="color:#538ae2">
                  [ <a href="edit_profile.php?s=personal">edit</a> ]
                </td>
              </tr>
              <tr>
                <td>
                  Looking&nbsp;For:
                </td>
                <td>
                  <?php echo "$profile->looking_for"; ?>
                </td>
              <tr>
              <tr>
                <td>
                  Interested&nbsp;In:
                </td>
                <td>
                  <?php echo "$profile->interested_in"; ?>
                </td>
              <tr>
              <tr>
                <td>
                  Relationship&nbsp;Status:
                </td>
                <td>
                  <?php echo "$profile->relationship";	?>
                </td>
              <tr>
              <tr>
                <td>
                  Political&nbsp;Views:
                </td>
                <td>
                  <?php echo "$profile->political_view"; ?>
                </td>
              <tr>
              <tr>
                <td>
                  Interests:
                </td>
                <td>
                  <?php echo "$profile->interests"; ?>
                </td>
              <tr>
              <tr>
                <td>
                  Music:
                </td>
                <td>
                  <?php echo "$profile->favourite_music";	?>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
