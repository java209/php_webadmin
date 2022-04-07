<?php
    $title = 'View All Suggestion';

    require_once 'includes/header.php';
    require_once 'db/conn.php';
    //get all attendees
    $results = $crud->getsuggestion()
?>
    <br>
    <h1 style="text-align: center;">View all suggestions</h1>
    <table class="table table-striped table-primary">
        <tr>
            <th>ID#</th>
            <th>Full Name</th>
            <th>Actions</th>
        </tr>
        <?php 
        while($r = $results->fetch(PDO::FETCH_ASSOC)){
        ?>
            <tr>
                <td><?php echo $r['suggestion_id'] ?></td>
                <td><?php echo $r['name'] ?></td>
                <td>
                    <a href="viewsuggestionrecord.php?id=<?php echo $r['suggestion_id'] ?>" class="btn btn-success">View</a>
                </td>
                
            </tr>
        <?php
        }
        ?>
    </table>
    <a href="suggestion.php" class="btn btn-info">Create suggestion</a>


<br>
<br>
<?php require_once 'includes/footer.php';?>