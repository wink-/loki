<?php

namespace App\Filament\Resources\Wipsys;

use App\Filament\Resources\Wipsys\PartsBackupResource\Pages;
use App\Filament\Resources\Wipsys\PartsBackupResource\RelationManagers;
use App\Models\Wipsys\PartsBackup;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PartsBackupResource extends Resource
{
    protected static ?string $model = PartsBackup::class;

    protected static ?string $navigationGroup = 'WipSys Settings';    

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('number')
                    ->maxLength(228),
                Forms\Components\TextInput::make('revision_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('description')
                    ->maxLength(228),
                Forms\Components\TextInput::make('customer_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('customer_name')
                    ->maxLength(228),
                Forms\Components\TextInput::make('process_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('method_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('price'),
                Forms\Components\TextInput::make('price_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('price_break'),
                Forms\Components\TextInput::make('quantity_price_break'),
                Forms\Components\TextInput::make('unit_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('minimum_lot_charge'),
                Forms\Components\TextInput::make('minimum_line_charge'),
                Forms\Components\TextInput::make('quote_id'),
                Forms\Components\Toggle::make('certify')
                    ->required(),
                Forms\Components\TextInput::make('specification')
                    ->maxLength(228),
                Forms\Components\Toggle::make('bake')
                    ->required(),
                Forms\Components\TextInput::make('baking_time_pre')
                    ->maxLength(228),
                Forms\Components\TextInput::make('baking_temp_pre')
                    ->maxLength(228),
                Forms\Components\TextInput::make('baking_time_post')
                    ->maxLength(228),
                Forms\Components\TextInput::make('baking_temp_post')
                    ->maxLength(228),
                Forms\Components\TextInput::make('procedure_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('material')
                    ->maxLength(228),
                Forms\Components\TextInput::make('material_name')
                    ->maxLength(228),
                Forms\Components\TextInput::make('material_condition')
                    ->maxLength(228),
                Forms\Components\TextInput::make('thickness_minimum'),
                Forms\Components\TextInput::make('thickness_maximum'),
                Forms\Components\TextInput::make('thickness_unit_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('surface_area'),
                Forms\Components\TextInput::make('surface_area_unit_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('weight'),
                Forms\Components\TextInput::make('weight_unit_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('length'),
                Forms\Components\TextInput::make('width'),
                Forms\Components\TextInput::make('height'),
                Forms\Components\TextInput::make('dimension_unit_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('material_thickness'),
                Forms\Components\TextInput::make('material_thickness_unit_code')
                    ->maxLength(10),
                Forms\Components\Textarea::make('note')
                    ->maxLength(65535),
                Forms\Components\Textarea::make('special_requirement')
                    ->maxLength(65535),
                Forms\Components\Textarea::make('operator_note')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('quality_check_1'),
                Forms\Components\TextInput::make('quality_check_2'),
                Forms\Components\TextInput::make('quality_check_3'),
                Forms\Components\TextInput::make('quality_check_4'),
                Forms\Components\TextInput::make('quality_check_5'),
                Forms\Components\TextInput::make('quality_check_6'),
                Forms\Components\TextInput::make('image_count'),
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
                Tables\Columns\TextColumn::make('revision_code'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('customer_code'),
                Tables\Columns\TextColumn::make('customer_name'),
                Tables\Columns\TextColumn::make('process_code'),
                Tables\Columns\TextColumn::make('method_code'),
                Tables\Columns\TextColumn::make('price'),
                Tables\Columns\TextColumn::make('price_code'),
                Tables\Columns\TextColumn::make('price_break'),
                Tables\Columns\TextColumn::make('quantity_price_break'),
                Tables\Columns\TextColumn::make('unit_code'),
                Tables\Columns\TextColumn::make('minimum_lot_charge'),
                Tables\Columns\TextColumn::make('minimum_line_charge'),
                Tables\Columns\TextColumn::make('quote_id'),
                Tables\Columns\BooleanColumn::make('certify'),
                Tables\Columns\TextColumn::make('specification'),
                Tables\Columns\BooleanColumn::make('bake'),
                Tables\Columns\TextColumn::make('baking_time_pre'),
                Tables\Columns\TextColumn::make('baking_temp_pre'),
                Tables\Columns\TextColumn::make('baking_time_post'),
                Tables\Columns\TextColumn::make('baking_temp_post'),
                Tables\Columns\TextColumn::make('procedure_code'),
                Tables\Columns\TextColumn::make('material'),
                Tables\Columns\TextColumn::make('material_name'),
                Tables\Columns\TextColumn::make('material_condition'),
                Tables\Columns\TextColumn::make('thickness_minimum'),
                Tables\Columns\TextColumn::make('thickness_maximum'),
                Tables\Columns\TextColumn::make('thickness_unit_code'),
                Tables\Columns\TextColumn::make('surface_area'),
                Tables\Columns\TextColumn::make('surface_area_unit_code'),
                Tables\Columns\TextColumn::make('weight'),
                Tables\Columns\TextColumn::make('weight_unit_code'),
                Tables\Columns\TextColumn::make('length'),
                Tables\Columns\TextColumn::make('width'),
                Tables\Columns\TextColumn::make('height'),
                Tables\Columns\TextColumn::make('dimension_unit_code'),
                Tables\Columns\TextColumn::make('material_thickness'),
                Tables\Columns\TextColumn::make('material_thickness_unit_code'),
                Tables\Columns\TextColumn::make('note'),
                Tables\Columns\TextColumn::make('special_requirement'),
                Tables\Columns\TextColumn::make('operator_note'),
                Tables\Columns\TextColumn::make('quality_check_1'),
                Tables\Columns\TextColumn::make('quality_check_2'),
                Tables\Columns\TextColumn::make('quality_check_3'),
                Tables\Columns\TextColumn::make('quality_check_4'),
                Tables\Columns\TextColumn::make('quality_check_5'),
                Tables\Columns\TextColumn::make('quality_check_6'),
                Tables\Columns\TextColumn::make('image_count'),
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
            'index' => Pages\ListPartsBackups::route('/'),
            'create' => Pages\CreatePartsBackup::route('/create'),
            'edit' => Pages\EditPartsBackup::route('/{record}/edit'),
        ];
    }    
}
