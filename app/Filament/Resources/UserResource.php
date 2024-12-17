<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\Pages\EditUser;
use App\Filament\Resources\UserResource\Pages\ListUsers;
use App\Filament\Resources\UserResource\Pages\CreateUser;
use App\Filament\Resources\UserResource\RelationManagers;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    protected static ?string $tenantRelationshipName = 'members';

    protected static ?string $navigationLabel = 'Kelola Pengguna';

    protected static ?string $navigationGroup = 'Admin';

    public static ?string $label = 'Kelola Pengguna';



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Data Pengguna')
                    // ->description('Prevent abuse by limiting the number of requests per period')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Masukkan Nama Kamu'),
                        TextInput::make('username')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Masukkan Username Kamu'),
                        TextInput::make('email')
                            ->email()
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Masukkan Email')
                            ->unique(ignoreRecord: true),
                        TextInput::make('password')
                            ->password()
                            ->dehydrateStateUsing(static fn(?string $state): ?string => filled($state) ? Hash::make($state) : null)
                            ->required(static fn(Page $livewire): string => $livewire instanceof CreateUser)
                            ->dehydrated(static fn(?string $state): bool => filled($state))
                            ->label(
                                static fn(Page $livewire): string => ($livewire instanceof EditUser) ? 'Ganti Password' : 'Masukkan Password'
                            ),
                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn(Builder $query) => $query->latest())
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->copyable()
                    ->copyMessage('Berhasil Disalin')
                    ->sortable()
                    ->label('Nama'),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->copyable()
                    ->copyMessage('Berhasil Disalin')
                    ->sortable()
                    ->label('Email'),
                TextColumn::make('created_at')
                    ->sortable()
                    ->dateTime('d M Y, H:i:s')
                    ->label('Dibuat pada'),
                TextColumn::make('updated_at')
                    ->sortable()
                    ->dateTime('d M Y, H:i:s')
                    ->label('Diubah pada'),
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
            'index' => ListUsers::route('/'),
            'create' => CreateUser::route('/create'),
            'edit' => EditUser::route('/{record}/edit'),
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
