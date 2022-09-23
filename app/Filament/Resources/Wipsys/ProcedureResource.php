<?php

namespace App\Filament\Resources\Wipsys;

use App\Filament\Resources\Wipsys\ProcedureResource\Pages;
use App\Filament\Resources\Wipsys\ProcedureResource\RelationManagers;
use App\Models\Wipsys\Procedure;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProcedureResource extends Resource
{
    protected static ?string $model = Procedure::class;

    protected static ?string $navigationGroup = 'WipSys Settings';    

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('description')
                    ->maxLength(228),
                Forms\Components\TextInput::make('document')
                    ->maxLength(228),
                Forms\Components\TextInput::make('minimum_price'),
                Forms\Components\TextInput::make('each_price'),
                Forms\Components\Toggle::make('archive')
                    ->required(),
                Forms\Components\TextInput::make('revision')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('code'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('document'),
                Tables\Columns\TextColumn::make('minimum_price'),
                Tables\Columns\TextColumn::make('each_price'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
                Tables\Columns\BooleanColumn::make('archive'),
                Tables\Columns\TextColumn::make('revision'),
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
            'index' => Pages\ListProcedures::route('/'),
            'create' => Pages\CreateProcedure::route('/create'),
            'edit' => Pages\EditProcedure::route('/{record}/edit'),
        ];
    }    
}
