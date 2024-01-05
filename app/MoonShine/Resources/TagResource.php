<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;

use MoonShine\Fields\Color;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class TagResource extends ModelResource
{
    protected string $model = Tag::class;

    protected string $title = 'Tags';

    protected string $column = 'name';
    protected bool $createInModal = true;
    protected bool $editInModal = true;

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
            ]),

            Text::make('Name')
                ->updateOnPreview()
                ->required(),

            Text::make('Description')->required(),
            Switcher::make('Visible', 'is_visible'),
            Color::make('Color'),


        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
