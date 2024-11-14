<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomersResource\Pages;
use App\Filament\Resources\CustomersResource\RelationManagers;
use App\Models\Customer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CustomersResource extends Resource
{
    protected static ?string $model = Customer::class;

    protected static ?string $navigationIcon = 'fas-user-group';

    protected static ?string $navigationLabel = 'Penghuni';

    protected static ?string $modelLabel = 'Data Penghuni';
    protected static ?string $pluralModelLabel = 'Data Penghuni';

    protected static ?string $navigationGroup = 'Pencatatan';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_room')
                    ->required()
                    ->relationship('room', 'room_number')
                    ->label('Kamar')
                    ->getOptionLabelFromRecordUsing(function ($record) {
                        return $record->room_number . ' - ' . $record->indekos->indekos_name;
                    }),
                Forms\Components\TextInput::make('nik')
                    ->required()
                    ->numeric()
                    ->length(16)
                    ->label('NIK'),
                Forms\Components\TextInput::make('customer_name')
                    ->required()
                    ->maxLength(255)
                    ->label('Nama'),
                Forms\Components\TextInput::make('customer_address')
                    ->required()
                    ->maxLength(255)
                    ->label('Alamat'),
                Forms\Components\DatePicker::make('check_in')
                    ->required()
                    ->label('Check In'),
                Forms\Components\DatePicker::make('check_out')
                    ->label('Check Out'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('room.room_number')
                    ->label('Kamar'),
                Tables\Columns\TextColumn::make('customer_name')
                    ->label('Nama')
                    ->wrap(),
                Tables\Columns\TextColumn::make('customer_address')
                    ->label('Alamat')
                    ->wrap(),
                Tables\Columns\TextColumn::make('check_in')
                    ->label('Cek In'),
                Tables\Columns\TextColumn::make('check_out')
                    ->label('Cek Out'),
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
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomers::route('/create'),
            'edit' => Pages\EditCustomers::route('/{record}/edit'),
        ];
    }
}
