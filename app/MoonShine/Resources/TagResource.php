<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class TagResource extends ModelResource
{
    protected string $model = Tag::class;

    protected string $title = 'Tags';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
