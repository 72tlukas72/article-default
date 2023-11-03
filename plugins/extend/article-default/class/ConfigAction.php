<?php

namespace SunlightExtend\ArticleDefault;

use Sunlight\Plugin\Action\ConfigAction as BaseConfigAction;

class ConfigAction extends BaseConfigAction
{
    public function getConfigLabel(string $key): string
    {
        return _lang('article-default.config.' . $key);
    }
}
