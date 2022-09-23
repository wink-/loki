<?php

namespace App\Filament\Resources\Wipsys;

use App\Filament\Resources\Wipsys\InvoiceResource\Pages;
use App\Filament\Resources\Wipsys\InvoiceResource\RelationManagers;
use App\Models\Wipsys\Invoice;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InvoiceResource extends Resource
{
    protected static ?string $model = Invoice::class;

    protected static ?string $navigationGroup = 'WipSys';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('number'),
                Forms\Components\TextInput::make('customer_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('customer_purchase_order')
                    ->maxLength(228),
                Forms\Components\DateTimePicker::make('date'),
                Forms\Components\Textarea::make('note')
                    ->maxLength(65535),
                Forms\Components\Textarea::make('emails')
                    ->maxLength(65535),
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
                Tables\Columns\TextColumn::make('customer_code'),
                Tables\Columns\TextColumn::make('customer_purchase_order'),
                Tables\Columns\TextColumn::make('date')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('note'),
                Tables\Columns\TextColumn::make('emails'),
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
            'index' => Pages\ListInvoices::route('/'),
            'create' => Pages\CreateInvoice::route('/create'),
            'edit' => Pages\EditInvoice::route('/{record}/edit'),
        ];
    }    
}
