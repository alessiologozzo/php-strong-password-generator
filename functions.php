<?php
    session_start();

    function generatePassword(){
        $dim = $_GET["input"];
        $psw = array();

        for($i = 0; $i < $dim; $i++){
            $type = rand(0, 8);

            switch($type){
                case 0: //lettere minuscole
                case 1:
                case 2:
                case 3:
                    $code = rand(97, 122);
                    array_push($psw, chr($code));
                    break;

                case 4: //lettere maiuscole
                case 5:
                    $code = rand(65, 90);
                    array_push($psw, chr($code));
                    break;

                case 6: //numeri
                case 7:
                    $code = rand(48, 57);
                    array_push($psw, chr($code));
                    break;

                case 8: //simboli
                    $code = rand(0, 4);
                    switch($code){
                        case 0:
                            array_push($psw, "@");
                            break;

                        case 1:
                            array_push($psw, "_");
                            break;

                        case 2:
                            array_push($psw, "-");
                            break;

                        case 3:
                            array_push($psw, "$");
                            break;

                        case 4:
                            array_push($psw, "&");
                            break;
                    }
            }
        }

        $_SESSION["chars"] = $psw;
    }