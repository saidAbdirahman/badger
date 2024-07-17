<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    public static $wrap = 'Articles';
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'type' => 'articles',
            'id'  => $this->id(),
            'attribute' => [
                'title' => $this->title(),
                'slug' => $this->slug(),
                'created_at =>' => $this->created_at,
            ],
            'relationships' => [
                'suthor' => AuthorResource::maake($this->author())
            ],
            'links' => [
                'self' => route('articles.show', $this->id()),
                'related' => route('articles.show', $this->slug()) 
            ]
        ];
    }

    public function with($request){
        return [
            'status' => 'success',
        ];
    }

    public function withResponse( $request,$response){
        
        $response->header('Accept','Application/json');
    }
    
}
