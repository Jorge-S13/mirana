<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

use MoonShine\Decorations\Column;
use MoonShine\Decorations\Divider;
use MoonShine\Decorations\Grid;
use MoonShine\Enums\ClickAction;
use MoonShine\Fields\Image;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Relationships\BelongsToMany;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Fields\TinyMce;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class PostResource extends ModelResource
{
    protected string $model = Post::class;

    protected string $title = 'Posts';

    protected ?ClickAction $clickAction = ClickAction::EDIT;

    public function fields(): array
    {
        return [
            Divider::make('Main Information'),
            Grid::make([
                Column::make([
                    Block::make([
                        ID::make()->sortable(),
                        Text::make('Title')->required(),
                        Textarea::make('Description')->required(),
                        Image::make('Main Image', 'main_image')->disk('public')->dir('posts')->hideOnIndex(),
                    ]),
                ])->columnSpan(8),
                Column::make([
                    Block::make([
                        BelongsTo::make('Category', resource: new CategoryResource())->searchable(),
                        BelongsToMany::make('Tags', resource: new TagResource())->hideOnIndex()->creatable()->selectMode()->searchable(),
                        Switcher::make('Is published')->updateOnPreview(),
                    ])
                ])->columnSpan(4)
            ]),
            Divider::make('Content'),
            Grid::make([
                Column::make([
                    Block::make([
                        TinyMce::make('Content')->required()->hideOnIndex(),
                    ])
                ])->columnSpan(12)
            ])
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
