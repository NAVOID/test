<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\HewanResource\Pages;
use App\Filament\Admin\Resources\HewanResource\RelationManagers;
use App\Models\Hewan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HewanResource extends Resource
{
    protected static ?string $model = Hewan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('jenis_hewan_id')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('kandang_id')
                    ->relationship('kandang', 'id')
                    ->required(),
                Forms\Components\TextInput::make('umur')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('jenis_kelamin')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis_hewan_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kandang.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('umur')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jenis_kelamin'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListHewans::route('/'),
            'create' => Pages\CreateHewan::route('/create'),
            'edit' => Pages\EditHewan::route('/{record}/edit'),
        ];
    }
}
