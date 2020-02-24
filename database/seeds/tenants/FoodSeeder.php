<?php

namespace Seeder\Tenant;

use Illuminate\Database\Seeder;
use App\Model\Tenant\Food;
use Illuminate\Support\Facades\Hash;

class FoodSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
    {
        Food::insert([


            ['name' => 'Appam with Veg Stew (Live Counter)', 'type' => 'Breakfast'],
            ['name' => 'Wada (Medu wada / Dal Wada / Mysore Wada / Coconut Ullip)', 'type' => 'Breakfast'],
            ['name' => 'Mini Utappam', 'type' => 'Breakfast'],
            ['name' => 'Dosa Counter', 'type' => 'Breakfast'],
            ['name' => '(Cheese Dosa/ Masala Dosa/ Pav Bhaji Dosa/ Vegetable Mixed)', 'type' => 'Breakfast'],
            ['name' => 'Utappam Counter', 'type' => 'Breakfast'],
            ['name' => '(Onion Uttapam/ Masala Uttapam/ Plain Uttapam)', 'type' => 'Breakfast'],
            ['name' => 'Panniyaram (live)', 'type' => 'Breakfast'],
            ['name' => 'Neer Dosa with Malabar Curry', 'type' => 'Breakfast'],
            ['name' => 'Poha', 'type' => 'Breakfast'],

            ['name' => 'Fresh Fruit Juice (Watermelon / Sweet lime / Orange / Anar / Pineapple)', 'type' => 'Tea and Coffee Break'],
            ['name' => 'Canned Juice as per availability', 'type' => 'Tea and Coffee Break'],
            ['name' => 'Milk Shake (chocolate / Banana / Strawberry / seasonal fruit)', 'type' => 'Tea and Coffee Break'],
            ['name' => 'Cold Coffee', 'type' => 'Tea and Coffee Break'],
            ['name' => 'Cut Fruits Counter (imported + Indian)', 'type' => 'Tea and Coffee Break'],

            ['name' => 'Veg Cheese sandwich / Veg Chutney sandwich / Curried Coleslaw / Pickled Cabbage and Mustard ', 'type' => 'Lunch'],
            ['name' => 'Mumbai Chowpatty / Russian salad / Masala chili cheese toast / Mushroom Aioli / Paneer Bhurji', 'type' => 'Lunch'],
            ['name' => 'Soya Subz Kheema Sandwich / Chatpata Aloo Sandwich / Hawaiian Coleslaw Sandwich', 'type' => 'Lunch'],
            ['name' => 'Corn Capsicum / Refried Beans / Paneer Tikka Sandwich / Tomato cheese and olive sandwich', 'type' => 'Lunch'],

             ['name' => 'Paneer Mutter', 'type' => 'Dinner'],
             ['name' => 'Palak Paneer', 'type' => 'Dinner'],
             ['name' => 'Nawabi Malai Kofta Curry', 'type' => 'Dinner'],
             ['name' => 'Paneer Pasanda', 'type' => 'Dinner'],
             ['name' => 'Riwagan Chaman (Kashmiri Style Paneer in red Gravy)', 'type' => 'Dinner'],

             ['name' => 'Murgh Nizami Handi', 'type' => 'Dinner'],
             ['name' => 'Dhabe Da Murgh', 'type' => 'Dinner'],
             ['name' => 'Chooza Khaas Makhani', 'type' => 'Dinner'],
             ['name' => 'Laziz Tikka Masala	', 'type' => 'Dinner'],
             ['name' => 'Murgh Handi Dumpukht', 'type' => 'Dinner'],



            ['name' => 'Sugarcane Juice with Ginger', 'type' => 'Drinks and Reception'],
            ['name' => 'Jaljeera', 'type' => 'Drinks and Reception'],
            ['name' => 'Rajwadi Lassi', 'type' => 'Drinks and Reception'],
            ['name' => 'Soda Shikanji', 'type' => 'Drinks and Reception'],
            ['name' => 'Aam ka Panna', 'type' => 'Drinks and Reception'],

             ['name' => 'Pav Bhaji Counter', 'type' => 'Additional'],
             ['name' => 'Missal Pav Counter', 'type' => 'Additional'],


//            ['name' => 'Fresh Fruit Juice (Watermelon / Sweet lime / Orange / Anar / Pineapple)', 'type' => 'Welcome Drinks'],
//            ['name' => 'Canned Juice as per availability ', 'type' => 'Welcome Drinks'],
//            ['name' => 'Green Kahva', 'type' => 'Welcome Drinks'],
//            ['name' => 'Tamarind Jaljeera', 'type' => 'Welcome Drinks'],
//            ['name' => 'Kesar Nimbu Shikanji', 'type' => 'Welcome Drinks'],


//            ['name' => 'Paratha Counter (Methi / Aloo / Cheese / Paneer / Gobi) with curd and Pickle', 'type' => 'Breakfast Menu Choices(North Indian)'],
//            ['name' => 'Puri Bhaji', 'type' => 'Breakfast Menu Choices(North Indian)'],
//            ['name' => 'Bedvi Puri with Aloo Bhaji', 'type' => 'Breakfast Menu Choices(North Indian)'],
//            ['name' => 'Aloo ka Paratha with Curd', 'type' => 'Breakfast Menu Choices(North Indian)'],
//            ['name' => 'Sabudana Wada', 'type' => 'Breakfast Menu Choices(North Indian)'],
//            ['name' => 'Sabudana Kichdi', 'type' => 'Breakfast Menu Choices(North Indian)'],
//            ['name' => 'Chole Bhature', 'type' => 'Breakfast Menu Choices(North Indian)'],
//            ['name' => 'Mini Bhatura with chana masala', 'type' => 'Breakfast Menu Choices(North Indian)'],
//            ['name' => 'Club Kachori with saunth ki chutney', 'type' => 'Breakfast Menu Choices(North Indian)'],

//            ['name' => 'Lassi Sweet and Salted', 'type' => 'Breakfast Menu Choices(Accompaniment)'],
//            ['name' => 'Cold Coffee ', 'type' => 'Breakfast Menu Choices(Accompaniment)'],
//            ['name' => 'Milkshake', 'type' => 'Breakfast Menu Choices(Accompaniment)'],
//            ['name' => 'Flavoured Yoghurt', 'type' => 'Breakfast Menu Choices(Accompaniment)'],
//            ['name' => 'Fresh Fruit Juice / Canned Juice', 'type' => 'Breakfast Menu Choices(Accompaniment)'],
//            ['name' => 'Fresh Cut Fruits', 'type' => 'Breakfast Menu Choices(Accompaniment)'],
//            ['name' => 'Cheese Platter', 'type' => 'Breakfast Menu Choices(Accompaniment)'],
//            ['name' => 'Curd in Small Kulhad', 'type' => 'Breakfast Menu Choices(Accompaniment)'],
//            ['name' => 'Khaman Dhokla (Layered Sandwich Dhokla)', 'type' => 'Breakfast Menu Choices(Accompaniment)'],
//            ['name' => 'Baked Beans with Potato Rosti', 'type' => 'Breakfast Menu Choices(Accompaniment)'],
//
//            ['name' => 'Lassi Sweet and Salted', 'type' => 'Breakfast Menu Choices(Bakery products)'],
//            ['name' => 'Cold Coffee ', 'type' => 'Breakfast Menu Choices(Bakery products)'],



            // ['name' => 'Moong Dal Wada with Chutney / Cocktail Samosa with Imli Chutney / Mini Mutter Kachori ', 'type' => 'Hot Snacks'],
            // ['name' => 'Moong Dal Pakodi / Green Peas ki Potli Kachori / Khasta Kachori / Panchratni Dhokla ', 'type' => 'Hot Snacks'],
            // ['name' => 'Stuffed Mirch Pakodi / Khatta Meetha Dhokla / Safed Dhokla', 'type' => 'Hot Snacks'],
            // ['name' => 'Kalimiri Dhokla / Tiranga Dhokla / Kanji Wada / Dal Wada / Jodhpuri Onion Kachori', 'type' => 'Hot Snacks'],
            // ['name' => 'Kothimbir Wadi / Parappu Vadai (Bengal Gram Wada) / Aloo Bonda / Green Peas Ghugra', 'type' => 'Hot Snacks'],



            // ['name' => 'Besan / Dal Chila Counter with toppings', 'type' => 'LIVE COUNTERS'],
            // ['name' => 'Frankie Counter (paneer / Aloo / Vegetables)', 'type' => 'LIVE COUNTERS'],
            // ['name' => 'Pav Bhaji Counter', 'type' => 'LIVE COUNTERS'],
            // ['name' => 'Missal Pav Counter', 'type' => 'LIVE COUNTERS'],
            // ['name' => 'Kathi Roll Counter (Paneer / vegetable / Chicken)', 'type' => 'LIVE COUNTERS'],
            // ['name' => 'Mini Pizza Counter (with various toppings)', 'type' => 'LIVE COUNTERS'],

            // ['name' => 'Nariyal Ka Shorba', 'type' => 'Soups INDIAN (Veg)'],
            // ['name' => 'Dal Hare Pyaz ka Shorba', 'type' => 'Soups INDIAN (Veg)'],
            // ['name' => 'Dal Rasam', 'type' => 'Soups INDIAN (Veg)'],
            // ['name' => 'Tamatar Dhaniya Shorba', 'type' => 'Soups INDIAN (Veg)'],
            // ['name' => 'Lemon Pepper Rasam', 'type' => 'Soups INDIAN (Veg)'],
            // ['name' => 'Tomato Rasam', 'type' => 'Soups INDIAN (Veg)'],

            // ['name' => 'Murgh Badami Shorba', 'type' => 'Soups INDIAN (Non-Veg)'],
            // ['name' => 'Murgh Goli Shorba', 'type' => 'Soups INDIAN (Non-Veg)'],
            // ['name' => 'Murgh Jehangiri Shorba', 'type' => 'Soups INDIAN (Non-Veg)'],
            // ['name' => 'Chicken Coconut Rasam', 'type' => 'Soups INDIAN (Non-Veg)'],
            // ['name' => 'Chicken Caldo Verde', 'type' => 'Soups INDIAN (Non-Veg)'],
            // ['name' => 'Murgh Palak Shorba', 'type' => 'Soups INDIAN (Non-Veg)'],

            // ['name' => 'Tex Mex Taco Soup', 'type' => 'Soups Mexican (Veg)'],
            // ['name' => 'Mexican Kidney Bean Soup', 'type' => 'Soups Mexican (Veg)'],
            // ['name' => 'Mexican Cilantro and Squash Soup', 'type' => 'Soups Mexican (Veg)'],
            // ['name' => 'Mexican white Bean Soup', 'type' => 'Soups Mexican (Veg)'],
            // ['name' => 'Red Pepper Tomato Tortilla Soup', 'type' => 'Soups Mexican (Veg)'],

            // ['name' => 'Mexican Meatball and Tomato soup', 'type' => 'Soups Mexican (Non-Veg)'],
            // ['name' => 'Albondigas', 'type' => 'Soups Mexican (Non-Veg)'],
            // ['name' => 'Chicken Pepper Pot', 'type' => 'Soups Mexican (Non-Veg)'],
            // ['name' => 'Chicken Tortilla Soup', 'type' => 'Soups Mexican (Non-Veg)'],
            // ['name' => 'Sausage and Bean Tortilla Soup', 'type' => 'Soups Mexican (Non-Veg)'],

            // ['name' => 'Egyptian Bean Soup', 'type' => 'Soups Mediterranean  (Veg)'],
            // ['name' => 'Moroccan Bean Soup with Couscous', 'type' => 'Soups Mediterranean  (Veg)'],
            // ['name' => 'Shorbat Khudar', 'type' => 'Soups Mediterranean  (Veg)'],
            // ['name' => 'Shorbat Al Jajjar', 'type' => 'Soups Mediterranean  (Veg)'],
            // ['name' => 'Shorbat Adas Maa Sebanik', 'type' => 'Soups Mediterranean  (Veg)'],

            // ['name' => 'Aqua Paza', 'type' => 'Soups Mediterranean  (Non-Veg)'],
            // ['name' => 'Sopa De Pescado', 'type' => 'Soups Mediterranean  (Non-Veg)'],
            // ['name' => 'Avgolemono', 'type' => 'Soups Mediterranean  (Non-Veg)'],
            // ['name' => 'Shorbat Dajaj Al Shaariyeh', 'type' => 'Soups Mediterranean  (Non-Veg)'],
            // ['name' => 'Shorbat Harrira', 'type' => 'Soups Mediterranean  (Non-Veg)'],

            // ['name' => 'Tom Yom Vegetable Soup', 'type' => 'Soups Oriental / Far Eastern  (Veg)'],
            // ['name' => 'Chinese Clear Soup with Burnt Garlic and Veg', 'type' => 'Soups Oriental / Far Eastern  (Veg)'],
            // ['name' => 'Sweet Corn Veg Soup', 'type' => 'Soups Oriental / Far Eastern  (Veg)'],
            // ['name' => 'Miso Soup', 'type' => 'Soups Oriental / Far Eastern  (Veg)'],
            // ['name' => 'Lemon Coriander Soup', 'type' => 'Soups Oriental / Far Eastern  (Veg)'],

            // ['name' => 'Tom Yum Chicken Soup', 'type' => 'Soups Oriental / Far Eastern  (Non-Veg)'],
            // ['name' => 'Burnt Garlic Chicken Clear Soup', 'type' => 'Soups Oriental / Far Eastern  (Non-Veg)'],
            // ['name' => 'Chicken Sweet Corn Soup', 'type' => 'Soups Oriental / Far Eastern  (Non-Veg)'],
            // ['name' => 'Ton Jiru', 'type' => 'Soups Oriental / Far Eastern  (Non-Veg)'],
            // ['name' => 'Chicken Coriander Soup', 'type' => 'Soups Oriental / Far Eastern  (Non-Veg)'],

            // ['name' => 'Minestrone Milanese', 'type' => 'European / Western  (Veg)'],
            // ['name' => 'Char grilled Tomato and Basil Soup', 'type' => 'European / Western  (Veg)'],
            // ['name' => 'Pasta e Fagioli', 'type' => 'European / Western  (Veg)'],
            // ['name' => 'Red pepper Tomato Bisque', 'type' => 'European / Western  (Veg)'],
            // ['name' => 'Cream of Asparagus and Leeks', 'type' => 'European / Western (Veg)'],

            // ['name' => 'Chicken Tuscan Soup', 'type' => 'European / Western (Non-Veg)'],
            // ['name' => 'Cream of Chicken', 'type' => 'European / Western  (Non-Veg)'],
            // ['name' => 'Corn Chowder Maryland', 'type' => 'European / Western (Non-Veg)'],
            // ['name' => 'Seafood Bisque', 'type' => 'European / Western  (Non-Veg)'],
            // ['name' => 'German Lentil Soup', 'type' => 'European / Western  (Non-Veg)'],

            // ['name' => 'Achari Cabbage Salad', 'type' => 'Salads (Vegetarian)'],
            // ['name' => 'Ananas ki Khatti Mithi Chat', 'type' => 'Salads (Vegetarian)'],
            // ['name' => 'Pudina Aloo Chat', 'type' => 'Salads (Vegetarian)'],
            // ['name' => 'Hare Chane ki Chat', 'type' => 'Salads (Vegetarian)'],
            // ['name' => 'Moongphali Chat', 'type' => 'Salads (Vegetarian)'],
            // ['name' => 'Kabuli Chana Chat', 'type' => 'Salads (Vegetarian)'],
            // ['name' => 'Paneer and Hare Chane ki Salad', 'type' => 'Salads (Vegetarian)'],
            // ['name' => 'Boiled Chana Chaat', 'type' => 'Salads (Vegetarian)'],
            // ['name' => 'Khile Moong Ki Chat', 'type' => 'Salads (Vegetarian)'],
            // ['name' => 'Aloo Channa Chat', 'type' => 'Salads (Vegetarian)'],

            // ['name' => 'Hawaiian Coleslaw', 'type' => 'Salads (Fruit Based Salad)'],
            // ['name' => 'Grand Mariner Fruit Salad', 'type' => 'Salads (Fruit Based Salad)'],
            // ['name' => 'Phaldari Chat', 'type' => 'Salads (Fruit Based Salad)'],
            // ['name' => 'Melon and Papaya Balls in Honey and Ginger', 'type' => 'Salads (Fruit Based Salad)'],
            // ['name' => 'Winter Slaw (Crunchy Apple, Cabbage, Pineapple slaw)', 'type' => 'Salads (Fruit Based Salad)'],

            // ['name' => 'Bhune Murgh Ki Chat', 'type' => 'Salads (Non-Vegetarian Salads)'],
            // ['name' => 'Murgh Achari Chat', 'type' => 'Salads (Non-Vegetarian Salads)'],
            // ['name' => 'Murgh Anari Chat', 'type' => 'Salads (Non-Vegetarian Salads)'],
            // ['name' => 'Thai Chicken and Bean Sprout Salad', 'type' => 'Salads (Non-Vegetarian Salads)'],
            // ['name' => 'Mexican Chicken Salad', 'type' => 'Salads (Non-Vegetarian Salads)'],

            // ['name' => 'Chana + Moth Dal + Moong Dal + Green Moong + Kala Chana + Kabuli Chana (Served With Chopped Onions, Tomatoes, Cucumber, Green Chillies & Hint of Lemon Juice)', 'type' => 'Salads (SPROUTS COUNTER…)'],

            // ['name' => 'Cold Mezze Platter (Hummus, Baba Ganouj, Tabouleh, Lebneh, Fattoush, Muhamarra, Orange Sesame Tabouleh)', 'type' => 'Lebanese'],

            // ['name' => 'Mixed Vegetable Raita / Boondi Raita / Bhurani Raita / Beetroot Raita / Tadka Raita / Tomato Mint Raita', 'type' => 'Curds/Raita/ Pickles'],
            // ['name' => 'Aloo Pudina ka Raita / Cucumber Raita / Date and Figs Raita / Pomegranate Raita / Carrot Raisin Raita', 'type' => 'Curds/Raita/ Pickles'],
            // ['name' => 'Pineapple Raita / Burnt Garlic Raita / Koshimbir', 'type' => 'Curds/Raita/ Pickles'],
            // ['name' => 'South Indian Dahi wada', 'type' => 'Curds/Raita/ Pickles'],
            // ['name' => 'Dahi Bhalla', 'type' => 'Curds/Raita/ Pickles'],

            // ['name' => 'Paneer Pakouda', 'type' => 'Starters TANDOOR (Veg)'],
            // ['name' => 'Paneer Aur Mushroom Potli', 'type' => 'Starters TANDOOR (Veg)'],
            // ['name' => 'Paneer Jaffrani Tikka', 'type' => 'Starters TANDOOR (Veg)'],
            // ['name' => 'Lal Mirch Ka Paneer Tikka', 'type' => 'Starters TANDOOR (Veg)'],
            // ['name' => 'Paneer Tikka Pudina', 'type' => 'Starters TANDOOR (Veg)'],

            // ['name' => 'Murgh Pakouda', 'type' => 'Starters TANDOOR (Non-Veg)'],
            // ['name' => 'Murgh Tikka Kalimirch', 'type' => 'Starters TANDOOR (Non-Veg)'],
            // ['name' => 'Murgh Dhunnar Tikka', 'type' => 'Starters TANDOOR (Non-Veg)'],
            // ['name' => 'Murgh Firdausi', 'type' => 'Starters TANDOOR (Non-Veg)'],
            // ['name' => 'Murgh Achari Tikka', 'type' => 'Starters TANDOOR (Non-Veg)'],

            // ['name' => 'Refried Bean Tacos', 'type' => 'Starters Mexican  (Veg)'],
            // ['name' => 'Nachos with Salsa and Sour Cream', 'type' => 'Starters Mexican  (Veg)'],
            // ['name' => 'Mexican Bread Tartlets', 'type' => 'Starters Mexican  (Veg)'],
            // ['name' => 'Mix Veg Tacos', 'type' => 'Starters Mexican  (Veg)'],
            // ['name' => 'Mexican Cottage Cheese Tartlets', 'type' => 'Starters Mexican  (Veg)'],

            // ['name' => 'Acapulco Chicken', 'type' => 'Starters Mexican  (Non-Veg)'],
            // ['name' => 'Jalapeno Chicken Wrap', 'type' => 'Starters Mexican  (Non-Veg)'],
            // ['name' => 'Chicken Chimichanga', 'type' => 'Starters Mexican  (Non-Veg)'],
            // ['name' => 'Mexican Lamb Tartlets', 'type' => 'Starters Mexican  (Non-Veg)'],
            // ['name' => 'Lamb Empanada', 'type' => 'Starters Mexican  (Non-Veg)'],

            // ['name' => 'Vegetable Kibbeh', 'type' => 'Starters Mediterranean  (Veg)'],
            // ['name' => 'Khudar Maklieh (Assorted Exotic Vegetables Batter fried)', 'type' => 'Starters Mediterranean  (Veg)'],
            // ['name' => 'Albanian Spinach Rolls', 'type' => 'Starters Mediterranean  (Veg)'],
            // ['name' => 'Spanakopita', 'type' => 'Starters Mediterranean  (Veg)'],
            // ['name' => 'Falafel with Taratour', 'type' => 'Starters Mediterranean  (Veg)'],

            // ['name' => 'Shish Touk', 'type' => 'Starters Mediterranean  (Non-Veg)'],
            // ['name' => 'Touk Harrah', 'type' => 'Starters Mediterranean  (Non-Veg)'],
            // ['name' => 'Laham Kofta', 'type' => 'Starters Mediterranean  (Non-Veg)'],
            // ['name' => 'Adana Kebab', 'type' => 'Starters Mediterranean  (Non-Veg)'],
            // ['name' => 'Chelo Kebab', 'type' => 'Starters Mediterranean  (Non-Veg)'],


            // ['name' => 'Baby corn Satay', 'type' => 'Starters Oriental / Eastern (Veg)'],
            // ['name' => 'Thai Spring Rolls', 'type' => 'Starters Oriental / Eastern (Veg)'],
            // ['name' => 'Paneer/Spider Rolls', 'type' => 'Starters Oriental / Eastern (Veg)'],
            // ['name' => 'Vegetable Manchurian Dry', 'type' => 'Starters Oriental / Eastern (Veg)'],
            // ['name' => 'Cottage Cheese Satay', 'type' => 'Starters Oriental / Eastern (Veg)'],

            // ['name' => 'Chilli Chicken Dry', 'type' => 'Starters Oriental / Eastern (Non-Veg)'],
            // ['name' => 'Chicken Satay', 'type' => 'Starters Oriental / Eastern (Non-Veg)'],
            // ['name' => 'Drums of Heaven', 'type' => 'Starters Oriental / Eastern (Non-Veg)'],
            // ['name' => 'Chicken Manchurian Dry', 'type' => 'Starters Oriental / Eastern (Non-Veg)'],
            // ['name' => 'Chicken Spring Roll', 'type' => 'Starters Oriental / Eastern (Non-Veg)'],

            // ['name' => 'Cheese Stuffed Grilled Mushrooms', 'type' => 'Starters European / Western (Veg)'],
            // ['name' => 'Balsamic Glazed Mushrooms', 'type' => 'Starters European / Western (Veg)'],
            // ['name' => 'Cheese Stuffed Breaded Mushrooms', 'type' => 'Starters European / Western (Veg)'],
            // ['name' => 'Bruschetta (02 types – Tomato basil, Bell pepper)', 'type' => 'Starters European / Western (Veg)'],
            // ['name' => 'Jalapeño Poppers', 'type' => 'Starters European / Western (Veg)'],

            // ['name' => 'Tamarind Glazed Chicken Shashlik', 'type' => 'Starters European / Western (Non-Veg)'],
            // ['name' => 'Chicken Balls in Barbeque Sauce', 'type' => 'Starters European / Western (Non-Veg)'],
            // ['name' => 'Cajun Chicken', 'type' => 'Starters European / Western (Non-Veg)'],
            // ['name' => 'Chicken Balls in Barbeque Sauce	', 'type' => 'Starters European / Western (Non-Veg)'],
            // ['name' => 'Chicken Frittata', 'type' => 'Starters European / Western (Non-Veg)'],

            // ['name' => 'Moong Dal Wada with Chutney / Cocktail Samosa with Imli Chutney / Mini Mutter Kachori', 'type' => 'Starters Gujarati and Marwari'],
            // ['name' => 'Crispy Raj Bhindi with yoghurt Dip / Moong Dal Pakodi / Green Peas ki Potli Kachori', 'type' => 'Starters Gujarati and Marwari'],
            // ['name' => 'Khasta Kachori / Panchratni Dhokla / Stuffed Mirch Pakodi / Khatta Meetha Dhokla / Safed Dhokla', 'type' => 'Starters Gujarati and Marwari'],
            // ['name' => 'Kalimiri Dhokla / Tiranga Dhokla / Kanji Wada / Khandvi / Patra / Dal Wada / Jodhpuri Onion Kachori', 'type' => 'Starters Gujarati and Marwari'],
            // ['name' => 'Kothimbir Wadi / Parappu Vadai (Bengal Gram Wada) / Aloo Bonda / Green Peas Ghugra', 'type' => 'Starters Gujarati and Marwari'],



            // ['name' => 'Tamater Sev Ki Subji / Sua Wadi / Dahi Ki Subji / Oondhio /Turai Patra / Lobia ki Kathol / Fansi Dhokli', 'type' => 'Main Course Gujarati / Rajasthani'],
            // ['name' => 'Papdi Muthia / Math ki Kathol / Bhindi Sambharia / Ringna Batata / Tindli Sambhariya / Kaju Amchur ', 'type' => 'Main Course Gujarati / Rajasthani'],
            // ['name' => 'Sev Tamatar nu Shaak / Green Moong Kathol / Methi Muthia ki Subzi /Gatte ka Subzi / Ker Sangri', 'type' => 'Main Course Gujarati / Rajasthani'],
            // ['name' => 'Mutter ki Subzi / Aloo Pyaz ki Subzi / Subz Jaipoori / Bhindi Capsicum / Subz Soya Kheema / Badi ka Saag', 'type' => 'Main Course Gujarati / Rajasthani'],
            // ['name' => 'Kachri-Guar Phalli ki Subzi / Dahi ki Subzi / Sua Wadi / Kachri nu Chutney / Methi Amchoor', 'type' => 'Main Course Gujarati / Rajasthani'],

            // ['name' => 'Veg Balls In choice of sauce', 'type' => 'Main Course International(Veg)'],
            // ['name' => 'Exotic Veg in Choice of sauce', 'type' => 'Main Course International(Veg)'],
            // ['name' => 'Sweet and Sour Vegetable', 'type' => 'Main Course International(Veg)'],
            // ['name' => 'Diced Vegetables with Cashewnuts', 'type' => 'Main Course International(Veg)'],
            // ['name' => 'Three Treasure Vegetables', 'type' => 'Main Course International(Veg)'],

            // ['name' => 'Fried Chicken in Choice of sauce', 'type' => 'Main Course International(Non-Veg)'],
            // ['name' => 'Sheng Fu Chicken', 'type' => 'Main Course International(Non-Veg)'],
            // ['name' => 'Cashew chicken in choice of sauce', 'type' => 'Main Course International(Non-Veg)'],
            // ['name' => 'Sweet and Sour chicken', 'type' => 'Main Course International(Non-Veg)'],
            // ['name' => 'Hong Kong Chicken', 'type' => 'Main Course International(Non-Veg)'],

            // ['name' => 'Yellow Dal Tadka / Lasooni Dal Tadka / Dal Palak / Dal Amti / Tomato Pappu / Dal Fry / Sambhar', 'type' => 'Main Course (Selection of Lentils)'],
            // ['name' => 'Cholar Dal with Narkel / Yellow Moong Dal Tadka / Green Moong Tadka / Dal Makhani / Dal Bukhara', 'type' => 'Main Course (Selection of Lentils)'],
            // ['name' => 'Dal Peshawari / Dal Panchmela / Dal Maharani / Dal Dera / Dal Kabila / Saboot Masoor Ki Dal', 'type' => 'Main Course (Selection of Lentils)'],
            // ['name' => 'Rajasthani Dal / Surti Dal / Lobia Masala / Rajma Masala / Rajma Rismissa / Pindi Chole', 'type' => 'Main Course (Selection of Lentils)'],
            // ['name' => 'Rajasthani kadhi / Gujrati Kadhi / Pakouda Kadhi / Bhindi Kadhi / Onion Pakouda Kadhi / Dal Dhokli', 'type' => 'Main Course (Selection of Lentils)'],

            // ['name' => 'Khushka (steam rice) / Jeera Rice / Green peas Pulao / Onion Pulao / Masala Bhat / Bisibela Bhat', 'type' => 'Main Course Rice / Noodle / Pasta preparations(Veg)'],
            // ['name' => 'Chitrana Rice (lemon / tomato / tamarind / coconut) / Kashmiri Pulao / Navratan Pulao', 'type' => 'Main Course Rice / Noodle / Pasta preparations(Veg)'],
            // ['name' => 'Jodhpuri Mewa Pulao / Zaafrani Tarkari Pulao / Vegetable Tehri / Gatte ka Pulao', 'type' => 'Main Course Rice / Noodle / Pasta preparations(Veg)'],
            // ['name' => 'Hyderabadi Biryani / Subz Dum Biryani / Paneer Tikka Biryani / Tomato and Mint Pulao', 'type' => 'Main Course Rice / Noodle / Pasta preparations(Veg)'],
            // ['name' => 'Vegetable Fried rice / Mushroom Manchurian Fried rice / Schewuan Fried Rice', 'type' => 'Main Course Rice / Noodle / Pasta preparations(Veg)'],

            // ['name' => 'Murgh Dum Biryani / Chicken Tikka Biryani / Murgh Hyderabadi Biryani / Mutton Biryani', 'type' => 'Main Course Rice / Noodle / Pasta preparations(Non-Veg)'],
            // ['name' => 'Kacchi Ghosht ki Biryani / Chicken Fried Rice / Chicken Schezwuan Fried Rice / Korean Fried Rice', 'type' => 'Main Course Rice / Noodle / Pasta preparations(Non-Veg)'],
            // ['name' => 'Vietnamese Fried Rice / Nasi Goreng / Prawn fried Rice / Mixed Fried Rice / Bahmi Goreng', 'type' => 'Main Course Rice / Noodle / Pasta preparations(Non-Veg)'],
            // ['name' => 'Chicken Hakka noodles / Chicken Schezwuan noodles / Pansit Cantonese / Paella Valencia', 'type' => 'Main Course Rice / Noodle / Pasta preparations(Non-Veg)'],
            // ['name' => 'Chicken Jambalaya / Ali Pasha Pilaf / Meat kabsa / Sayadieh Samak / Iranian Jeweled Rice', 'type' => 'Main Course Rice / Noodle / Pasta preparations(Non-Veg)'],

            // ['name' => 'Plain Kulcha, Stuffed Kulcha, Khasta Roti, Missi Roti, Tawa Roti, Plain Roti, Methi Rotla, Phulka,Bajre Ki Roti, Jawari Ki Roti, Thepla, Pudina Roti, Roomali Roti', 'type' => 'Main Course Indian Breads'],
            // ['name' => 'Reshmi Parantha, Pudina Parantha, Laccha Paratha, Mirchi Rogan Paratha, Garlic Naan, Plain Naan, Cheese Naan, Butter naan, Chili Garlic Naan, Kandhari Naan', 'type' => 'Main Course Indian Breads'],

            // ['name' => 'Bharwan Subz Tawa Masala / Tawa Pulao / Sarson ka Saag with Makai ki Roti / Lagaan Ka Mela', 'type' => 'Live Counters(Vegetarian)'],
            // ['name' => 'Vilayti Subz Tawa Masala / Tawa Paneer Kurchan / Tawa Paneer Taka Tak / Dum Aloo Counter', 'type' => 'Live Counters(Vegetarian)'],
            // ['name' => 'Vegetable Chaps on Tawa / Subz Gilawati with ulte tawa ka Paratha / Tawa Aloo Taka Tak', 'type' => 'Live Counters(Vegetarian)'],
            // ['name' => 'Dal Ka Mela / Amritsari Chole Kulche / Thepla Wraps / Barbeque vegetables in Roomali wraps', 'type' => 'Live Counters(Vegetarian)'],
            // ['name' => 'Appam with Pachakari stew / Veg Tawa Pulao / Dhabe Da Subz / Burmese Khausuey station', 'type' => 'Live Counters(Vegetarian)'],

            // ['name' => 'Assorted Tandoori Chicken Kebab on Tawa / Lagaan ka Murgh / Murgh Taka Tak / Dhabe Da Murgh Murgh Tawa Pulao / Kheema Mutter pav / Mutton Chops on Tawa / Gurda Kaleji on Tawa', 'type' => 'Live Counters(Non-Vegetarian)'],
            // ['name' => 'Mutton Ghotala / Mutton Tawa Pulao / Ghost Tawa Masala /Masala Fried Tawa Macchi / Fish in choice of coastal curry / Fried chicken in Choice of sauce / Tai Pai Chicken / Chicken 65 / Rice – Noodle Counter  Shangai Lamb / Fried Prawns in Choice of sauce / American Barbeque counter / Chicken Picatta Cajun Chicken / Grilled Fish with lemon butter sauce / Grilled lamb escalopes / Pasta Counter Chicken Shawerma', 'type' => 'Live Counters(Non-Vegetarian)'],

            // ['name' => 'Assorted Sandesh Platter / Assorted Barfi Platter / Assorted Kalakand Platter', 'type' => 'Desserts Indian'],
            // ['name' => 'Halwa (Moong Dal / Gajjar / Sooji / Badam / Doodhi Dry Fruit / Baadshahi / Beetroot / Khajur / Anjeer)', 'type' => 'Desserts Indian'],
            // ['name' => 'Shrikhand (kesar / badam / mango / Elaichi /strawberry)', 'type' => 'Desserts Indian'],
            // ['name' => 'Basundi (plain / strawberry / sitaphal / mix fruit)', 'type' => 'Desserts Indian'],
            // ['name' => 'Malai Chum Chum / Rice Phirni in kulhad / Gulabjamun / 03 Layered Baked Sheera / Kesariya Raj Bhog', 'type' => 'Desserts Indian'],

            // ['name' => 'White Forest Gateau  / Dark Chocolate Mousse / Lemon Cheese Cake / Chocolate Mousse / Tiramisu', 'type' => 'Desserts Bakery'],
            // ['name' => 'English Triffle Pudding / Chocolate Truffle Cake / Baklava / Caramel Custard / Apple Pie', 'type' => 'Desserts Bakery'],
            // ['name' => 'Chocolate Mud cake / Chocolate Dipped Strawberries with Vanilla Ice Cream', 'type' => 'Desserts Bakery'],
            // ['name' => 'Churros with Chocolate Sauce / Mango Mousse / Tress Leches', 'type' => 'Desserts Bakery'],
            // ['name' => 'Chocolate Molten Lava Pudding in Small Cups / Red velvet Cake with whipped Cream', 'type' => 'Desserts Bakery'],

            // ['name' => 'Assorted Mithai on Tawa', 'type' => 'Desserts Live Counter'],
            // ['name' => 'Assorted Sheera on Tawa', 'type' => 'Desserts Live Counter'],
            // ['name' => 'Assorted Mini Jamun on Tawa', 'type' => 'Desserts Live Counter'],
            // ['name' => 'Malpua with Rabdi', 'type' => 'Desserts Live Counter'],
            // ['name' => 'Mixed Cut Fruits with Whipped Cream', 'type' => 'Desserts Live Counter'],

            // ['name' => 'Pista Roll, Chocolate Badam Roll', 'type' => 'BARAT SWAGAT/ASSEMBLY'],
            // ['name' => 'Mutter Potli Kachodi', 'type' => 'BARAT SWAGAT/ASSEMBLY'],
            // ['name' => 'Dry Fruits- From Guests Side', 'type' => 'BARAT SWAGAT/ASSEMBLY'],
            // ['name' => 'Pista Burfi', 'type' => 'BARAT SWAGAT/ASSEMBLY'],
            // ['name' => 'Stuffed Litchi', 'type' => 'BARAT SWAGAT/ASSEMBLY'],

        ]);
    }
}
