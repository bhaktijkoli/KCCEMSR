<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
  public static function createToken($email)
  {
    $pr = Self::firstOrNew([
      'email' => $email
    ]);
    $pr->token = str_random(64);
    $pr->save();
    return $pr;
  }
}
