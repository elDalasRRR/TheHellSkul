<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Thefacebook</title>
  <link rel="StyleSheet" href="style.css" type="text/css" title="8-bit Color Style">
  <link rel="Shortcut icon" href="images/favicon.ico">
</head>

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
                            <?php include('./html/default_header.php'); ?>
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
                  <td valign="top">
                    <table width="105" cellspacing="0" cellpadding="0" border="0">
                      <tbody>
                        <tr>
                          <td>
                            <?php include('./html/default_left_panel.php');  ?>
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
                                  <?php
                                    if (!empty($_GET)){
                                      echo "<td class='white' bgcolor='#3B5998'>Search Results</td>";
                                    }else{
                                      echo "<td class='white' bgcolor='#3B5998'>Search</td>";
                                    }
                                  ?>
                                </tr>
                              </tbody>
                            </table>
                            <center>
                              <table width="100%" cellspacing="0" cellpadding="2" border="0">
                                  <tbody>
                                    <tr>
                                      <td>
                                        <center>
                                          <?php
                                          if (empty($_GET)){
                                            echo  "<center>
                                                    <p>
                                                      <form action='search.php'>
                                                        <input class='inputtext' name=query type=text >
                                                        <input type='submit' class='inputsubmit' value='go'>
                                                      </form>
                                                    </p>
                                                    </center>";
                                          }else{
                                            foreach ($_GET as $search_id => $search_term){
                                              echo "
                                              <table class='bordertable' cellspacing=0 cellpadding=2 border=0 width=100%>
                                                <tr>
                                                  <td>
                                                    <table cellspacing=0 cellpadding=0 border=0>
                                                      <tr>
                                                        <td>
                                                          <table cellspacing=0 cellpadding=2 border=0>
                                                            <tr>
                                                              <td colspan=2>
                                                                <b>Search Results for ".$search_id." :</b> ".$search_term."
                                                              </td>
                                                            </tr>
                                                            </td>
                                                          </tr>
                                                        </table>
                                                      </td>
                                                    </tr>
                                                  </table>
                                                </td>
                                              </tr>
                                            </table>
                                            ";
                                            }
                                          }
                                          ?>
                                        </center>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </p>
                            </center>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <center>
              <?php include('./html/footer.php'); ?>
            </center><br>
          </td>
        </tr>
      </tbody>
    </table>
  </center>
</body>

</html>
