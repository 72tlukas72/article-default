<?php

return function (array $args) {
    $args['data']['confirmed'] = $this->getConfig()['schválený'];
    $args['data']['rateon'] = $this->getConfig()['hodnocení'];
    $args['data']['showinfo'] = $this->getConfig()['informace_u_položek'];
};
