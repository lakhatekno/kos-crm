<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransactionResource\Pages;
use App\Filament\Resources\TransactionResource\RelationManagers;
use App\Models\Transaction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TransactionResource extends Resource
{
    protected static ?string $model = Transaction::class;

    protected static ?string $navigationIcon = 'fas-square-plus';

    protected static ?string $navigationLabel = 'Pemasukan';

    protected static ?string $modelLabel = 'Data Pembayaran';
    protected static ?string $pluralModelLabel = 'Data Pembayaran';

    protected static ?string $navigationGroup = 'Pencatatan';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_customer')
                    ->required()
                    ->relationship('customer', 'customer_name')
                    ->label('Nama')
                    ->getOptionLabelFromRecordUsing(function ($record) {
                        return $record->customer_name . ' - ' . $record->room->room_number . ' - ' . $record->room->indekos->indekos_name;
                    }),
                Forms\Components\Select::make('id_room')
                    ->required()
                    ->relationship('room', 'room_number')
                    ->label('Kamar')
                    ->getOptionLabelFromRecordUsing(function ($record) {
                        return $record->room_number . ' - ' . $record->indekos->indekos_name;
                    }),
                Forms\Components\TextInput::make('transaction_value')
                    ->required()
                    ->numeric()
                    ->label('Jumlah Pembayaran'),
                Forms\Components\DatePicker::make('transaction_date')
                    ->required()
                    ->label('Tanggal'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('transaction_date')
                    ->label('Tanggal'),
                Tables\Columns\TextColumn::make('customer.customer_name')
                    ->label('Nama'),
                Tables\Columns\TextColumn::make('transaction_value')
                    ->label('Jumlah Bayar'),
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
            'index' => Pages\ListTransactions::route('/'),
            'create' => Pages\CreateTransaction::route('/create'),
            'edit' => Pages\EditTransaction::route('/{record}/edit'),
        ];
    }
}
