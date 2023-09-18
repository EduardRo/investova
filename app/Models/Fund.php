<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{
    use HasFactory;

    public function fundAdministrator()
    {
        return $this->belongsTo(FundAdministrator::class);
    }

    public function administrator()
    {
        return $this->belongsTo(FundAdministrator::class, 'fund_administrator_id', 'id');
    }
}
