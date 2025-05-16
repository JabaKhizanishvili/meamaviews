<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SocialResource\Pages;
use App\Filament\Resources\SocialResource\RelationManagers;
use App\Models\Social;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SocialResource extends Resource
{
    protected static ?string $model = Social::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),

//                Forms\Components\FileUpload::make('icon')
//                    ->directory('social-icons')
//                    ->image()
//                    ->maxSize(1024)
//                    ->helperText('Upload social media icon (max 1MB)'),
                TextInput::make('icon_text')->required(),

                Forms\Components\TextInput::make('url')
                    ->required()
                    ->url()
                    ->maxLength(255),

//                Forms\Components\TextInput::make('sort_order')
//                    ->numeric()
//                    ->default(0),

                Forms\Components\Toggle::make('is_active')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
//                Tables\Columns\ImageColumn::make('icon')
//                    ->size(40),

                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('url')
                    ->limit(30),

                Tables\Columns\ToggleColumn::make('is_active'),

//                Tables\Columns\TextColumn::make('sort_order')
//                    ->sortable(),
                 Tables\Columns\TextColumn::make('icon_text')

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListSocials::route('/'),
            'create' => Pages\CreateSocial::route('/create'),
            'edit' => Pages\EditSocial::route('/{record}/edit'),
        ];
    }
}
