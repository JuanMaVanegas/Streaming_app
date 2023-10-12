<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;
 use Illuminate\Database\Eloquent\Relations\BelongsTo;
 use Illuminate\Database\Eloquent\Relations\HasMany;

class Qrcode extends Model
{
     use SoftDeletes;    
    public $table = 'qrcodes';

    public $fillable = [
        'user_id',
        'website',
        'company_name',
        'product_name',
        'product_url',
        'callback_url',
        'qrcode_path',
        'product_image',
        'amount'
    ];

    protected $casts = [
        'website' => 'string',
        'company_name' => 'string',
        'product_name' => 'string',
        'product_url' => 'string',
        'callback_url' => 'string',
        'qrcode_path' => 'string',
        'product_image' => 'string',
        'amount' => 'float'
    ];

    public static array $rules = [
        'user_id' => 'required',
        'website' => 'nullable|string|max:255',
        'company_name' => 'required|string|max:255',
        'product_name' => 'required|string|max:255',
        'product_url' => 'nullable|string|max:255',
        'callback_url' => 'required|string|max:255',
        'qrcode_path' => 'nullable|string|max:255',
        'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        'amount' => 'required|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    

    public function users(): BelongsTo

    {

        return $this->belongsTo(User::class);

    }

   
    
    public function transactions2(): HasMany

     {

        return $this->hasMany(Transaction::class);

     }
}
