<?php

namespace App\Traits;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


trait HasAuthor
{
    public function author(): User
    {
        return $this->authorRelation;
    }

    public function authoRelation(): BelongsTo
    {
        return $this->belongsTo(User::class,'author_id','id');
    }

    public function isAuthoredBy(User $user): bool
    {
        return $this->author()->matches($user);
    }

    public function isAuthored(User $author){
        return $this->authorRelation()->associate($author);
    }
}


