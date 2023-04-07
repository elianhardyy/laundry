<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

trait CookieExpiration
{
  protected $minuteExp = 18000;

  public function setRememberExpiration($user)
  {
    Cookie::queue($this->getRememberSessionName(),encrypt($this->setRememberValue($user)),$this->$minuteExp);

    protected function setRememberValue($user)
    {
      return $user->id . "|" . $user->remember_token . "|" . $user->password;
    }
    protected function getRememberSessionName()
    {
      return Auth::getRecallerName();
    }
  }
}

?>