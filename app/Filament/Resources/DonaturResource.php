<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DonaturResource\Pages;
use App\Filament\Resources\DonaturResource\RelationManagers;
use App\Models\Donatur;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DonaturResource extends Resource
{
    protected static ?string $model = Donatur::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_donatur')
                    ->label('Nama Donatur')
                    ->required()
                    ->maxLength(100),
                
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),
    
                Forms\Components\TextInput::make('nomor_telepon')
                    ->label('Nomor Telepon')
                    ->tel()
                    ->maxLength(20),
    
                Forms\Components\Textarea::make('alamat')
                    ->label('Alamat')
                    ->maxLength(500),
    
                Forms\Components\DatePicker::make('tanggal_terdaftar')
                    ->label('Tanggal Terdaftar')
                    ->default(now())
                    ->required(),
            ]);
    }    

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_donatur')
                    ->label('Nama Donatur')
                    ->searchable()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable(),
    
                Tables\Columns\TextColumn::make('nomor_telepon')
                    ->label('Nomor Telepon')
                    ->sortable(),
    
                Tables\Columns\TextColumn::make('alamat')
                    ->label('Alamat')
                    ->limit(50), // Membatasi tampilan alamat hingga 50 karakter
    
                Tables\Columns\TextColumn::make('tanggal_terdaftar')
                    ->label('Tanggal Terdaftar')
                    ->date() // Menampilkan dalam format tanggal
                    ->sortable(),
            ])
            ->filters([
                // Tambahkan filter jika diperlukan
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListDonaturs::route('/'),
            'create' => Pages\CreateDonatur::route('/create'),
            'edit' => Pages\EditDonatur::route('/{record}/edit'),
        ];
    }
}
