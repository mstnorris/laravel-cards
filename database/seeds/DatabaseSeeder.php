<?php

use App\Card;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('en_US');

        Model::unguard();

        // $this->call(UserTableSeeder::class);


        $geopattern = new \RedeyeVentures\GeoPattern\GeoPattern();


        Card::truncate();
        unset($cards);
        $cards = [];

        for ( $i=1; $i<=1000; $i++ )
        {
            $geopattern->setString($i);
            $dataURL = $geopattern->toDataURL();
            $cards[] = [
                'id' => $i,
                'card_id' => Hashids::connection('card_id')->encode($i),
                'title' => $faker->word . " " . $faker->word . " " . $faker->word,
                'body' => $faker->paragraph($faker->randomDigitNotNull),
                'image' => $dataURL
            ];
        }

        //$cards = factory(Card::class, 1000)->make();

        Card::insert($cards);

        Model::reguard();
    }
}
