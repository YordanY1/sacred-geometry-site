<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookResource\Pages;
use App\Filament\Resources\BookResource\RelationManagers;
use App\Models\Book;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use FilamentTiptapEditor\TiptapEditor;
use FilamentTiptapEditor\Enums\TiptapOutput;

class BookResource extends Resource
{
    protected static ?string $model = Book::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('title')
                ->label('Заглавие')
                ->required()
                ->afterStateUpdated(fn($state, callable $set) => $set('slug', \Str::slug($state))),

            TextInput::make('slug')
                ->disabled()
                ->dehydrated()
                ->hidden(),

            TextInput::make('author')
                ->label('Автор')
                ->nullable(),

            TextInput::make('price')
                ->label('Цена')
                ->numeric()
                ->step(0.01)
                ->prefix('лв')
                ->minValue(0)
                ->nullable(),

            FileUpload::make('cover_image')
                ->label('Корица')
                ->image()
                ->imageEditor()
                ->disk('public')
                ->directory('uploads/books/covers')
                ->preserveFilenames()
                ->nullable(),

            FileUpload::make('back_image')
                ->label('Задна корица')
                ->image()
                ->imageEditor()
                ->disk('public')
                ->directory('uploads/books/backs')
                ->preserveFilenames()
                ->nullable(),

            Textarea::make('description')
                ->label('Описание')
                ->rows(4)
                ->nullable(),

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
                ->directory('uploads/books/content')
                ->output(TiptapOutput::Html)
                ->required()
                ->extraInputAttributes(['style' => 'min-height: 300px'])
                ->columnSpan('full'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Заглавие')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('author')->label('Автор')->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('price')->label('Цена')->money('BGN', locale: 'bg')->sortable(),
                Tables\Columns\TextColumn::make('created_at')->label('Създадена на')->date('d.m.Y')->sortable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }


    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBooks::route('/'),
            'create' => Pages\CreateBook::route('/create'),
            'edit' => Pages\EditBook::route('/{record}/edit'),
        ];
    }
}
