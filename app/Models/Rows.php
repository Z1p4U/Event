<?php

namespace App\Models;

use App\Traits\BasicAudit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rows extends Model
{
    use HasFactory, BasicAudit;

    protected $fillable = ['name'];

    public function seats()
    {
        $this->hasMany(Seats::class);
    }
}
