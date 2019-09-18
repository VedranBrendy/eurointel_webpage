<?php


function flash($type, $flash_heading, $flash_msg){

    if ($type == 'success') {

        $type = 'success-flash';

    } elseif ($type == 'warning') {

        $type = 'warning-flash';

    } elseif ($type == 'error') {

        $type = 'error-flash';

    } elseif ($type == 'info') {

        $type = 'info-flash';

    } elseif ($type == 'secondary') {

        $type = 'secondary-flash';

    }



    $template = '<div class="flash '.$type.'">';
    $template .=    '<span class="remove">&times;</span>';
    $template .=        '<div class="flash-heading">';
    $template .=            '<h5>'.$flash_heading.'</h5>';
    $template .=        '</div>';
    $template .=        '<div class="flesh-body">';
    $template .=           '<p>'.$flash_msg.'</p>';
    $template .=        '</div>';
    $template .= '</div>';

return $template;
}

?>
