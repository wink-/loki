<?php

namespace App\Filament\Resources\Wipsys;

use App\Filament\Resources\Wipsys\WorkgroupResource\Pages;
use App\Filament\Resources\Wipsys\WorkgroupResource\RelationManagers;
use App\Models\Wipsys\Workgroup;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WorkgroupResource extends Resource
{
    protected static ?string $model = Workgroup::class;

    protected static ?string $navigationGroup = 'WipSys Settings';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->maxLength(228),
                Forms\Components\TextInput::make('process_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('method_code')
                    ->maxLength(10),
                Forms\Components\Toggle::make('method_default')
                    ->required(),
                Forms\Components\TextInput::make('step_code')
                    ->maxLength(10),
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
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('process_code'),
                Tables\Columns\TextColumn::make('method_code'),
                Tables\Columns\BooleanColumn::make('method_default'),
                Tables\Columns\TextColumn::make('step_code'),
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
            'index' => Pages\ListWorkgroups::route('/'),
            'create' => Pages\CreateWorkgroup::route('/create'),
            'edit' => Pages\EditWorkgroup::route('/{record}/edit'),
        ];
    }    
}
