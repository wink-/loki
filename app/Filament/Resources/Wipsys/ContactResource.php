<?php

namespace App\Filament\Resources\Wipsys;

use App\Filament\Resources\Wipsys\ContactResource\Pages;
use App\Filament\Resources\Wipsys\ContactResource\RelationManagers;
use App\Models\Wipsys\Contact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationGroup = 'WipSys';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('customer_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('customer_id'),
                Forms\Components\TextInput::make('customer_name')
                    ->maxLength(191),
                Forms\Components\TextInput::make('first_name')
                    ->maxLength(191),
                Forms\Components\TextInput::make('last_name')
                    ->maxLength(191),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->maxLength(191),
                Forms\Components\TextInput::make('extension')
                    ->maxLength(191),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(191),
                Forms\Components\Textarea::make('quote_emails')
                    ->maxLength(65535),
                Forms\Components\Toggle::make('email_quote_print'),
                Forms\Components\TextInput::make('cell')
                    ->maxLength(191),
                Forms\Components\TextInput::make('fax')
                    ->maxLength(191),
                Forms\Components\Toggle::make('archive'),
                Forms\Components\TextInput::make('revision'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('customer_code'),
                Tables\Columns\TextColumn::make('customer_id'),
                Tables\Columns\TextColumn::make('customer_name'),
                Tables\Columns\TextColumn::make('first_name'),
                Tables\Columns\TextColumn::make('last_name'),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('extension'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('quote_emails'),
                Tables\Columns\BooleanColumn::make('email_quote_print'),
                Tables\Columns\TextColumn::make('cell'),
                Tables\Columns\TextColumn::make('fax'),
                Tables\Columns\BooleanColumn::make('archive'),
                Tables\Columns\TextColumn::make('revision'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('deleted_at')
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
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }    
}
