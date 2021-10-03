<?php
class profile{

  public $id;

  public $name = "";
  public $member_sine = "";
  public $last_update = "";
  public $school = "";
  public $status = "";
  public $sex = "";
  public $birthday = "";
  public $home_town = "";
  public $high_school = "";
  public $email = "";
  public $screenname = "";
  public $mobile = "";
  public $website = "";
  public $looking_for = "";
  public $interested_in = "";
  public $relationship = "";
  public $political_view = "";
  public $interests = "";
  public $favourite_music = "";
  public $picture = "";

  public $profile = array();

  public function __construct($id) {
    $this->id = $id;

    /*
    $sql = "SELECT * FROM users WHERE id = $id";
    $query = mysql_query($sql) or die(mysql_error());
    $info = mysql_fetch_array($query);
    */
    include("users.php");

    foreach ($info[$id-1] as $key => $value) {
      $profile[$key]=$value;
    };

    $this->name = $profile["name"];
    $this->member_since = $profile["member_since"];
    $this->last_update = $profile["last_update"];
    $this->school = $profile["school"];
    $this->status = $profile["status"];
    $this->sex = $profile["sex"];
    $this->birthday = $profile["birthday"];
    $this->home_town = $profile["home_town"];
    $this->high_school = $profile["high_school"];
    $this->email = $profile["email"];
    $this->screenname = $profile["screenname"];
    $this->mobile = $profile["mobile"];
    $this->looking_for = $profile["looking_for"];
    $this->interested_in = $profile["interested_in"];
    $this->relationship = $profile["relationship"];
    $this->political_view = $profile["political_view"];
    $this->interests = $profile["interests"];
    $this->favourite_music = $profile["favourite_music"];
    $this->picture = $profile["picture"];

  }

  public function get($key){
    return $this->profile[$key];
  }

}

?>
