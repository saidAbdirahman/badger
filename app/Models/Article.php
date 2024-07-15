<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

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
