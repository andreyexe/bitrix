<?php
// для себя
function debug($var, $die = false, $all = false)
{
    global $USER;
    if (($USER->GetID() == 1) || ($all == true)) {
        ?>
        <font style="text-align: left; font-size: 10px">
            <pre>
                <?php var_dump($var); ?>
            </pre>
        </font><br>
        <?php
    }
    if ($die) {
        die;
    }
}
// переделанная по заданию
function dump($var, $die = false, $all = false)
{
    global $USER;
    if ( ($USER->IsAdmin()) || ($all == true)) {
        ?>
        <font style="text-align: left; font-size: 10px">
            <pre>
                <?php var_dump($var); ?>
            </pre>
        </font><br>
        <?php
    }
    if ($die) {
        die;
    }
}

?>