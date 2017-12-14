<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartnershipMessage extends Model
{
  protected $guarded = [];

  public function sender()
  {
    return $this->belongsTo (User::class, 'partnershipMessages', 'id', 'user_id');
  }

}
