<?php

namespace App\Models;

use App\Traits\HasAuthor;
use App\Traits\ModelHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Article extends Model
{
    use HasFactory;
    use HasAuthor;
    use ModelHelpers;

    const TABLE = 'articles';

    protected $table = self::TABLE;

    protected $fillable =[
        'titlt',
        'slug',
        'body',
        'author_id'
    ];

    public function id() : string{
        return (string) $this->id;
    }
    public function tittle(): string{
        return  $this->tittle;
    }
    public function slug(): string{
        return  $this->slug;
    }
    public function body(): string{
        return  $this->body;
    }

}
