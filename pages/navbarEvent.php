<?php
if ($data['event_type'] == 0) $actionButton = 'je participe !' ;
elseif ($data['event_type'] == 1) $actionButton = 'réserver' ;

echo '
<div class="eventBar">

    <button>share svg here</button>
    <button><p>'.$actionButton.'</p></button>

</div>
';

?>