<?php
    $title = 'View Questionnaire Record';

    require_once 'includes/header.php';
    require_once 'db/conn.php';
    

    if(!isset($_GET['id'])){
        include 'includes/errormessage.php';
       
    } else{
        $id = $_GET['id'];
        $result = $crud->getquestDetails($id);
 
?>

<div class="container">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">
    1. Did you like the design of the website ? <?php echo $result['Q1']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    2. Did you like the colors of the website ? <?php echo $result['Q2']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    3. Were you able to differentiate links easily ? <?php echo $result['Q3']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    4. Did you find the images on the website useful ? <?php echo $result['Q4']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    5. Did you find the contents on the website accurate ? <?php echo $result['Q5']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    6. Did the website render well in your browser ? <?php echo $result['Q6']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    7. Do you think you had to click too much to get what you are looking for ? <?php echo $result['Q7']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    8. Was the size of the web controls appropriate enough ? <?php echo $result['Q8']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    9. Is the website running smooth ? <?php echo $result['Q9']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    10. Did  it take too long to load the website ? <?php echo $result['Q10']; ?>
    </h5>
    <br>
  </div>
</div>
</div>
<br/>
    <a href="view.php" class="btn btn-info">Back to List</a>
<?php
    }
?>


<br>
<br>
<?php require_once 'includes/footer.php';?>