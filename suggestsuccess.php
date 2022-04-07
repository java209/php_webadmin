<?php 

$title = 'success';
require_once 'includes/header.php';
require_once 'db/conn.php';
//check if post varible exist

if(isset($_REQUEST['submit'])){
    //extract values from the $_Post array
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $improve = $_REQUEST['improve'];
    $feedback = $_REQUEST['feedback'];
    //call function to insert and track if success or fail
    $isSuccess = $crud->insertsuggestion($name, $email, $improve, $feedback);
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
    Name: <?php //echo $_GET['name']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    Email: <?php //echo $_GET['email']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    What would you like to see improve ?<br>
     <?php //echo $_GET['improve']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    Feedback: <?php //echo $_GET['feedback']; ?>
    </h5>
  </div>
</div>
</div>
-->

<!-- Prints Values using POST method -->
<div class="container">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">
    Name: <?php echo $_REQUEST['name']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    Email: <?php echo $_REQUEST['email']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    What would you like to see improve ?<br>
     <?php echo $_REQUEST['improve']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    Feedback: <?php echo $_REQUEST['feedback']; ?>
    </h5>
  </div>
</div>
</div>




<br>
<br>
<?php require_once 'includes/footer.php';?>
