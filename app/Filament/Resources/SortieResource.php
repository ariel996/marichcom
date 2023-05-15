<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SortieResource\Pages;
use App\Filament\Resources\SortieResource\RelationManagers;
use App\Models\Sortie;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SortieResource extends Resource
{
    protected static ?string $model = Sortie::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('client_id')
                    ->relationship('client', 'id'),
                Forms\Components\TextInput::make('montant')
                    ->required(),
                Forms\Components\DatePicker::make('date_sortie')
                    ->required(),
                Forms\Components\Textarea::make('description'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('client.id'),
                Tables\Columns\TextColumn::make('montant'),
                Tables\Columns\TextColumn::make('date_sortie')
                    ->date(),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
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
            'index' => Pages\ListSorties::route('/'),
            'create' => Pages\CreateSortie::route('/create'),
            'edit' => Pages\EditSortie::route('/{record}/edit'),
        ];
    }    
}
