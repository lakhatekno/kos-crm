<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BankAccountResource\Pages;
use App\Filament\Resources\BankAccountResource\RelationManagers;
use App\Models\BankAccount;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BankAccountResource extends Resource
{
    protected static ?string $model = BankAccount::class;

    protected static ?string $navigationIcon = 'fas-wallet';

    protected static ?string $navigationLabel = 'Rekening';

    protected static ?string $modelLabel = 'Rekening';
    protected static ?string $pluralModelLabel = 'Rekening';

    protected static ?string $navigationGroup = 'Manajemen Keuangan';

    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
                Forms\Components\TextInput::make('identify_name')
                    ->label('Nama (tidak harus nama asli)'),
                Forms\Components\TextInput::make('bank_name')
                    ->label('Nama Bank'),
                Forms\Components\TextInput::make('account_number')
                    ->numeric()
                    ->label('Nomor Rekening'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identify_name')
                    ->label('Nama'),
                Tables\Columns\TextColumn::make('account_number')
                    ->label('Nomor Rekening'),
                Tables\Columns\TextColumn::make('bank_name')
                    ->label('Bank'),
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
            'index' => Pages\ListBankAccounts::route('/'),
            'create' => Pages\CreateBankAccount::route('/create'),
            'edit' => Pages\EditBankAccount::route('/{record}/edit'),
        ];
    }
}
