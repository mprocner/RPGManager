<?php
/**
 * File: TestController.php
 *
 * @author Mateusz Procner<mateusz.procner@lizardmedia.pl>
 * @copyright Copyright (C) 2018 Lizard Media (http://lizardmedia.pl)
 */

namespace app\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Pusher\Pusher;

class TestController extends Controller
{
    /**
     * @var Pusher
     */
    private $pusher;

    /**
     * TestController constructor.
     */
    public function __construct()
    {
        $options = array(
            'cluster' => 'eu',
            'useTLS' => true
        );
        $this->pusher = new Pusher(
            '7aaad534e81c4784b64b',
            'dfcd0b2ec455ad08ba9b',
            '695784',
            $options
        );
    }

    public function randomNumbers()
    {
        $count = 35;
        $min = 1;  // minimum
        $max = 10000;  // maximum
        $numbers = []; // initialize array

        while (count($numbers) < $count) {
            if (!in_array($number = rand($min, $max), $numbers)) {
                $numbers[] = $number;
            }
        }
        return $numbers;
    }
    /**
     * TODO sortowanie
     */
    public function push()
    {
        $ids  = $this->randomNumbers();
        $faker = \Faker\Factory::create();
        $data = [];
        $fieldsList = [
            'name', 'surname', 'phoneNumber', 'picture', 'city', 'locale', 'company', 'email', 'address', 'postcode',
            'country', 'countryCode', 'ipv4', 'streetName', 'latitude', 'longitude', 'jobTitle', 'creditCardType',
            'creditCardNumber', 'creditCardExpirationDate', 'sentence', 'password', 'url', 'slug', 'unixTime', 'dayOfMonth'
        ];
        $ids[] = 1;
        $ids[] = 2;
        $ids[] = 3;

        foreach ($ids as $id) {
            $record = [];
            $record['id'] = $id;
            $record['time'] = rand(0, 3700);
            $record['time1'] = rand(0, 3700);
            $record['time2'] = rand(0, 3700);

            foreach (array_rand($fieldsList, 10) as $key) {
                $record[$fieldsList[$key]] = $faker->word;
            }
            $data[] = $record;
        }
//        dd(new JsonResponse($data));
//        dd($data);
        $this->pusher->trigger('websupervisor', 'data', new JsonResponse($data));
    }

    public function test()
    {
        $faker = \Faker\Factory::create();

        $columns = [
            'id' => [
                'type' => 'int',
                'name' => 'Id'
            ],
            'time' => [
                'type' => 'time',
                'name' => 'Time'
            ],
            'time1' => [
                'type' => 'time',
                'name' => 'Time1'
            ],
            'time2' => [
                'type' => 'time',
                'name' => 'Time2'
            ],
            'name' => [
                'type' => 'string',
                'name' => 'Name'
            ],
            'surname' => [
                'type' => 'string',
                'name' => 'Surname'
            ],
            'phone' => [
                'type' => 'string',
                'name' => 'Phone'
            ],
            'date' => [
                'type' => 'date',
                'name' => 'Date'
            ],
            'picture' => [
                'type' => 'image',
                'name' => 'Picture'
            ],
            'city' => [
                'type' => 'string',
                'name' => 'City'
            ],
            'locale' => [
                'type' => 'string',
                'name' => 'Locale'
            ],
            'age' => [
                'type' => 'string',
                'name' => 'Age'
            ],
            'company' => [
                'type' => 'string',
                'name' => 'Company'
            ],
            'email' => [
                'type' => 'string',
                'name' => 'Email'
            ],
            'address' => [
                'type' => 'string',
                'name' => 'Address'
            ],
            'postcode' => [
                'type' => 'string',
                'name' => 'Postcode'
            ],
            'country' => [
                'type' => 'string',
                'name' => 'Country'
            ],
            'about' => [
                'type' => 'string',
                'name' => 'About'
            ],
            'countrycode' => [
                'type' => 'string',
                'name' => 'Countrycode'
            ],
            'ip' => [
                'type' => 'string',
                'name' => 'Ip'
            ],
            'street' => [
                'type' => 'string',
                'name' => 'Street'
            ],
            'latitude' => [
                'type' => 'string',
                'name' => 'Latitude'
            ],
            'longitude' => [
                'type' => 'string',
                'name' => 'Longitude'
            ],
            'job' => [
                'type' => 'string',
                'name' => 'Job'
            ],
            'creditCardType' => [
                'type' => 'string',
                'name' => 'Credit card type'
            ],
            'creditCardNumber' => [
                'type' => 'string',
                'name' => 'Credit card number'
            ],
            'creditCardExpirationDate' => [
                'type' => 'string',
                'name' => 'Card expired at'
            ],
            'sentence' => [
                'type' => 'string',
                'name' => 'Sentence'
            ],
            'password' => [
                'type' => 'string',
                'name' => 'Password'
            ],
            'url' => [
                'type' => 'string',
                'name' => 'Url'
            ],
            'slug' => [
                'type' => 'string',
                'name' => 'Slug'
            ],
            'unixtime' => [
                'type' => 'string',
                'name' => 'Unixtime'
            ],
            'dayOfMonth' => [
                'type' => 'string',
                'name' => 'Day of month'
            ],
        ];
        $data = [];
        for ($i = 1; $i <= 10000; $i++) {
            $data[] = [
                'id' => $i,
                'time' => rand(0, 3700),
                'time1' => rand(0, 3700),
                'time2' => rand(0, 3700),
                'name' => $faker->name,
                'surname' => $faker->lastName,
                'phone' => $faker->phoneNumber,
                'date' => $faker->date('d/m/Y'),
                'picture' => '<img src="http://placehold.it/32x32" />',
                'city' => $faker->city,
                'locale' => $faker->locale,
                'age' => rand(20, 80),
                'company' => $faker->company,
                'email' => $faker->email,
                'address' => $faker->address,
                'postcode' => $faker->postcode,
                'country' => $faker->country,
                'about' => $faker->text,
                'countryCode' => $faker->countryCode,
                'ip' => $faker->ipv4,
                'street' => $faker->streetName,
                'latitude' => $faker->latitude,
                'longitude' => $faker->longitude,
                'job' => $faker->jobTitle,
                'creditCardType' => $faker->creditCardType,
                'creditCardNumber' => $faker->creditCardNumber,
                'creditCardExpirationDate' => $faker->creditCardExpirationDateString,
                'sentence' => $faker->sentence,
                'password' => $faker->password,
                'url' => $faker->url,
                'slug' => $faker->slug,
                'unixtime' => $faker->unixTime,
                'dayOfMonth' => $faker->dayOfMonth
            ];
        }
        $toReturn = [
            'columns' => $columns,
            'data' => $data
        ];
        return response()->json($toReturn, 200, [], JSON_UNESCAPED_SLASHES);
    }
}
