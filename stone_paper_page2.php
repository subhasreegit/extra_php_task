<?php
    /*if ($_SERVER['REQUEST_METHOD'] == 'POST'){*/
    if(isset($_POST["user_choice"])){
        $ComputerChoice = array('Rock', 'Paper', 'Scissors');
        shuffle($ComputerChoice);
        $Computer = $ComputerChoice[0];
        $User = $_POST['user_choice'];
        echo 'Player: '.$User.' <br>CPU: '.$Computer;
        if($User == $Computer){
            echo '<br>Result: Tie!';
        }
        else if($User == "Rock"){
            if($Computer == "Scissors") {
                echo '<br>Result: User wins';
            } else {
                echo '<br>Result: CPU wins';
            }
            
        }
        else if($User == "Paper") {
            if($Computer == "Rock") {
                echo '<br>Result: User wins';
                }else {
                    if($Computer == "Scissors") {
                        echo '<br>Result: Computer wins';
                    }
                }
                
            }
            else if($User == "Scissors") {
                if($Computer== "Rock") {
                    echo '<br>Result: CPU wins';
                } else {
                    if($Computer == "Paper") {
                        echo '<br>Result: User wins';
                    }
                }
                
            }
        }
        
    
?>