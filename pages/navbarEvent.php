<?php
if ($data['event_type'] == 0) $actionButton = 'je participe !' ;
elseif ($data['event_type'] == 1) $actionButton = 'réserver' ;

echo '
<div class="eventBar">

    <div><a href=""></a><img src="./assets/icons/share.svg" alt="share button"></div>
    <div><a href="reservation.php"></a><p>'.$actionButton.'</p></div>

</div>
';

?>