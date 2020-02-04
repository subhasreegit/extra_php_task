<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="./hit.js" type="text/javascript"></script>
        
        
    </head>
        <body>
            
            Choose:
            <br>
            <form action="" method="post"/>
             <!-- <input type="radio" name="user_choice" class="user_choice" value="Rock" title="Rock" />Rock <br /><br />
                <input type="radio" name="user_choice" class="user_choice" value="Paper" title="Paper" />Paper <br /><br />
                <input type="radio" name="user_choice" class="user_choice"  value="Scissors" title="Scissors"/>Scissors<br/><br/>
                 <input type="submit" name="form_submit" value="Hit"/> -->
                 <button name="user_choice" class="user_choice" value="Rock">Rock</button>
                 <br>
                 <button name="user_choice" class="user_choice" value="Scissors">Scissors</button>
                 <br>
                 <button name="user_choice" class="user_choice" value="paper">paper</button>

            </form> 
            <?php
                include 'stone_paper_page2.php';
            ?>

        </body>
        <!-- <script>
            $(document).ready(function(){
                $("input[type=radio]").click(function(){
                     $(".user_choice").submit();
                     alert("123");
                 });
                
                });
        </script> -->
</html>

