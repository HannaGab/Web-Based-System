<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FamilyProfileResource\Pages;
use App\Filament\Resources\FamilyProfileResource\RelationManagers;
use App\Models\FamilyProfile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FamilyProfileResource extends Resource
{
    protected static ?string $model = FamilyProfile::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('sex')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('age')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('birthdate')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('civilstatus')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('religion')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('educAttainment')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('occupation')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('monthlyincome')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('typeOfDwelling')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('watersource')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('toiletFacility')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('housing_materials')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('4ps')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sex')
                    ->searchable(),
                Tables\Columns\TextColumn::make('age')
                    ->searchable(),
                Tables\Columns\TextColumn::make('birthdate')
                    ->searchable(),
                Tables\Columns\TextColumn::make('civilstatus')
                    ->searchable(),
                Tables\Columns\TextColumn::make('religion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('educAttainment')
                    ->searchable(),
                Tables\Columns\TextColumn::make('occupation')
                    ->searchable(),
                Tables\Columns\TextColumn::make('monthlyincome')
                    ->searchable(),
                Tables\Columns\TextColumn::make('typeOfDwelling')
                    ->searchable(),
                Tables\Columns\TextColumn::make('watersource')
                    ->searchable(),
                Tables\Columns\TextColumn::make('toiletFacility')
                    ->searchable(),
                Tables\Columns\TextColumn::make('housing_materials')
                    ->searchable(),
                Tables\Columns\TextColumn::make('4ps')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListFamilyProfiles::route('/'),
            'create' => Pages\CreateFamilyProfile::route('/create'),
            'edit' => Pages\EditFamilyProfile::route('/{record}/edit'),
        ];
    }
}
