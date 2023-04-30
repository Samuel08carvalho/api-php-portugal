<?php

$data = [];

//request
if(isset($GET['option'])){

    switch ($_GET['option']) {
        case 'status':
            $data['status'] = 'SUCESS';
            $data['data'] = 'API running OK!';
            break;

        default:
        $data['status'] = 'ERROR';
        break;
    }

} else {
    $data['status'] = 'ERROR';
}

//emitir a resposta da APPI
response($data);

// ===============================================================
// construção da response
function response($data_response)
{
    header("Content-Type:application/json");
    echo json_encode($data_response);
}
