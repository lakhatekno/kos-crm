<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoomsResource\Pages;
use App\Filament\Resources\RoomsResource\RelationManagers;
use App\Models\Room;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RoomsResource extends Resource
{
    protected static ?string $model = Room::class;

    protected static ?string $navigationIcon = 'fas-bed';

    protected static ?string $navigationLabel = 'Kamar';

    protected static ?string $modelLabel = 'Kamar';
    protected static ?string $pluralModelLabel = 'Kamar';

    protected static ?string $navigationGroup = 'Manajemen Kos';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_indekos')
                    ->relationship('indekos', 'indekos_name')
                    ->label('Nama Kos')
                    ->required(),

                Forms\Components\TextInput::make('room_number')
                    ->required()
                    ->numeric()
                    ->maxLength(4)
                    ->label('Nomor Kamar'),
                
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->label('Harga Sewa'),

                Forms\Components\Checkbox::make('furnished')
                    ->label('Isian')
                    ->default(false),
                
                Forms\Components\Checkbox::make('private_restroom')
                    ->label('Kamar Mandi Dalam')
                    ->default(false),

                Forms\Components\Checkbox::make('air_conditioner')
                    ->label('AC')
                    ->default(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('indekos.indekos_name')
                    ->label('Kos'),
                Tables\Columns\TextColumn::make('room_number')
                    ->label('Nomor Kamar'),
                Tables\Columns\TextColumn::make('price')
                    ->label('Harga Sewa'),
                Tables\Columns\TextColumn::make('furnished')
                    ->label('Isian')
                    ->formatStateUsing(fn ($state) => $state ? 'Ya' : 'Tidak'),
                Tables\Columns\TextColumn::make('private_restroom')
                    ->label('Kamar Mandi Dalam')
                    ->formatStateUsing(fn ($state) => $state ? 'Ya' : 'Tidak'),
                Tables\Columns\TextColumn::make('air_conditioner')
                    ->label('AC')
                    ->formatStateUsing(fn ($state) => $state ? 'Ya' : 'Tidak'),
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
            'index' => Pages\ListRooms::route('/'),
            'create' => Pages\CreateRooms::route('/create'),
            'edit' => Pages\EditRooms::route('/{record}/edit'),
        ];
    }
}
