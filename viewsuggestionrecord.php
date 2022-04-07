<?php
    $title = 'View Suggestion Record';

    require_once 'includes/header.php';
    require_once 'db/conn.php';
    

    if(!isset($_GET['id'])){
        include 'includes/errormessage.php';
       
    } else{
        $id = $_GET['id'];
        $result = $crud->getsuggestionDetails($id);
 
?>

<div class="container">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">
    Name: <?php echo $result['name']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    Email: <?php echo $result['email']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    What would you like to see improve ?<br>
     <?php echo $result['improve']; ?>
    </h5>
    <br>
    <h5 class="card-title">
    Feedback: <?php echo $result['feedback']; ?>
    </h5>
  </div>
</div>
</div>
<br/>
    <a href="viewsuggestion.php" class="btn btn-info">Back to List</a>
<?php
    }
?>


<br>
<br>
<?php require_once 'includes/footer.php';?>