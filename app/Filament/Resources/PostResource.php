<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Tables\Actions;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Str;
use FilamentTiptapEditor\TiptapEditor;
use FilamentTiptapEditor\Enums\TiptapOutput;
use Filament\Forms\Components\FileUpload;


class PostResource extends Resource
{
    protected static ?string $model = Post::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('title')
                ->label('Заглавие')
                ->required()
                ->afterStateUpdated(function ($state, callable $set) {
                    $set('slug', Str::slug($state));
                }),

            TextInput::make('slug')
                ->label('Slug')
                ->required()
                ->unique(ignoreRecord: true)
                ->disabled(),

            TextInput::make('section_heading')
                ->label('Заглавие на секция / глава')
                ->placeholder('Пример: The Monad – 1')
                ->maxLength(255)
                ->helperText('Това е заглавието на секцията или главата, в която се намира статията.
                Например: "The Monad – 1" или "The Monad – 2".
                Ако искаме да добавим статия към глава 1 пишем "The Monad – 1".
                Ако искаме да добавим статия към глава 2 пишем "The Monad – 2". и тн.'),

            Select::make('topics')
                ->label('Темa/и')
                ->relationship('topics', 'title')
                ->multiple()
                ->searchable()
                ->preload()
                ->required(),

            TextInput::make('author')
                ->label('Автор')
                ->nullable(),

            Textarea::make('excerpt')
                ->label('Кратко описание')
                ->rows(3),

            FileUpload::make('image')
                ->label('Основна снимка')
                ->image()
                ->imageEditor()
                ->disk('public')
                ->directory('uploads/posts/featured')
                ->preserveFilenames()
                ->nullable()
                ->helperText('Тази снимка ще се показва най-отгоре над статията.'),

            TiptapEditor::make('content')
                ->label('Съдържание')
                ->profile('default')
                ->tools([
                    'heading',
                    'bold',
                    'italic',
                    'underline',
                    'strike',
                    'bullet-list',
                    'ordered-list',
                    'blockquote',
                    'code-block',
                    'link',
                    'media',
                    'oembed',
                    'undo',
                    'redo',
                ])
                ->disk('public')
                ->directory('uploads/posts')
                ->output(TiptapOutput::Html)
                ->extraInputAttributes(['style' => 'min-height: 300px'])
                ->columnSpan('full'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('section_heading')->label('Секция')->sortable(),
                TextColumn::make('title')->label('Заглавие')->sortable()->searchable(),
                TextColumn::make('slug')->label('Slug')->limit(30),
                TextColumn::make('author')->label('Автор'),
            ])
            ->actions([
                Actions\EditAction::make(),
            ])
            ->bulkActions([
                Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
