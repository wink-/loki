<?php

namespace App\Filament\Resources\Wipsys;

use App\Filament\Resources\Wipsys\DestinationResource\Pages;
use App\Filament\Resources\Wipsys\DestinationResource\RelationManagers;
use App\Models\Wipsys\Destination;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DestinationResource extends Resource
{
    protected static ?string $model = Destination::class;

    protected static ?string $navigationGroup = 'WipSys Settings';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('name')
                    ->maxLength(228),
                Forms\Components\TextInput::make('physical_address')
                    ->maxLength(228),
                Forms\Components\TextInput::make('address_extension')
                    ->maxLength(228),
                Forms\Components\TextInput::make('city')
                    ->maxLength(228),
                Forms\Components\TextInput::make('state')
                    ->maxLength(2),
                Forms\Components\TextInput::make('zip')
                    ->maxLength(10),
                Forms\Components\TextInput::make('customer_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('CONTACT1')
                    ->maxLength(25),
                Forms\Components\TextInput::make('company_phone')
                    ->tel()
                    ->maxLength(13),
                Forms\Components\TextInput::make('PHONE1')
                    ->maxLength(13),
                Forms\Components\TextInput::make('EXTENSION1')
                    ->maxLength(4),
                Forms\Components\TextInput::make('CONTACT2')
                    ->maxLength(25),
                Forms\Components\TextInput::make('PHONE2')
                    ->maxLength(13),
                Forms\Components\TextInput::make('EXTENSION2')
                    ->maxLength(4),
                Forms\Components\TextInput::make('fax')
                    ->maxLength(13),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(228),
                Forms\Components\Textarea::make('note')
                    ->maxLength(65535),
                Forms\Components\Toggle::make('archive')
                    ->required(),
                Forms\Components\TextInput::make('revision'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('code'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('physical_address'),
                Tables\Columns\TextColumn::make('address_extension'),
                Tables\Columns\TextColumn::make('city'),
                Tables\Columns\TextColumn::make('state'),
                Tables\Columns\TextColumn::make('zip'),
                Tables\Columns\TextColumn::make('customer_code'),
                Tables\Columns\TextColumn::make('CONTACT1'),
                Tables\Columns\TextColumn::make('company_phone'),
                Tables\Columns\TextColumn::make('PHONE1'),
                Tables\Columns\TextColumn::make('EXTENSION1'),
                Tables\Columns\TextColumn::make('CONTACT2'),
                Tables\Columns\TextColumn::make('PHONE2'),
                Tables\Columns\TextColumn::make('EXTENSION2'),
                Tables\Columns\TextColumn::make('fax'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('note'),
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
            'index' => Pages\ListDestinations::route('/'),
            'create' => Pages\CreateDestination::route('/create'),
            'edit' => Pages\EditDestination::route('/{record}/edit'),
        ];
    }    
}
