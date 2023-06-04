<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talk extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'content',
    ];
        
    public function invoices() {
    return $this->BelongsTo(Customer::class);
    }
}