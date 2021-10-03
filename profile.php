<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Thefacebook</title>
  <link rel="StyleSheet" href="style.css" type="text/css" title="8-bit Color Style">
  <link rel="Shortcut icon" href="images/favicon.ico">
</head>
<?php
session_start();

if ($_GET['id'] == $_SESSION['id']){
  include('./lib/classes/profile.php');
  $profile = new profile($_SESSION['id']);
} else {
  include('./lib/classes/profile.php');
  $profile = new profile($_GET['id']);
}

?>
<body>
  <center>
    <table class="bordertable" width="700" cellspacing="0" cellpadding="0" border="0">
      <tbody>
        <tr>
          <td>
            <table class="bottomborder" width="100%" cellspacing="0" cellpadding="0" border="0">
              <tbody>
                <tr>
                  <td width="350" bgcolor="#3B5998"><img src="./images/logo-left.jpg"></td>
                  <td>
                    <table width="100%" cellspacing="0" cellpadding="0" border="0">
                      <tbody>
                        <tr>
                          <td>
                            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                              <tbody>
                                <tr>
                                  <td bgcolor="#3B5998"><a href="index.php"><img src="./images/logo-right.jpg" border="0"></a></td>
                                  <td width="100%" bgcolor="#3B5998">&nbsp;</td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <?php

                            if (isset($_SESSION['id'])){
                              include('./html/logged_header.php');
                            } else {
                              include('./html/default_header.php');
                            }

                            ?>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
        <tr>
          <td>
            <table width="100%" cellspacing="0" cellpadding="2" border="0">
              <tbody>
                <tr>
                  <td valign=top>
                    <table width="125" cellspacing="0" cellpadding="0" border="0">
                      <tbody>
                        <tr>
                          <td>
                            <?php
                            if (isset($_SESSION['id'])){
                              include('./html/logged_left_panel.php');
                            } else {
                              include('./html/default_left_panel.php');
                            }
                            ?>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                  <td width="595" valign="top">
                    <table class="bordertable" width="100%" cellspacing="0" cellpadding="0" border="1">
                      <tbody>
                        <tr>
                          <td>
                            <table width="100%" cellspacing="0" cellpadding="2" border="0">
                              <tbody>
                                <tr>
                                  <td class="white" bgcolor="#3B5998">
                                    <?php
                                    if ($_GET['id'] == $_SESSION['id']){
                                      echo "Profile (This is you)";
                                    } else {
                                      echo "$profile->name";
                                    }
                                    ?>
                                  </td>
                                  <table width="100%" cellspacing="2" cellpadding="2" border="0">
                                    <tbody>
                                      <tr>
                                        <td valign=top>
                                          <?php include('profile_pic.php');  ?>
                                          <?php
                                          if ($_GET['id'] == $_SESSION['id']){
                                            include('profile_box.php');
                                          } else {
                                            include('profile_action.php');
                                          }
                                          ?>
                                        </td>
                                        <td><?php include('profile_details.php');  ?></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td>
                    <center>
                      <?php include('./html/footer.php'); ?>
                    </center><br>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </center>
</body>

</html>
