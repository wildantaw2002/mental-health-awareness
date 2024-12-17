<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Artikel;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ArtikelModel;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ArtikelResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ArtikelResource\RelationManagers;
use App\Filament\Resources\ArtikelResource\Pages\EditArtikel;
use App\Filament\Resources\ArtikelResource\Pages\ListArtikels;
use App\Filament\Resources\ArtikelResource\Pages\CreateArtikel;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ArtikelResource extends Resource
{
    protected static ?string $model = ArtikelModel::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $tenantRelationshipName = 'members';

    protected static ?string $navigationLabel = 'Kelola Artikel';

    protected static ?string $navigationGroup = 'Admin';

    public static ?string $label = 'Kelola Artikel';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('tanggal')
                    // ->format('d/m/Y')
                    ->label('Tanggal Artikel')
                    ->native(false)
                    ->locale('id')
                    ->columnSpanFull()
                    ->required(),
                TextInput::make('judul')
                    ->label('Judul Artikel')
                    ->columnSpanFull()
                    ->required(),
                TextInput::make('deskripsi')
                    ->label('Deskripsi')
                    ->columnSpanFull()
                    ->required(),
                Textarea::make('isi')
                    ->label('Isi Artikel')
                    ->columnSpanFull()
                    ->required(),
                FileUpload::make('foto')
                    ->label('Foto Artikel')
                    ->columnSpanFull()
                    ->required()
                    ->getUploadedFileNameForStorageUsing(
                        fn(TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                            ->prepend('foto-artikel-'),
                    )
                    ->directory(directory: 'artikel'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')
                    ->searchable()
                    ->label('Judul Artikel'),
                TextColumn::make('deskripsi')
                    ->label('Deskripsi'),
                TextColumn::make('isi')
                    ->label('Isi Artikel'),
                ImageColumn::make('foto')
                    ->label('Foto'),
                TextColumn::make('tanggal')
                    ->label('Tanggal Artikel')
                    ->dateTime('d M Y'),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => ListArtikels::route('/'),
            'create' => CreateArtikel::route('/create'),
            'edit' => EditArtikel::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
