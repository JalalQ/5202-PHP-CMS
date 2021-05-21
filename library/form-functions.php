<?php

function populateDropdown($make, $select = ""){
    $html_dropdown = "";
    foreach ($make as $m) {
        $selected = $select == $m->car_make ? "selected" : "";
        $html_dropdown .= "<option $selected value='$m->make_id'>$m->car_make</option>";
    }

    return $html_dropdown;
}