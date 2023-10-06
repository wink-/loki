<?php

namespace App\Filament\Resources\Wipsys;

use App\Filament\Resources\Wipsys\LaborCardResource\Pages;
use App\Filament\Resources\Wipsys\LaborCardResource\RelationManagers;
use App\Models\Wipsys\LaborCard;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LaborCardResource extends Resource
{
    protected static ?string $model = LaborCard::class;

    protected static ?string $navigationGroup = 'WipSys';    

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('work_order_number'),
                Forms\Components\TextInput::make('employee_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('step_code')
                    ->maxLength(10),
                Forms\Components\DateTimePicker::make('job_date'),
                Forms\Components\DateTimePicker::make('time_of_day'),
                Forms\Components\TextInput::make('actual_hours'),
                Forms\Components\TextInput::make('man_hours')
                    ->required(),
                Forms\Components\TextInput::make('actual_pieces'),
                Forms\Components\TextInput::make('equipment_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('equipment_quantity'),
                Forms\Components\TextInput::make('loads'),
                Forms\Components\TextInput::make('cycle_time'),
                Forms\Components\DateTimePicker::make('time_finished'),
                Forms\Components\TextInput::make('session_id')
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
                Tables\Columns\TextColumn::make('work_order_number'),
                Tables\Columns\TextColumn::make('employee_code'),
                Tables\Columns\TextColumn::make('step_code'),
                Tables\Columns\TextColumn::make('job_date')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('time_of_day')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('actual_hours'),
                Tables\Columns\TextColumn::make('man_hours'),
                Tables\Columns\TextColumn::make('actual_pieces'),
                Tables\Columns\TextColumn::make('equipment_code'),
                Tables\Columns\TextColumn::make('equipment_quantity'),
                Tables\Columns\TextColumn::make('loads'),
                Tables\Columns\TextColumn::make('cycle_time'),
                Tables\Columns\TextColumn::make('time_finished')
                    ->dateTime(),
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
            'index' => Pages\ListLaborCards::route('/'),
            'create' => Pages\CreateLaborCard::route('/create'),
            'edit' => Pages\EditLaborCard::route('/{record}/edit'),
        ];
    }    
}
