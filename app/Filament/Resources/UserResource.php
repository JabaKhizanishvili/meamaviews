<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\IconColumn;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('name')->required(),
                TextInput::make('email')->email()->required(),

                Toggle::make('verified')
                    ->label('Verified')
                    ->inline(),

                Toggle::make('active')
                    ->label('Active')
                    ->inline(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\ToggleColumn::make('verified'),
                Tables\Columns\ToggleColumn::make('active'),
                Tables\Columns\TextColumn::make('iban.iban')->label('iban')->searchable(),
                TextColumn::make('available_balance')
                    ->label('ბალანსი')
                    ->money('gel'),
                Tables\Columns\TextColumn::make('socialAccount.url')->label('Social Account')
            ->searchable()
            ->formatStateUsing(fn (string $state) => '<a href="' . $state . '" target="_blank" class="text-primary underline">' . $state . '</a>')
            ->html(),
                Tables\Columns\TextColumn::make('password'),


            ])
            ->filters([
                //
//                Tables\Filters\TextFilter::make('name'),
//                Tables\Filters\SelectFilter::make('email'),
                Filter::make('name')
                    ->form([
                        TextInput::make('name')->label('Name contains'),
                    ])
                    ->query(function ($query, $data) {
                        return $query->when($data['name'], fn ($q) => $q->where('name', 'like', '%' . $data['name'] . '%'));
                    }),

                Filter::make('email')
                    ->form([
                        TextInput::make('email')->label('Email contains'),
                    ])
                    ->query(function ($query, $data) {
                        return $query->when($data['email'], fn ($q) => $q->where('email', 'like', '%' . $data['email'] . '%'));
                    }),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }
}
