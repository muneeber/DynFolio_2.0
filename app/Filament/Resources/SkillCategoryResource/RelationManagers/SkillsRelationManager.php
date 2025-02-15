<?php

namespace App\Filament\Resources\SkillCategoryResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SkillsRelationManager extends RelationManager
{
    protected static string $relationship = 'skills';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\Select::make('border_color')
                    ->options([
                        'none'=>'NONE',
                        'border-transparent' => 'Transparent',
                        'border-black' => 'Black',
                        'border-white' => 'White',
                        'border-gray-500/60' => 'Gray',
                        'border-red-500/60' => 'Red',
                        'border-yellow-500/60' => 'Yellow',
                        'border-green-500/60' => 'Green',
                        'border-blue-500/60' => 'Blue',
                        'border-indigo-500/60' => 'Indigo',
                        'border-purple-500/60' => 'Purple',
                        'border-pink-500/60' => 'Pink',
                    ])
                    ->default('none')
                    ->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('name'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
