### Getting Started Filament

## make Resource for the Model

<code>php artisan make:filament-resource [NAMA RESOURCE ex: ClassesResource]</code>

### Working on form

bisa di akses di function form

contoh :
<code>
return $form
->schema([
TextInput::make('NAMA FIELD'),
]);
</code>

# Relationship Form

<code>Select::make('NAMA FIELD')->relationship('NAMA MODEL', 'NAMA FIELD_MODEL'),</code>

### Working on Table Builder (Column)

# Displaying

<code>
return $table
->columns([
//
TextColumn::make('NAMA FIELD'),
TextColumn::make('NAMA MODEL.NAMA FIELD_MODEL')->badge(),
])
</code>
