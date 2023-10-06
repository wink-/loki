<?php

namespace App\Filament\Resources\Wipsys;

use App\Filament\Resources\Wipsys\EmployeeResource\Pages;
use App\Filament\Resources\Wipsys\EmployeeResource\RelationManagers;
use App\Models\Wipsys\Employee;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EmployeeResource extends Resource
{
    protected static ?string $model = Employee::class;

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
                Forms\Components\TextInput::make('signature')
                    ->maxLength(16777215),
                Forms\Components\TextInput::make('pin')
                    ->required()
                    ->maxLength(228),
                Forms\Components\Toggle::make('production')
                    ->required(),
                Forms\Components\Toggle::make('supervisor')
                    ->required(),
                Forms\Components\Textarea::make('note')
                    ->maxLength(16777215),
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
                Tables\Columns\TextColumn::make('signature'),
                Tables\Columns\TextColumn::make('pin'),
                Tables\Columns\BooleanColumn::make('production'),
                Tables\Columns\BooleanColumn::make('supervisor'),
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
            'index' => Pages\ListEmployees::route('/'),
            'create' => Pages\CreateEmployee::route('/create'),
            'edit' => Pages\EditEmployee::route('/{record}/edit'),
        ];
    }    
}
