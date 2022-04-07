<?php
    $title = 'View All Questionnnaire';

    require_once 'includes/header.php';
    require_once 'db/conn.php';
    //get all attendees
    $results = $crud->getsurvey()
?>
    <br>
    <h1 style="text-align: center;">View all questionnaires</h1>
    <table class="table table-striped table-primary">
        <tr>
            <th>Number of Responses</th>
            <th>Actions</th>
        </tr>
        <?php 
        while($r = $results->fetch(PDO::FETCH_ASSOC)){
        ?>
            <tr>
                <td><?php echo $r['survey_id'] ?></td>
                <td>
                    <a href="viewquestrecord.php?id=<?php echo $r['survey_id'] ?>" class="btn btn-success">View</a>
                </td>
                
            </tr>
        <?php
        }
        ?>
    </table>
    <a href="survey.php" class="btn btn-info">Back to List</a>


<br>
<br>
<?php require_once 'includes/footer.php';?>