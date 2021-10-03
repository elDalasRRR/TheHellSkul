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
                            <table width="100%" cellspacing="0" cellpadding="4" border="0">
                              <tbody>
                                <tr height="21">
                                  <td valign="bottom" bgcolor="#3B5998">&nbsp;<a class="menu" href="login.php">login</a></td>
                                  <td valign="bottom" bgcolor="#3B5998">&nbsp;<a class="menu" href="register.php">register</a></td>
                                  <td valign="bottom" bgcolor="#3B5998">&nbsp;<a class="menu" href="about.php">about</a></td>
                                  <td valign="bottom" bgcolor="#3B5998">&nbsp;<a class="menu" href="faq.php">faq</a></td>
                                  <td width="100%" bgcolor="#3B5998">&nbsp;</td>
                                </tr>
                              </tbody>
                            </table>
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
                                  <td class="white" bgcolor="#3B5998">Facebook Announcements</td>
                                </tr>
                              </tbody>
                            </table>
                            <center>
                              <p class="title">[ Facebook Announcements ]<br>&nbsp;
                              </p>
                              <form action="announce.php" method="post">
                                <center>
                                  <table class="bordertable" width="90%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                      <tr>
                                        <td>
                                          <table width="100%" cellspacing="0" cellpadding="2" border="0">
                                            <tbody>
                                              <tr>
                                                <td class="white" bgcolor="#3B5998">What are Facebook Announcements?</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                          <center>
                                            <table width="95%" cellspacing="0" cellpadding="2" border="0">
                                              <tbody>
                                                <tr>
                                                  <td>
                                                    &nbsp;
                                                    <table cellspacing="0" cellpadding="4" border="0">
                                                      <tbody>
                                                        <tr>
                                                          <td valign="top">

                                                            If you want to purchase space to announce something to your college community,
                                                            you're at the right place. Facebook Announcements let you reach a large portion of your
                                                            college population at less of a cost than other methods of advertising.
                                                            <p>
                                                              Even if your announcement
                                                              is in rotation with a few others, it will still be viewed about 3-6 times per day by each
                                                              student at your school's facebook.



                                                            </p>
                                                            <p>
                                                              If you have questions, check out the <a href="adfaq.php">Facebook Announcements FAQ</a>.

                                                            </p>
                                                          </td>
                                                          <td><img src="/web/20050817042828im_/http://www.thefacebook.com:80/images/announce.jpg"></td>
                                                        </tr>
                                                      </tbody>
                                                    </table>

                                                    <br>&nbsp;
                                                    <center>
                                                      <input class="inputsubmit" type="button" onclick="javscript:document.location=&quot;announce.php?step=1&amp;first=1&quot;" value="Get Started - Registered Users/Students">
                                                      &nbsp;&nbsp;
                                                      <input class="inputsubmit" type="button" onclick="javscript:document.location=&quot;announce.php?step=1&amp;first=1&amp;biz=1&quot;" value="Get Started - Local Advertisers">
                                                      <br>&nbsp;</center>
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </center>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table><br>&nbsp;
                                </center>
                              </form>
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
              <p><a href="about.php">about</a>&nbsp;&nbsp;
                <a href="contact.php">contact</a>&nbsp;&nbsp;
                <a href="jobs.php">jobs</a>&nbsp;&nbsp;
                <!--<a href="faq.php">faq</a>&nbsp;&nbsp;-->
                <a href="announce.php">announce</a>&nbsp;&nbsp;
                <a href="media.php">advertise</a>&nbsp;&nbsp;
                <a href="terms.php">terms</a>&nbsp;&nbsp;
                <a href="policy.php">privacy</a>&nbsp;&nbsp;<span title="ik">&nbsp;</span>&nbsp;&nbsp;
                <br>a Mark Zuckerberg production
                <br>Thefacebook <span title="8ms">©</span> <span title="">20</span><span title="362512">05</span>
                <br>
              </p>
            </center><br>
          </td>
        </tr>
      </tbody>
    </table>
  </center>
</body>

</html>
