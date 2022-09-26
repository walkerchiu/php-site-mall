<?php

namespace WalkerChiu\SiteMall\Events;

use Illuminate\Auth\Events\Logout as BaseClass;
use WalkerChiu\SiteMall\Events\EventTrait;

class Logout extends BaseClass
{
    use EventTrait;

    /**
     * Site.
     *
     * @var Site
     */
    public $site;



    /**
     * Create a new event instance.
     *
     * @param String                                      $guard
     * @param \Illuminate\Contracts\Auth\Authenticatable  $user
     * @return void
     */
    public function __construct($guard, $user)
    {
        $this->user  = $user;
        $this->guard = $guard;

        $this->site = $this->getSite();
    }
}
