<?php

namespace App\Filament\Resources\Wipsys;

use App\Filament\Resources\Wipsys\QualitycheckResource\Pages;
use App\Filament\Resources\Wipsys\QualitycheckResource\RelationManagers;
use App\Models\Wipsys\Qualitycheck;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class QualitycheckResource extends Resource
{
    protected static ?string $model = Qualitycheck::class;

    protected static ?string $navigationGroup = 'WipSys Settings';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('description')
                    ->maxLength(228),
                Forms\Components\Toggle::make('archive')
                    ->required(),
                Forms\Components\TextInput::make('revision'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('description'),
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
            'index' => Pages\ListQualitychecks::route('/'),
            'create' => Pages\CreateQualitycheck::route('/create'),
            'edit' => Pages\EditQualitycheck::route('/{record}/edit'),
        ];
    }    
}
