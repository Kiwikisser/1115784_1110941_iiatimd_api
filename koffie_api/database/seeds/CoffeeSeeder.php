<?php

use Illuminate\Database\Seeder;

class CoffeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('coffees')->insert([
        'coffee_name' => 'Caffè Americano',
        'coffee_ingredients' => 'Hot extra water',
        'coffee_description' => 'It is made by adding hot water to an espresso shot. The water dilutes the espresso a bit, giving you the volume of a drip, but with an espresso taste.',
        'coffee_bean' => 'Any Espresso beans',
        'coffee_servings' => 180,
        'coffee_preptime' => 5,
        'coffee_image' => 'coffee_americano',
      ]);
      DB::table('coffees')->insert([
        'coffee_name' => 'Lungo',
        'coffee_ingredients' => 'Beans',
        'coffee_description' => 'Lungo is a coffee beverage made by using an espresso machine to make an Italian-style coffee – short black (a single espresso shot) with much more water (generally twice as much), resulting in a larger coffee, a lungo.',
        'coffee_bean' => 'Arabica',
        'coffee_servings' => 70,
        'coffee_preptime' => 1,
        'coffee_image' => 'coffee_lungo',
      ]);
      DB::table('coffees')->insert([
        'coffee_name' => 'Irish Coffee',
        'coffee_ingredients' => 'Irish Whiskey, Brown sugar, Cream',
        'coffee_description' => 'Irish whiskey and at least one level teaspoon of sugar are poured over black coffee and stirred in until fully dissolved. Thick cream is carefully poured over the back of a spoon initially held just above the surface of the coffee and gradually raised a little until the entire layer is floated.',
        'coffee_bean' => 'Any',
        'coffee_servings' => 150,
        'coffee_preptime' => 10,
        'coffee_image' => 'coffee_irish',
      ]);
      DB::table('coffees')->insert([
        'coffee_name' => 'Marocchino',
        'coffee_ingredients' => '1 shot Espresso, 50ml Hot chocolate, 25ml Milk, Cocoa powder',
        'coffee_description' => 'The Hot Marocchino is an inspired composition of deep colors, creamy consistencies and intense flavors. Serve it in a glass to reveal the full mouthwatering beauty of this specialty drink—chocolate on the bottom, coffee and milk in the middle and a velvety cream on top-an experience to enjoy layer by delicious layer.',
        'coffee_bean' => 'Any Espresso beans',
        'coffee_servings' => 100,
        'coffee_preptime' => 7,
        'coffee_image' => 'coffee_Marocchino',
      ]);
      DB::table('coffees')->insert([
        'coffee_name' => 'Long Black',
        'coffee_ingredients' => 'Double shot Espresso, hot extra water',
        'coffee_description' => 'A long black is a style of coffee commonly found in Australia and New Zealand. It is similar to an Americano, but with a stronger aroma and taste.',
        'coffee_bean' => 'Any Espresso beans',
        'coffee_servings' => 150,
        'coffee_preptime' => 5,
        'coffee_image' => 'coffee_longblack',
      ]);
      DB::table('coffees')->insert([
        'coffee_name' => 'Flat White',
        'coffee_ingredients' => 'Shot Espresso, Steamed Milk',
        'coffee_description' => 'It is comparable to a latte, but smaller in volume and with less microfoam, therefore having a higher proportion of coffee to milk, and milk that is more velvety in consistency – allowing the espresso to dominate the flavour, while being supported by the milk.',
        'coffee_bean' => 'Any Espresso beans',
        'coffee_servings' => 150,
        'coffee_preptime' => 6,
        'coffee_image' => 'coffee_flatwhite',
      ]);
      DB::table('coffees')->insert([
        'coffee_name' => 'Latte Macchiato',
        'coffee_ingredients' => 'Shot Espresso, 120ml Frothed milk',
        'coffee_description' => 'The name means stained or marked milk. Marked as in an espresso stain on the milk used. It is a play on “Espresso macchiato” which is an espresso with a drop or two of milk or cream.',
        'coffee_bean' => 'Any Espresso beans',
        'coffee_servings' => 150,
        'coffee_preptime' => 3,
        'coffee_image' => 'coffee_latte',
      ]);
      DB::table('coffees')->insert([
        'coffee_name' => 'Black Russian',
        'coffee_ingredients' => '40ml Vodka, 20ml Coffee liqueur',
        'coffee_description' => 'Traditionally, the drink is made by pouring the vodka over ice cubes or cracked ice in an old-fashioned glass, followed by the coffee liqueur.',
        'coffee_bean' => 'none',
        'coffee_servings' => 60,
        'coffee_preptime' => 1,
        'coffee_image' => 'coffee_russian',
      ]);
      DB::table('coffees')->insert([
        'coffee_name' => 'Cappuccino',
        'coffee_ingredients' => 'Single/Double Espresso shot, Steamed milk, Foamed milk',
        'coffee_description' => 'A cappuccino is an Italian coffee drink that is traditionally prepared with double espresso, hot milk, and steamed milk foam on top. Cream may be used instead of milk and is often topped with cinnamon.',
        'coffee_bean' => 'Any Espresso beans',
        'coffee_servings' => 150,
        'coffee_preptime' => 6,
        'coffee_image' => 'coffee_cappuccino',
      ]);
      DB::table('coffees')->insert([
        'coffee_name' => 'Café au lait',
        'coffee_ingredients' => 'Espresso shot, 250ml Milk',
        'coffee_description' => 'Café au lait, French for "coffee with milk", is coffee with hot milk added. It differs from white coffee, which is coffee with cold milk or other whiteners added.',
        'coffee_bean' => 'Any Espresso beans',
        'coffee_servings' => 290,
        'coffee_preptime' => 3,
        'coffee_image' => 'coffee_verkeerd',
      ]);

    }
}
