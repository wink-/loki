<?php

namespace App\Filament\Resources\Wipsys;

use App\Filament\Resources\Wipsys\TagResource\Pages;
use App\Filament\Resources\Wipsys\TagResource\RelationManagers;
use App\Models\Wipsys\Tag;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TagResource extends Resource
{
    protected static ?string $model = Tag::class;

    protected static ?string $navigationGroup = 'WipSys';    

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('number'),
                Forms\Components\TextInput::make('work_order_number'),
                Forms\Components\TextInput::make('quantity'),
                Forms\Components\TextInput::make('quantity_shipped'),
                Forms\Components\Toggle::make('shipped'),
                Forms\Components\DateTimePicker::make('date_received'),
                Forms\Components\Textarea::make('note')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('ordinal'),
                Forms\Components\TextInput::make('container')
                    ->maxLength(228),
                Forms\Components\Toggle::make('printed'),
                Forms\Components\TextInput::make('session_id')
                    ->maxLength(228),
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
                Tables\Columns\TextColumn::make('number'),
                Tables\Columns\TextColumn::make('work_order_number'),
                Tables\Columns\TextColumn::make('quantity'),
                Tables\Columns\TextColumn::make('quantity_shipped'),
                Tables\Columns\BooleanColumn::make('shipped'),
                Tables\Columns\TextColumn::make('date_received')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('note'),
                Tables\Columns\TextColumn::make('ordinal'),
                Tables\Columns\TextColumn::make('container'),
                Tables\Columns\BooleanColumn::make('printed'),
                Tables\Columns\TextColumn::make('session_id'),
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
            'index' => Pages\ListTags::route('/'),
            'create' => Pages\CreateTag::route('/create'),
            'edit' => Pages\EditTag::route('/{record}/edit'),
        ];
    }    
}
