<?php 

$title = 'suggestion';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
?>

    <form action="suggestsuccess.php" method="post" id="survey-form">
    
    <h1 style="text-align: center;">Suggestion Box</h1>

        <!-- Text section -->
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="formControl" placeholder="Enter your name" required>
        </div>
        <!-- end of text section -->

        <!-- Type Email section -->
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="formControl" placeholder="Enter your Email" required>
        </div>
        <!-- end of Email section -->
        
        <!-- Checkbox section -->
        <div class="form-group">
            <p id="selection">What would you like to see improve ? </p>
            <label for="">
                <ul>
                <li>
                 Design Layout
                </li>
                <li>
                 Website Contents
                </li>
                <li>
                  User Interface
                </li>
                <li>
                 Overall Performance
                </li>
                <li>
                 Other
                </li>
                </ul>
            </label>
        </div>
        <div class="form-group">
            <label for="name">Please select from the above list of what you'd like to see improve on the website</label>
            <input type="text" name="improve" id="improve" class="formControl" placeholder="eg: Design Layout" required>
        </div>
        <!-- End of checkbox section -->

        <!-- Textarea section -->
        <div class="form-group">
            <p id="quest">Give us your feedback</p>
            <textarea name="feedback"  cols="30" rows="5"  id="feedback" class="textarea" placeholder="Enter your feedback here..."></textarea>
        </div>
        <div class="form-group">
            <button type="submit" name="submit" id="submit" class="btn">Submit</button>
        </div>
    </form>
    <button type="button"><a href="survey.php"><p1>Back to questionnaire</p1></a></button>
    <button type="button"><a href="viewsuggestion.php"><p1>View all suggestions</p1></a></button>
</div>

  </main><!-- End #main -->
  <br>
  <br>
  <?php require_once 'includes/footer.php';?>