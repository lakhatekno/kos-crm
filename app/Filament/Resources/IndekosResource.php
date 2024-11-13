<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IndekosResource\Pages;
use App\Filament\Resources\IndekosResource\RelationManagers;
use App\Models\Indekos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IndekosResource extends Resource
{
    protected static ?string $model = Indekos::class;

    protected static ?string $navigationIcon = 'fas-hotel';

    protected static ?string $navigationLabel = 'Kos';

    protected static ?string $navigationGroup = 'Manajemen Kos';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('indekos_name')
                    ->required()
                    ->maxLength(255)
                    ->label('Nama Kos'),
                Forms\Components\TextInput::make('indekos_address')
                    ->required()
                    ->maxLength(255)
                    ->label('Alamat'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('indekos_name'),
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
            'index' => Pages\ListIndekos::route('/'),
            'create' => Pages\CreateIndekos::route('/create'),
            'edit' => Pages\EditIndekos::route('/{record}/edit'),
        ];
    }
}
