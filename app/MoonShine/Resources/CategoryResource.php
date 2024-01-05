<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class CategoryResource extends ModelResource
{
    protected string $model = Category::class;

    protected string $title = 'Categories';

    protected string $column = 'name';

    protected bool $createInModal = true;
    protected bool $editInModal = true;

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Name')
                    ->updateOnPreview()
                    ->required(),

                Text::make('Description')->required(),

            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
