<?php
    echo "A forma de pagamento escolhida foi: ";
    
    $numero = 1;

    switch ($numero) {
        case 0:
            echo "crédito";
            break;
        case 1:
            echo "débito";
            break;
        case 2:
            echo "pix";
            break;
    }


?>