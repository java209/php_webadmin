<?php 

$title = 'success';
require_once 'includes/header.php';
require_once 'db/conn.php';
//check if post varible exist

if(isset($_REQUEST['submit'])){
    //extract values from the $_Post array
    $Q1 = $_REQUEST['Q1'];
    $Q2 = $_REQUEST['Q2'];
    $Q3 = $_REQUEST['Q3'];
    $Q4 = $_REQUEST['Q4'];
    $Q5 = $_REQUEST['Q5'];
    $Q6 = $_REQUEST['Q6'];
    $Q7 = $_REQUEST['Q7'];
    $Q8 = $_REQUEST['Q8'];
    $Q9 = $_REQUEST['Q9'];
    $Q10 = $_REQUEST['Q10'];
    //call function to insert and track if success or fail
    $isSuccess = $crud->insertsurvey($Q1, $Q2, $Q3, $Q4, $Q5, $Q6, $Q7, $Q8, $Q9, $Q10);
    //print success or fail nessage
    if($isSuccess){
        include 'includes/successmessage.php';
    }
    else{
        include 'includes/errormessage.php';

    }
}

?>

<!-- Prints Values using get method  
<div class="container">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">
    1. Did you like the design of the website ? <?php //echo $_GET['Q1']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    2. Did you like the colors of the website ? <?php //echo $_GET['Q2']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    3. Were you able to differentiate links easily ? <?php //echo $_GET['Q3']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    4. Did you find the images on the website useful ? <?php //echo $_GET['Q4']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    5. Did you find the contents on the website accurate ? <?php //echo $_GET['Q5']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    6. Did the website render well in your browser ? <?php //echo $_GET['Q6']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    7. Do you think you had to click too much to get what you are looking for ? <?php //echo $_GET['Q7']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    8. Was the size of the web controls appropriate enough ? <?php //echo $_GET['Q8']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    9. Is the website running smooth ? <?php //echo $_GET['Q9']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    10. Did  it take too long to load the website ? <?php //echo $_GET['Q10']; ?>
    </h5>
    <br>
  </div>
</div>
</div>
-->

<!-- Prints Values using POST method --> 
<div class="container">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">
    1. Did you like the design of the website ? <?php echo $_REQUEST['Q1']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    2. Did you like the colors of the website ? <?php echo $_REQUEST['Q2']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    3. Were you able to differentiate links easily ? <?php echo $_REQUEST['Q3']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    4. Did you find the images on the website useful ? <?php echo $_REQUEST['Q4']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    5. Did you find the contents on the website accurate ? <?php echo $_REQUEST['Q5']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    6. Did the website render well in your browser ? <?php echo $_REQUEST['Q6']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    7. Do you think you had to click too much to get what you are looking for ? <?php echo $_REQUEST['Q7']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    8. Was the size of the web controls appropriate enough ? <?php echo $_REQUEST['Q8']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    9. Is the website running smooth ? <?php echo $_REQUEST['Q9']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    10. Did  it take too long to load the website ? <?php echo $_REQUEST['Q10']; ?>
    </h5>
    <br>
  </div>
</div>
</div>



<br>
<br>
<?php require_once 'includes/footer.php';?>
