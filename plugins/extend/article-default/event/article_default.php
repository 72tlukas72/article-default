<?php

namespace Sunlight;

use SunlightExtend\ArticleDefault;

return function (array $args) {
    $args['data']['confirmed'] = $this->getConfig()['approved'];
    $args['data']['rateon'] = $this->getConfig()['rating'];
    $args['data']['showinfo'] = $this->getConfig()['information'];
};
