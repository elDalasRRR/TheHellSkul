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




    <!--10.1.0.44-->


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
                                  <td class="white" bgcolor="#3B5998">Registration</td>
                                </tr>
                              </tbody>
                            </table>
                            <center>
                              <table width="95%" cellspacing="0" cellpadding="0" border="0">
                                <tbody>
                                  <tr>
                                    <td>
                                      <center>
                                        <table width="90%" cellspacing="0" cellpadding="0" border="0">
                                          <tbody>
                                            <tr>
                                              <td>
                                                &nbsp;<br>
                                                To register for thefacebook.com, just fill in the four fields below. You will
                                                have a chance to enter additional information and submit a picture once you
                                                have registered.
                                                <p>
                                                </p>
                                                <center>
                                                  <form method="post" action="register.php">
                                                    <table cellspacing="0" cellpadding="0" border="0">
                                                      <tbody>
                                                        <tr>
                                                          <td>
                                                            <table cellspacing="0" cellpadding="2" border="0">
                                                              <tbody>
                                                                <tr>
                                                                  <td>Name:</td>
                                                                  <td><input type="text" class="inputtext" name="name" value="" size="30"></td>
                                                                </tr>
                                                                <tr>
                                                                  <td>Status:</td>
                                                                  <td><select class="inputtext" name="status">
                                                                      <option value="1">Student (Full-Time)
                                                                      </option>
                                                                      <option value="5">Grad Student
                                                                      </option>
                                                                      <option value="2">Alumnus/Alumna
                                                                      </option>
                                                                      <option value="3">Faculty
                                                                      </option>
                                                                      <option value="4">Staff
                                                                      </option>
                                                                    </select>
                                                                  </td>
                                                                </tr>
                                                                <tr>
                                                                  <td>Email: (school)</td>
                                                                  <td><input type="text" class="inputtext" name="email" value="" size="30"></td>
                                                                </tr>
                                                                <tr>
                                                                  <td>Password*: (choose)&nbsp;</td>
                                                                  <td><input type="password" class="inputtext" name="pass" size="30"></td>
                                                                </tr>
                                                                <!--<tr height=8><td></td><td></td></tr>-->
                                                              </tbody>
                                                            </table>
                                                          </td>
                                                        </tr>
                                                        <tr>
                                                          <td>
                                                            <table cellspacing="0" cellpadding="3" border="0">
                                                              <tbody>
                                                                <tr>
                                                                  <td><input type="checkbox" name="terms" value="1"></td>
                                                                  <td>
                                                                    I have read and understood the <a href="terms.php">Terms of Use</a>,
                                                                    and I<br>agree to them.</td>
                                                                </tr>
                                                                <tr>
                                                                  <td valign="top" align="right">*</td>
                                                                  <td>You can choose any password. <font color="red">It
                                                                      should not be your school password.</font>
                                                                  </td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                    <p>
                                                      <input type="submit" value="Register Now!" class="inputsubmit">
                                                    </p>
                                                  </form>
                                                </center>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>


                                      </center>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
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
                <br>Thefacebook <span title="5ms">©</span> <span title="">20</span><span title="362904">05</span>
                <br>
              </p>
            </center><br>
          </td>
        </tr>
      </tbody>
    </table><br>

    <!--
     FILE ARCHIVED ON 20:27:30 Aug 22, 2005 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 18:15:25 Nov 26, 2018.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
    <!--
playback timings (ms):
  LoadShardBlock: 579.477 (3)
  esindex: 0.007
  captures_list: 595.582
  CDXLines.iter: 8.169 (3)
  PetaboxLoader3.datanode: 91.217 (4)
  exclusion.robots: 0.266
  exclusion.robots.policy: 0.253
  RedisCDXSource: 1.65
  PetaboxLoader3.resolve: 52.238
  load_resource: 110.487
-->
  </center>

</body>

</html>
