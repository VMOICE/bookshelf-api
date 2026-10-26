<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'         => $this->id,
            'title'      => $this->title,
            'author'     => $this->author,
            'pages'      => $this->pages,
            'status'     => $this->status,
            'rating'     => $this->rating,
            'genre'      => $this->whenLoaded('genre', fn ($genre) => [
                'id'   => $genre->id,
                'name' => $genre->name,
            ]),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}