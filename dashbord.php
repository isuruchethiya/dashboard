<?php
include_once './components/head.component.php';
include_once './components/scripts.components.php';
include_once './components/sideBar.compoents.php';

?>

<!Doctype HTML>
<html>

<head>


</head>
<style>
  .frame {
    border: 1px solid #bcbcbc;
    padding: 2px;
    background-color: #b6b9b5;
    margin-bottom: 20px;
  }

  .col-div-3 {
    width: 25%;
    float: left;
    box-sizing: border-box;
    padding: 10px;
  }

  .box {
    width: 100%;
    height: 150px;
    background-color: #f9f9f9;
    margin-bottom: 10px;
    padding: 10px;
    box-sizing: border-box;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  .box i {
    font-size: 48px;
    margin-bottom: 10px;
  }

  .box p {
    font-size: 18px;
    font-weight: bold;
  }

  .box.box-1 {
    background-color: #ffc107;
    color: #fff;
  }

  .box.box-2 {
    background-color: #dc3545;
    color: #fff;
  }

  .box.box-3 {
    background-color: #17a2b8;
    color: #fff;
  }

  .box.box-4 {
    background-color: #ffc107;
    color: #000;
  }

  .clearfix {
    clear: both;
  }

  .frame .heading h1 {
    font-size: 40px;
    font-weight: bold;

  }

  #main {
    /* Existing styles for #main */

    overflow-y: auto;
    /* Add this line to enable vertical scrolling */
    max-height: 750px;
    /* Adjust the max-height as per your requirement */
  }

  .col-div-4 {
    width: 50%;
    /* Increase the width to 50% */
    float: left;
    box-sizing: border-box;
    padding: 10px;
  }

  .box-5 {
    width: 100%;
    height: 150px;
    background-color: #008c8c;
    margin-bottom: 10px;
    padding: 10px;
    box-sizing: border-box;
    text-align: center;
  }

  .box-6 {
    background-color: #ffd52b;
    /* Add custom background color */
  }

  .p {
    font-weight: bold;
    font-size: 60px;
  }

  .span {
    font-size: 16px;
  }

  .frame3{
    border: 1px solid #bcbcbc;
    padding: 2px;
    background-color: #b6b9b5;
    margin-bottom: 20px;
  }


  .fa-chart-line {
    font-size: 50px;
    color: #fff;
    /* Set the color for the icon */
  }

  

  .col-div-8 {
    width: 66.66%;
    /* Set the width to 66.66% to occupy 2/3 of the frame */
    float: left;
    box-sizing: border-box;
    padding: 10px;
  }

  .box7 {
    background-color: #00ff00;
    /* Green color for box6 */
  }

  .box8 {
    background-color: #a52a2a;
    /* Brown color for box8 */
  }

  .box9 {
    background-color: #0000ff;
    /* Blue color for box7 */
  }

  .box p {
    font-weight: bold;
    font-size: 24px;
    /* Adjust the font size as needed */
  }

  .box span {
    font-size: 16px;
  }

  .fa-chart-line {
    font-size: 50px;
    color: #ffff00;
  }
</style>



<body>


  <div id="main">

    <div class="head">
      <div class="col-div-6">
        <span style="font-size:30px;cursor:pointer; color: white;" class="nav">&#9776; Dashboard</span>
        <span style="font-size:30px;cursor:pointer; color: white;" class="nav2">&#9776; Dashboard</span>
      </div>

      <div class="col-div-6">
        <div class="profile">
          <img src="images/user.webp" class="pro-img" id="userDropdownToggle" />
          <p>Isuru chethiya<span>Online-Banking Manager</span></p>

        </div>
      </div>

      <div class="clearfix"></div>
    </div>

    <div class="frame">
      <h1>User Statistics</h1>
      <div class="col-div-3">
        <div class="box box-1">
          <i class="fa fa-users"></i>
          <p>TOTAL USERS</p>
        </div>
      </div>
      <div class="col-div-3">
        <div class="box box-2">
          <i class="fa fa-ban"></i>
          <p>TOTAL BANNED USERS</p>
        </div>
      </div>
      <div class="col-div-3">
        <div class="box box-3">
          <i class="fa fa-envelope-open"></i>
          <p>TOTAL EMAIL VERIFIED USERS</p>
        </div>
      </div>
      <div class="col-div-3">
        <div class="box box-4">
          <i class="fa fa-mobile"></i>
          <p>TOTAL PHONE UNVERIFIED USERS</p>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>

    <div class="frame">
      <h1>User Finance Statistics</h1>
      <div class="col-div-4">
        <div class="box box-5">
          <p>$10,000</p>
          <span>ALL USERS DEPOSIT WALLET BALANCE</span>
        </div>
      </div>
      <div class="col-div-4">
        <div class="box box-6">
          <i class="fas fa-chart-line"></i>
          <p>$1,500</p>
          <span>ALL USERS INTEREST WALLET BALANCE</span>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>

    <div class="frame3">
      <h1>Deposit Statistics</h1>
      <div class="col-div-3">
        <div class="box box7">
          <p></p>
          <span>TOTAL NUMBER OF DEPOSITS </span>
        </div>
      </div>
      <div class="col-div-3">
        <div class="box box8">
          <i class="fas fa-chart-line"></i>
          <p></p>
          <span>TOTAL DEPOSIT AMOUNT</span>
        </div>
      </div>
      <div class="col-div-3">
        <div class="box box9">
          <i class="fas fa-chart-line"></i>
          <p></p>
          <span>TOTAL DEPOSIT CHARGE</span>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>


    <div class="clearfix"></div>
  </div>

  <script src="./js/script.js"></script>


</body>


</html>