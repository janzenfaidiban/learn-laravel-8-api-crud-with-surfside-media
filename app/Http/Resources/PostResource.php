<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    
    public function toArray($request)
    {
        // // show all items
        // return parent::toArray($request); 

        // show custom items
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body
        ];
    }

    public function with($request)
    {
        return [
            'version' => '1.0.0',
            'author_url' => 'https://janzenfaidiban.github.io'
        ];
    }
}
