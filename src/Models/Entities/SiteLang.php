<?php

namespace WalkerChiu\SiteMall\Models\Entities;

use WalkerChiu\Core\Models\Entities\Lang;

class SiteLang extends Lang
{
    /**
     * Create a new instance.
     *
     * @param Array  $attributes
     * @return void
     */
    public function __construct(array $attributes = [])
    {
        $this->table = config('wk-core.table.site-mall.sites_lang');

        parent::__construct($attributes);
    }
}
