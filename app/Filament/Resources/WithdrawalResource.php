<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WithdrawalResource\Pages;
use App\Models\Withdrawal;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;

class WithdrawalResource extends Resource
{
    protected static ?string $model = Withdrawal::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    protected static ?string $navigationLabel = 'გატანები';

    protected static ?string $modelLabel = 'გატანა';

    protected static ?string $pluralModelLabel = 'გატანები';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->label('მომხმარებელი')
                    ->required()
                    ->searchable(),

                Forms\Components\TextInput::make('amount')
                    ->label('თანხა')
                    ->numeric()
                    ->prefix('₾')
                    ->required(),

                Forms\Components\Select::make('status')
                    ->label('სტატუსი')
                    ->options([
                        'pending' => 'მოლოდინში',
                        'approved' => 'დამტკიცებული',
                        'declined' => 'უარყოფილი',
                    ])
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set) {
                        if ($state === 'approved') {
                            $set('approved_at', now());
                        } else {
                            $set('approved_at', null);
                        }
                    }),

                Forms\Components\DateTimePicker::make('approved_at')
                    ->label('დამტკიცების თარიღი')
                    ->hidden(fn (Forms\Get $get) => $get('status') !== 'approved'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('user.name')
                    ->label('მომხმარებელი')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('amount')
                    ->label('თანხა')
                    ->money('GEL')
                    ->sortable(),

                Tables\Columns\SelectColumn::make('status')
                    ->label('სტატუსი')
                    ->options([
                        'pending' => 'მოლოდინში',
                        'approved' => 'დამტკიცებული',
                        'declined' => 'უარყოფილი',
                    ])
                    ->selectablePlaceholder(false)
                    ->afterStateUpdated(function ($record, $state) {
                        if ($state === 'approved') {
                            $record->update(['approved_at' => now()]);
                        } else {
                            $record->update(['approved_at' => null]);
                        }
                    }),

                Tables\Columns\TextColumn::make('approved_at')
                    ->label('დამტკიცების თარიღი')
                    ->dateTime('d/m/Y H:i')
                    ->placeholder('—')
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('შექმნის თარიღი')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->filters([
                //
                Tables\Filters\SelectFilter::make('user_id')
                    ->label('User')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->preload(),

                SelectFilter::make('status')
                    ->label('სტატუსი')
                    ->options([
                        'pending' => 'მოლოდინში',
                        'approved' => 'დამტკიცებული',
                        'declined' => 'უარყოფილი',
                    ]),
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
            'index' => Pages\ListWithdrawals::route('/'),
            'create' => Pages\CreateWithdrawal::route('/create'),
            'edit' => Pages\EditWithdrawal::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool{
        return false;
    }
}
