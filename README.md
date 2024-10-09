// Getting Started Filament

// make Resource for the Model
php artisan make:filament-resource [NAMA RESOURCE ex: ClassesResource]

/ Working on form
bisa di akses di function form

contoh :
return $form
->schema([
TextInput::make('NAMA FIELD'),
]);

/ Relationship Form
Select::make('NAMA FIELD')->relationship('NAMA MODEL', 'NAMA FIELD_MODEL'),

// Working on Table Builder (Column)
/ Displaying

return $table
->columns([
//
TextColumn::make('NAMA FIELD'),
TextColumn::make('NAMA MODEL.NAMA FIELD_MODEL')->badge(),
])
