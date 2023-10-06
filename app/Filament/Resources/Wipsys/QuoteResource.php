<?php

namespace App\Filament\Resources\Wipsys;

use App\Filament\Resources\Wipsys\QuoteResource\Pages;
use App\Filament\Resources\Wipsys\QuoteResource\RelationManagers;
use App\Models\Wipsys\Quote;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class QuoteResource extends Resource
{
    protected static ?string $model = Quote::class;

    protected static ?string $navigationGroup = 'WipSys';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('customer_id'),
                Forms\Components\TextInput::make('customer_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('customer_name')
                    ->maxLength(228),
                Forms\Components\TextInput::make('contact_id'),
                Forms\Components\TextInput::make('customer_rfq')
                    ->maxLength(15),
                Forms\Components\TextInput::make('part_id'),
                Forms\Components\TextInput::make('part_number')
                    ->maxLength(50),
                Forms\Components\TextInput::make('revision_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('part_description')
                    ->maxLength(191),
                Forms\Components\TextInput::make('specification')
                    ->maxLength(191),
                Forms\Components\TextInput::make('material')
                    ->maxLength(191),
                Forms\Components\TextInput::make('process_id'),
                Forms\Components\TextInput::make('process_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('process_old')
                    ->maxLength(50),
                Forms\Components\TextInput::make('method_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('method')
                    ->maxLength(50),
                Forms\Components\TextInput::make('quantity_minimum')
                    ->maxLength(191),
                Forms\Components\TextInput::make('quantity_maximum')
                    ->maxLength(191),
                Forms\Components\TextInput::make('unit_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('units')
                    ->maxLength(191),
                Forms\Components\TextInput::make('quantity1')
                    ->maxLength(30),
                Forms\Components\TextInput::make('price'),
                Forms\Components\TextInput::make('price_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('minimum_lot_charge'),
                Forms\Components\TextInput::make('quantity_price_break'),
                Forms\Components\TextInput::make('price_break'),
                Forms\Components\TextInput::make('weight'),
                Forms\Components\TextInput::make('weight_unit_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('surface_area')
                    ->maxLength(30),
                Forms\Components\TextInput::make('surface_area_unit_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('thickness_minimum')
                    ->maxLength(10),
                Forms\Components\TextInput::make('thickness_maximum')
                    ->maxLength(10),
                Forms\Components\TextInput::make('thickness_unit_code')
                    ->maxLength(10),
                Forms\Components\Textarea::make('notes')
                    ->maxLength(65535),
                Forms\Components\Textarea::make('comments')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('quotedBy')
                    ->maxLength(10),
                Forms\Components\Toggle::make('baking'),
                Forms\Components\TextInput::make('baking_time_pre')
                    ->maxLength(191),
                Forms\Components\TextInput::make('baking_temp_pre')
                    ->maxLength(191),
                Forms\Components\TextInput::make('baking_time_post')
                    ->maxLength(191),
                Forms\Components\TextInput::make('baking_temp_post')
                    ->maxLength(191),
                Forms\Components\Textarea::make('bake_notes')
                    ->maxLength(65535),
                Forms\Components\Toggle::make('blasting'),
                Forms\Components\Textarea::make('blast_notes')
                    ->maxLength(65535),
                Forms\Components\Toggle::make('masking'),
                Forms\Components\Textarea::make('mask_notes')
                    ->maxLength(65535),
                Forms\Components\Toggle::make('testing'),
                Forms\Components\Textarea::make('test_notes')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('user_id'),
                Forms\Components\TextInput::make('user_code')
                    ->maxLength(10),
                Forms\Components\Textarea::make('emails')
                    ->maxLength(65535),
                Forms\Components\Toggle::make('email_print'),
                Forms\Components\TextInput::make('print')
                    ->maxLength(191),
                Forms\Components\TextInput::make('value_min'),
                Forms\Components\TextInput::make('value_max'),
                Forms\Components\TextInput::make('image_count'),
                Forms\Components\Toggle::make('archive')
                    ->required(),
                Forms\Components\TextInput::make('revision'),
                Forms\Components\TextInput::make('session_id')
                    ->maxLength(228),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->searchable()->sortable()->label('NUMBER'),     
                // Tables\Columns\TextColumn::make('customer_id'),
                Tables\Columns\TextColumn::make('customer.code')->searchable()->sortable()->label('CODE'),
                Tables\Columns\TextColumn::make('customer.name')->searchable()->sortable()->label('NAME'),
                Tables\Columns\TextColumn::make('part_number')->searchable()->sortable()->label('PART NUMBER'),                
                // Tables\Columns\TextColumn::make('contact_id'),
                // Tables\Columns\TextColumn::make('customer_rfq'),
                // Tables\Columns\TextColumn::make('part_id'),
                // Tables\Columns\TextColumn::make('revision_code'),
                Tables\Columns\TextColumn::make('part_description'),                
                Tables\Columns\TextColumn::make('process.code')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('specification')->searchable()->sortable(),
                // Tables\Columns\TextColumn::make('material'),
                // Tables\Columns\TextColumn::make('process_id'),

                // Tables\Columns\TextColumn::make('process_old'),
                // Tables\Columns\TextColumn::make('method_code'),
                // Tables\Columns\TextColumn::make('method'),
                Tables\Columns\TextColumn::make('quantity_minimum'),
                Tables\Columns\TextColumn::make('quantity_maximum'),
                // Tables\Columns\TextColumn::make('unit_code'),
                // Tables\Columns\TextColumn::make('units'),
                // Tables\Columns\TextColumn::make('quantity1'),
                Tables\Columns\TextColumn::make('price'),
                Tables\Columns\TextColumn::make('price_code'),
                Tables\Columns\TextColumn::make('minimum_lot_charge'),
                // Tables\Columns\TextColumn::make('quantity_price_break'),
                // Tables\Columns\TextColumn::make('price_break'),
                // Tables\Columns\TextColumn::make('weight'),
                // Tables\Columns\TextColumn::make('weight_unit_code'),
                // Tables\Columns\TextColumn::make('surface_area'),
                // Tables\Columns\TextColumn::make('surface_area_unit_code'),
                // Tables\Columns\TextColumn::make('thickness_minimum'),
                // Tables\Columns\TextColumn::make('thickness_maximum'),
                // Tables\Columns\TextColumn::make('thickness_unit_code'),
                // Tables\Columns\TextColumn::make('notes'),
                // Tables\Columns\TextColumn::make('comments'),
                // Tables\Columns\TextColumn::make('quotedBy'),
                // Tables\Columns\BooleanColumn::make('baking'),
                // Tables\Columns\TextColumn::make('baking_time_pre'),
                // Tables\Columns\TextColumn::make('baking_temp_pre'),
                // Tables\Columns\TextColumn::make('baking_time_post'),
                // Tables\Columns\TextColumn::make('baking_temp_post'),
                // Tables\Columns\TextColumn::make('bake_notes'),
                // Tables\Columns\BooleanColumn::make('blasting'),
                // Tables\Columns\TextColumn::make('blast_notes'),
                // Tables\Columns\BooleanColumn::make('masking'),
                // Tables\Columns\TextColumn::make('mask_notes'),
                // Tables\Columns\BooleanColumn::make('testing'),
                // Tables\Columns\TextColumn::make('test_notes'),
                // Tables\Columns\TextColumn::make('user_id'),
                // Tables\Columns\TextColumn::make('user_code'),
                // Tables\Columns\TextColumn::make('emails'),
                // Tables\Columns\BooleanColumn::make('email_print'),
                // Tables\Columns\TextColumn::make('print'),
                // Tables\Columns\TextColumn::make('value_min'),
                // Tables\Columns\TextColumn::make('value_max'),
                // Tables\Columns\TextColumn::make('image_count'),
                // Tables\Columns\BooleanColumn::make('archive'),
                // Tables\Columns\TextColumn::make('revision'),
                // Tables\Columns\TextColumn::make('session_id'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
                // Tables\Columns\TextColumn::make('deleted_at')
                //     ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListQuotes::route('/'),
            'create' => Pages\CreateQuote::route('/create'),
            'edit' => Pages\EditQuote::route('/{record}/edit'),
        ];
    }    
}
