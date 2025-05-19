<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\DataPendaftaranResource\Pages;
use App\Filament\Admin\Resources\DataPendaftaranResource\RelationManagers;
use App\Models\DataPendaftaran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DataPendaftaranResource extends Resource
{
    protected static ?string $model = DataPendaftaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationGroup = 'Data Murid';
    protected static ?string $navigationLabel = 'Informasi Data murid';
    protected static ?string $breadcrumb = 'Data Murid';
    protected static ?string $pluralLabel = 'Data Pendaftaran Murid';
    public static function getNavigationSort(): ?int
    {
        return crc32(static::getNavigationLabel()) % 100;
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Alamat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('Tanggal_Lahir')
                    ->required(),
                Forms\Components\TextInput::make('Sekolah_Asal')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Jenis_kelamin')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Nama_Orangtua')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('Tanggal_Daftar')
                    ->required(),
                Forms\Components\TextInput::make('Status')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Alamat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Tanggal_Lahir')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Sekolah_Asal')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Jenis_kelamin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Nama_Orangtua')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Tanggal_Daftar')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Status')
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
            'index' => Pages\ListDataPendaftarans::route('/'),
            'create' => Pages\CreateDataPendaftaran::route('/create'),
            'edit' => Pages\EditDataPendaftaran::route('/{record}/edit'),
        ];
    }
}
