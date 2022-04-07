<?php 

$title = 'Questionnaire';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
?>
<br>
<br>
    <form action="questsuccess.php"  method="POST" id="survey-form">

        <h1 style="text-align: center;">Questionnaire</h1>
        <!-- Checkbox section -->
        <div class="form-group">
            <p id="quest">1. Did you like the design of the website ? </p>
            <label for="Q1">
                <ul>
                <input type="checkbox" name="Q1" value="YES"> YES<br>
                <input type="checkbox" name="Q1" value="NO"> NO
                </ul>
            </label>
        </div>
        <!-- End of checkbox section -->

        <!-- Checkbox section -->
        <div class="form-group">
            <p id="quest">2. Did you like the colors of the website ? </p>
            <label for="Q2">
                <ul>
                <input type="checkbox" name="Q2" value="YES"> YES<br>
                <input type="checkbox" name="Q2" value="NO"> NO
                </ul>
            </label>
        </div>
        <!-- End of checkbox section -->

        <!-- Checkbox section -->
        <div class="form-group">
            <p id="quest">3. Were you able to differentiate links easily ? </p>
            <label for="Q3">
                <ul>
                <input type="checkbox" name="Q3" value="YES"> YES<br>
                <input type="checkbox" name="Q3" value="NO"> NO
                </ul>
            </label>
        </div>
        <!-- End of checkbox section -->

        <!-- Checkbox section -->
        <div class="form-group">
            <p id="quest">4. Did you find the images on the website useful ? </p>
            <label for="Q4">
                <ul>
                <input type="checkbox" name="Q4" value="YES"> YES<br>
                <input type="checkbox" name="Q4" value="NO"> NO
                </ul>
            </label>
        </div>
        <!-- End of checkbox section -->

         <!-- Checkbox section -->
        <div class="form-group">
            <p id="quest">5. Did you find the contents on the website accurate ? </p>
            <label for="Q5">
                <ul>
                <input type="checkbox" name="Q5" value="YES"> YES<br>
                <input type="checkbox" name="Q5" value="NO"> NO
                </ul>
            </label>
        </div>
        <!-- End of checkbox section -->

         <!-- Checkbox section -->
        <div class="form-group">
            <p id="quest">6. Did the website render well in your browser ? </p>
            <label for="Q1">
                <ul>
                <input type="checkbox" name="Q6" value="YES"> YES<br>
                <input type="checkbox" name="Q6" value="NO"> NO
                </ul>
            </label>
        </div>
        <!-- End of checkbox section -->

        <!-- Checkbox section -->
        <div class="form-group">
            <p id="quest">7. Do you think you had to click too much to get what you are looking for ? </p>
            <label for="Q7">
                <ul>
                <input type="checkbox" name="Q7" value="YES"> YES<br>
                <input type="checkbox" name="Q7" value="NO"> NO
                </ul>
            </label>
        </div>
        <!-- End of checkbox section -->

         <!-- Checkbox section -->
        <div class="form-group">
            <p id="quest">8. Was the size of the web controls appropriate enough ? </p>
            <label for="Q8">
                <ul>
                <input type="checkbox" name="Q8" value="YES"> YES<br>
                <input type="checkbox" name="Q8" value="NO"> NO
                </ul>
            </label>
        </div>
        <!-- End of checkbox section -->

        <!-- Checkbox section -->
        <div class="form-group">
            <p id="quest">9. Is the website running smooth ? </p>
            <label for="Q9">
                <ul>
                <input type="checkbox" name="Q9" value="YES"> YES<br>
                <input type="checkbox" name="Q9" value="NO"> NO
                </ul>
            </label>
        </div>
        <!-- End of checkbox section -->

        <!-- Checkbox section -->
        <div class="form-group">
            <p id="quest">10. Did  it take too long to load the website ? </p>
            <label for="Q10">
                <ul>
                <input type="checkbox" name="Q10" value="YES"> YES<br>
                <input type="checkbox" name="Q10" value="NO"> NO
                </ul>
            </label>
        </div>
        <!-- End of checkbox section -->

        <div class="form-group">
            <button type="submit" id="submit"  name="submit" class="btn">Submit</button>
        </div>
    </form>
    <button type="button"><a href="suggestion.php"><p1>Click to make Suggestion</p1></a></button>
    <button type="button"><a href="view.php"><p1>View all Questionnaires</p1></a></button>
</div>

  </main><!-- End #main -->
  <br>
  <br>
  <?php require_once 'includes/footer.php';?>