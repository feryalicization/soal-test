
<?php

    $tokens = [];

    function generate_token($user) {
        global $tokens;

        $token = bin2hex(random_bytes((16)));

        if (!isset($tokens[$user])){
            $tokens[$user] = [];


        }

        if (count($tokens[$user]) >= 10){

            array_shift($tokens[$user]);

        }

        $tokens[$user][] = $token;

        return $token;

    }

    function verify_token($user, $token) {
        global $tokens;

        if (isset($tokens[$user])) {
            $token_to_verify = reset($tokens[$user]);
            
            if ($token_to_verify === $token){
                $deleted_token = array_shift($tokens[$user]);
                return array($deleted_token, true);
            }
        }

        return array(null, false);
    }


    $user = "fery";

    for ($i = 0; $i < 15; $i++) {
        $token = generate_token($user);
        echo "Token $user: $token\n";
    }

    $token_to_verify = $tokens[$user][0];
    list($deleted_token, $verification_result) = verify_token($user, $token_to_verify);
    if($verification_result){
        echo "TOken berhasil dihapus: $deleted_token\n";
    } else {
        echo "TOken tidak dietemukan";
    }

?>