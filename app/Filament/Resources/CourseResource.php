<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseResource\Pages;
use App\Filament\Resources\CourseResource\RelationManagers;
use App\Models\Course;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use FilamentTiptapEditor\TiptapEditor;
use FilamentTiptapEditor\Enums\TiptapOutput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class CourseResource extends Resource
{
    protected static ?string $model = Course::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('title')
                ->label('Заглавие')
                ->required()
                ->afterStateUpdated(fn($state, callable $set) => $set('slug', \Str::slug($state))),

            TextInput::make('slug')
                ->label('Slug')
                ->disabled()
                ->dehydrated()
                ->hidden(),

            TextInput::make('price')
                ->label('Цена')
                ->numeric()
                ->step(0.01)
                ->prefix('лв')
                ->default(0)
                ->required()
                ->minValue(0),


            FileUpload::make('image')
                ->label('Основна снимка')
                ->image()
                ->imageEditor()
                ->disk('public')
                ->directory('uploads/courses')
                ->preserveFilenames()
                ->nullable(),

            Textarea::make('excerpt')
                ->label('Въведение')
                ->rows(4),

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
                ->directory('uploads/courses')
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
                Tables\Columns\TextColumn::make('title')
                    ->label('Заглавие')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('slug')
                    ->label('Slug')
                    ->copyable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('excerpt')
                    ->label('Въведение')
                    ->limit(50)
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('price')
                    ->label('Цена')
                    ->money('BGN', locale: 'bg')
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Създадено на')
                    ->date('d.m.Y')
                    ->sortable()
                    ->toggleable(),
            ])
            ->filters([
                //
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
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourse::route('/create'),
            'edit' => Pages\EditCourse::route('/{record}/edit'),
        ];
    }
}
