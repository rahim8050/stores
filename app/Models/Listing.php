<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'tags',
        'company',
        'location',
        'email',
        'website',
        'description',
    ];
    public function ScopeFilter ($query, array $filters){
        if($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }
        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
        ->orWhere ('description', 'like', '%' . request('search') . '%')
        ->orWhere ('tags', 'like', '%' . request('search') . '%')
        ;
        }


    }
    // relationship
     // Relationship To User
     public function user(): BelongsTo{
        return $this->belongsTo(User::class, 'user_id');
    }
}
