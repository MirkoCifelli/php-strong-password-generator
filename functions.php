<!-- <php?

$passlenght = $_GET['pass_lenght];
function getRandomPassword($passlenght){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?&%$<>^+-*/()[]{}@#_=';
    $password = '';
    for($i = 0; $i < $passlength; $i++){
        $password .= $characters[rand (0, strlen($characters)- 1)];
     }
    return $password;
};

?> -->


<?php       
                    
    function generatepassword(){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?&%$<>^+-*/()[]{}@#_=';
        $password = '';
        for($i = 0; $i < $_GET['pass_lenght']; $i++){
            $password .= $characters[mt_rand(0, strlen($characters)- 1)];
        }
        return $password;
    };
    // var_dump(generatepassword());
                    
?>