<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class employee extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function department(): BelongsTo
      {
return $this->belongsTo(department::class);
      }
    public function country(): BelongsTo
      {
return $this->belongsTo(country::class);
      }
      public function state(): BelongsTo
      {
return $this->belongsTo(state::class);
      }
      public function city(): BelongsTo
      {
return $this->belongsTo(city::class);
      }



}
