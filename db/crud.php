<?php
    class crud{
        //private database object
        private $db;

        //constructor to inrialize private variable to the database connection
        function __construct($conn){
            $this->db = $conn;
        }
        
        // function to insert a new record into the questionnare database
       public function insertsurvey ($Q1, $Q2, $Q3, $Q4, $Q5, $Q6, $Q7, $Q8, $Q9, $Q10){
            try {
                //define sql statement to be executed
                $sql = "INSERT INTO survey (Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9, Q10)
                VALUES (:Q1, :Q2, :Q3, :Q4, :Q5, :Q6, :Q7, :Q8, :Q9, :Q10)";
                //prepare the sql statement for execution
                $stmt =$this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':Q1',$Q1);
                $stmt->bindparam(':Q2',$Q2);
                $stmt->bindparam(':Q3',$Q3);
                $stmt->bindparam(':Q4',$Q4);
                $stmt->bindparam(':Q5',$Q5);
                $stmt->bindparam(':Q6',$Q6);
                $stmt->bindparam(':Q7',$Q7);
                $stmt->bindparam(':Q8',$Q8);
                $stmt->bindparam(':Q9',$Q9);
                $stmt->bindparam(':Q10',$Q10);
                // execute statement
                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
       }


               // function to insert a new record into the suggestion database
               public function insertsuggestion($name, $email, $improve, $feedback){
                try {
                    //define sql statement to be executed
                    $sql = "INSERT INTO suggestion (name,email,improve,feedback)
                    VALUES (:name,:email,:improve,:feedback)";
                    //prepare the sql statement for execution
                    $stmt =$this->db->prepare($sql);
                    // bind all placeholders to the actual values
                    $stmt->bindparam(':name',$name);
                    $stmt->bindparam(':email',$email);
                    $stmt->bindparam(':improve',$improve);
                    $stmt->bindparam(':feedback',$feedback);
                   // execute statement
                    $stmt->execute();
                    return true;
    
                } catch (PDOException $e) {
                    echo $e->getMessage();
                    return false;
                }
           }
   



           //get all questionnaires
       public function getsurvey(){
        try{
         $sql = "SELECT * FROM `survey`";
         $result = $this->db->query($sql);
         return $result;
        }
        catch (PDOException $e) {
         echo $e->getMessage();
         return false;
         }

    }

    //get questionnaire details
    public function getquestDetails($id){
        try{
        $sql = "select * from survey where survey_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id',$id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
        }
        catch (PDOException $e) {
         echo $e->getMessage();
         return false;
         }
    }

       //get all suggestions
       public function getsuggestion(){
           try{
            $sql = "SELECT * FROM `suggestion`";
            $result = $this->db->query($sql);
            return $result;
           }
           catch (PDOException $e) {
            echo $e->getMessage();
            return false;
            }

       }

       //get suggestion details
    public function getsuggestionDetails($id){
        try{
        $sql = "select * from suggestion where suggestion_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id',$id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
        }
        catch (PDOException $e) {
         echo $e->getMessage();
         return false;
         }
    }
       


    }
?>