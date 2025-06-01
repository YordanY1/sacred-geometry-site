<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TopicResource\Pages;
use App\Models\Topic;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class TopicResource extends Resource
{
    protected static ?string $model = Topic::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Теми';
    protected static ?string $pluralModelLabel = 'Теми';
    protected static ?string $modelLabel = 'Тема';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('title')
                ->label('Заглавие')
                ->required()
                ->reactive()
                ->afterStateUpdated(function ($state, callable $set) {
                    $set('slug', \Str::slug($state));
                }),

            TextInput::make('slug')
                ->label('Slug')
                ->required()
                ->unique(ignoreRecord: true)
                ->disabled(),

            Select::make('icon')
                ->label('Икона')
                ->options([
                    'fas fa-draw-polygon' => 'Геометрия',
                    'fas fa-moon' => 'Сънища',
                    'fas fa-flask' => 'Алхимия',
                    'fas fa-landmark' => 'История',
                    'fas fa-infinity' => 'Вортекс',
                    'fas fa-atom' => 'Наука',
                ])
                ->searchable()
                ->required(),

            Textarea::make('description')
                ->label('Кратко описание')
                ->rows(3),

            RichEditor::make('content')
                ->label('Съдържание')
                ->columnSpan('full')
                ->toolbarButtons([
                    'bold',
                    'italic',
                    'underline',
                    'strike',
                    'link',
                    'bulletList',
                    'orderedList',
                    'codeBlock',
                    'blockquote',
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Заглавие')->searchable()->sortable(),
                TextColumn::make('slug')->label('Slug')->searchable(),
                TextColumn::make('icon')->label('Икона'),
                TextColumn::make('description')->label('Описание')->limit(60),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTopics::route('/'),
            'create' => Pages\CreateTopic::route('/create'),
            'edit' => Pages\EditTopic::route('/{record}/edit'),
        ];
    }
}
