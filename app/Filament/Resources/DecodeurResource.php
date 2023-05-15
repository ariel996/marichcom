<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DecodeurResource\Pages;
use App\Filament\Resources\DecodeurResource\RelationManagers;
use App\Models\Decodeur;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DecodeurResource extends Resource
{
    protected static ?string $model = Decodeur::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('partner_id')
                    ->required(),
                Forms\Components\TextInput::make('numero_decodeur')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('etat_decodeur')
                    ->required(),
                Forms\Components\TextInput::make('prix_achat')
                    ->required(),
                Forms\Components\TextInput::make('marque')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('date')
                    ->required(),
                Forms\Components\Textarea::make('description'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('partner_id'),
                Tables\Columns\TextColumn::make('numero_decodeur'),
                Tables\Columns\TextColumn::make('etat_decodeur'),
                Tables\Columns\TextColumn::make('prix_achat'),
                Tables\Columns\TextColumn::make('marque'),
                Tables\Columns\TextColumn::make('date')
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
            'index' => Pages\ListDecodeurs::route('/'),
            'create' => Pages\CreateDecodeur::route('/create'),
            'edit' => Pages\EditDecodeur::route('/{record}/edit'),
        ];
    }    
}
