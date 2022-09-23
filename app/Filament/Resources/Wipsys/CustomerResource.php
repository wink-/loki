<?php

namespace App\Filament\Resources\Wipsys;

use App\Filament\Resources\Wipsys\CustomerResource\Pages;
use App\Filament\Resources\Wipsys\CustomerResource\RelationManagers;
use App\Models\Wipsys\Customer;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;
    
    protected static ?string $navigationGroup = 'WipSys';    

    protected static ?string $navigationIcon = 'heroicon-o-collection';

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
                Forms\Components\TextInput::make('destination_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('packing_list_copies')
                    ->required(),
                Forms\Components\TextInput::make('carrier_id'),
                Forms\Components\TextInput::make('carrier_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('CONTACT1')
                    ->maxLength(25),
                Forms\Components\TextInput::make('company_phone')
                    ->tel()
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
                Forms\Components\Textarea::make('invoice_emails')
                    ->maxLength(65535),
                Forms\Components\Toggle::make('cod'),
                Forms\Components\Toggle::make('minimum_line_charge_by_order'),
                Forms\Components\Toggle::make('minimum_line_charge_by_day'),
                Forms\Components\TextInput::make('tax_id')
                    ->maxLength(228),
                Forms\Components\Textarea::make('note')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('billing_address')
                    ->maxLength(228),
                Forms\Components\TextInput::make('billing_city')
                    ->maxLength(191),
                Forms\Components\TextInput::make('billing_state')
                    ->maxLength(191),
                Forms\Components\TextInput::make('billing_zip')
                    ->maxLength(191),
                Forms\Components\TextInput::make('billing_phone')
                    ->tel()
                    ->maxLength(191),
                Forms\Components\TextInput::make('billing_fax')
                    ->maxLength(191),
                Forms\Components\TextInput::make('billing_email')
                    ->email()
                    ->maxLength(191),
                Forms\Components\TextInput::make('ship_to_address_id'),
                Forms\Components\TextInput::make('ship_to_address_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('ship_to_address')
                    ->maxLength(191),
                Forms\Components\TextInput::make('ship_to_city')
                    ->maxLength(191),
                Forms\Components\TextInput::make('ship_to_state')
                    ->maxLength(191),
                Forms\Components\TextInput::make('ship_to_zip')
                    ->maxLength(191),
                Forms\Components\TextInput::make('ship_to_phone')
                    ->tel()
                    ->maxLength(191),
                Forms\Components\TextInput::make('ship_to_fax')
                    ->maxLength(191),
                Forms\Components\TextInput::make('ship_to_email')
                    ->email()
                    ->maxLength(191),
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
                Tables\Columns\TextColumn::make('destination_code'),
                Tables\Columns\TextColumn::make('packing_list_copies'),
                Tables\Columns\TextColumn::make('carrier_id'),
                Tables\Columns\TextColumn::make('carrier_code'),
                Tables\Columns\TextColumn::make('CONTACT1'),
                Tables\Columns\TextColumn::make('company_phone'),
                Tables\Columns\TextColumn::make('EXTENSION1'),
                Tables\Columns\TextColumn::make('CONTACT2'),
                Tables\Columns\TextColumn::make('PHONE2'),
                Tables\Columns\TextColumn::make('EXTENSION2'),
                Tables\Columns\TextColumn::make('fax'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('invoice_emails'),
                Tables\Columns\BooleanColumn::make('cod'),
                Tables\Columns\BooleanColumn::make('minimum_line_charge_by_order'),
                Tables\Columns\BooleanColumn::make('minimum_line_charge_by_day'),
                Tables\Columns\TextColumn::make('tax_id'),
                Tables\Columns\TextColumn::make('note'),
                Tables\Columns\TextColumn::make('billing_address'),
                Tables\Columns\TextColumn::make('billing_city'),
                Tables\Columns\TextColumn::make('billing_state'),
                Tables\Columns\TextColumn::make('billing_zip'),
                Tables\Columns\TextColumn::make('billing_phone'),
                Tables\Columns\TextColumn::make('billing_fax'),
                Tables\Columns\TextColumn::make('billing_email'),
                Tables\Columns\TextColumn::make('ship_to_address_id'),
                Tables\Columns\TextColumn::make('ship_to_address_code'),
                Tables\Columns\TextColumn::make('ship_to_address'),
                Tables\Columns\TextColumn::make('ship_to_city'),
                Tables\Columns\TextColumn::make('ship_to_state'),
                Tables\Columns\TextColumn::make('ship_to_zip'),
                Tables\Columns\TextColumn::make('ship_to_phone'),
                Tables\Columns\TextColumn::make('ship_to_fax'),
                Tables\Columns\TextColumn::make('ship_to_email'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('deleted_at')
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
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomer::route('/create'),
            'edit' => Pages\EditCustomer::route('/{record}/edit'),
        ];
    }    
}
