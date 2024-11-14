<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExpenseResource\Pages;
use App\Filament\Resources\ExpenseResource\RelationManagers;
use App\Models\Expense;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExpenseResource extends Resource
{
    protected static ?string $model = Expense::class;

    protected static ?string $navigationIcon = 'fas-square-minus';

    protected static ?string $navigationLabel = 'Pengeluaran';

    protected static ?string $modelLabel = 'Pengeluaran';
    protected static ?string $pluralModelLabel = 'Pengeluaran';

    protected static ?string $navigationGroup = 'Pencatatan';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_indekos')
                    ->required()
                    ->relationship('indekos', 'indekos_name')
                    ->label('Kos'),
                Forms\Components\Select::make('id_category')
                    ->required()
                    ->relationship('expense_category', 'expense_name'),
                Forms\Components\Select::make('id_bank_account')
                    ->required()
                    ->relationship('bank_account', 'identify_name')
                    ->label('Sumber Dana'),
                Forms\Components\DatePicker::make('expense_date')
                    ->required()
                    ->label('Tanggal'),
                Forms\Components\TextInput::make('expense_value')
                    ->required()
                    ->numeric()
                    ->label('Jumlah'),
                Forms\Components\TextInput::make('note')
                    ->label('Catatan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('expense_date')
                    ->label('Tanggal'),
                Tables\Columns\TextColumn::make('expense_value')
                    ->label('Jumlah'),
                Tables\Columns\TextColumn::make('idekos.indekos_name')
                    ->label('Kos'),
                Tables\Columns\TextColumn::make('bank_account.identify_name')
                    ->label('Sumber Dana'),
                Tables\Columns\TextColumn::make('note')
                    ->label('Catatan'),
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
            'index' => Pages\ListExpenses::route('/'),
            'create' => Pages\CreateExpense::route('/create'),
            'edit' => Pages\EditExpense::route('/{record}/edit'),
        ];
    }
}
