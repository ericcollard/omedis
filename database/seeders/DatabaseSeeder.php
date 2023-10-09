<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    //php artisan iseed users,data_types,units,attribute_lists,attribute_list_values,attributes,histories,variants,variant_attributes --force --clean
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(UsersTableSeeder::class);
        $this->call(DataTypesTableSeeder::class);
        $this->call(UnitsTableSeeder::class);
        $this->call(AttributeListsTableSeeder::class);
        $this->call(AttributeListValuesTableSeeder::class);
        $this->call(AttributesTableSeeder::class);
        $this->call(HistoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(VariantsTableSeeder::class);
        $this->call(VariantAttributesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
    }
}
