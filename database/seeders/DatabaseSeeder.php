<?php

namespace Database\Seeders;

use App\Models\BankAccount;
use App\Models\ExpenseCategory;
use App\Models\Indekos;
use App\Models\Room;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // DB::table('indekos')->insert([
        //     'id' => 1,
        //     'indekos_name' => 'Kos Putri Irul',
        //     'indekos_address' => 'Suryodiningratan MJ III'
        // ]);
        
        // DB::table('indekos')->insert([
        //     'id' => 2,
        //     'indekos_name' => 'Kos Putri Pak Sunardi',
        //     'indekos_address' => 'Dukuh RT 69, Gedong Kiwo'
        // ]);
        
        // DB::table('indekos')->insert([
        //     'id' => 3,
        //     'indekos_name' => 'Paviliun Pak Sunardi',
        //     'indekos_address' => 'Dukuh RT 69, Gedong Kiwo'
        // ]);

        // DB::table('rooms')->insert([
        //     'id_indekos' => 1,
        //     'room_number' => '1',
        //     'price' => 500000,
        // ]);
        // DB::table('rooms')->insert([
        //     'id_indekos' => 1,
        //     'room_number' => '2',
        //     'price' => 500000,
        // ]);
        // DB::table('rooms')->insert([
        //     'id_indekos' => 1,
        //     'room_number' => '3',
        //     'price' => 600000,
        //     'furnished' => true
        // ]);
        // DB::table('rooms')->insert([
        //     'id_indekos' => 1,
        //     'room_number' => '4',
        //     'price' => 500000,
        // ]);
        // DB::table('rooms')->insert([
        //     'id_indekos' => 1,
        //     'room_number' => '5',
        //     'price' => 500000,
        // ]);
        // DB::table('rooms')->insert([
        //     'id_indekos' => 1,
        //     'room_number' => '6',
        //     'price' => 500000,
        // ]);
        // DB::table('rooms')->insert([
        //     'id_indekos' => 1,
        //     'room_number' => '7',
        //     'price' => 500000,
        // ]);
        // DB::table('rooms')->insert([
        //     'id_indekos' => 1,
        //     'room_number' => '8',
        //     'price' => 500000,
        // ]);
        
        // DB::table('rooms')->insert([
        //     'id_indekos' => 2,
        //     'room_number' => 'D',
        //     'price' => 700000,
        //     'furnished' => true,
        //     'private_restroom' => true
        // ]);
        // DB::table('rooms')->insert([
        //     'id_indekos' => 2,
        //     'room_number' => 'E',
        //     'price' => 700000,
        //     'furnished' => true,
        //     'private_restroom' => true
        // ]);
        // DB::table('rooms')->insert([
        //     'id_indekos' => 2,
        //     'room_number' => 'F',
        //     'price' => 700000,
        //     'furnished' => true,
        //     'private_restroom' => true
        // ]);
        
        // DB::table('rooms')->insert([
        //     'id_indekos' => 3,
        //     'room_number' => 'A',
        //     'price' => 1000000,
        //     'furnished' => true,
        //     'private_restroom' => true
        // ]);
        // DB::table('rooms')->insert([
        //     'id_indekos' => 3,
        //     'room_number' => 'B',
        //     'price' => 1000000,
        //     'furnished' => true,
        //     'private_restroom' => true
        // ]);
        // DB::table('rooms')->insert([
        //     'id_indekos' => 3,
        //     'room_number' => 'C',
        //     'price' => 1000000,
        //     'furnished' => true,
        //     'private_restroom' => true
        // ]);

        // DB::table('bank_accounts')->insert([
        //     'identify_name' => 'default'
        // ]);

        DB::table('expense_categories')->insert([
            'id' => 1,
            'expense_name' => 'Listrik',
        ]);
        DB::table('expense_categories')->insert([
            'id' => 2,
            'expense_name' => 'Wifi',
        ]);
        DB::table('expense_categories')->insert([
            'id' => 3,
            'expense_name' => 'Air',
        ]);
        DB::table('expense_categories')->insert([
            'id' => 4,
            'expense_name' => 'Sampah',
        ]);

        
    }
}
