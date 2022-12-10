<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Http;

    class HomeController extends Controller
    {
        public function home() {
            $response = Http::get('https://gateway.marvel.com:443/v1/public/events?limit=9&offset=9&ts=1&apikey=b84e32b4ee7ee30122fe5b49250593a1&hash=b8d6c43945150c140923a88a3bb4615a')->json();
            $results = $response['data']['results'];
            $categoryIdSelected = 'events';

            return view('home',
                [
                    'results' => $results,
                    'categoryIdSelected' => $categoryIdSelected
                ]);
        }

        public function series() {
            $response = Http::get('https://gateway.marvel.com:443/v1/public/series?limit=9&offset=9&ts=1&apikey=b84e32b4ee7ee30122fe5b49250593a1&hash=b8d6c43945150c140923a88a3bb4615a')->json();
            $results = $response['data']['results'];
            $categoryIdSelected = 'series';

            return view('series',
                [
                    'results' => $results,
                    'categoryIdSelected' => $categoryIdSelected
                ]);
        }

        public function characters() {


//            $api = new \GuzzleHttp\Client();
//            $response = $api->request('GET', 'https://gateway.marvel.com:443/v1/public/characters?limit=15&offset=15&ts=1&apikey=b84e32b4ee7ee30122fe5b49250593a1&hash=b8d6c43945150c140923a88a3bb4615a');
            $response = Http::get('https://gateway.marvel.com:443/v1/public/characters?limit=9&offset=9&ts=1&apikey=b84e32b4ee7ee30122fe5b49250593a1&hash=b8d6c43945150c140923a88a3bb4615a')->json();
            $results = $response['data']['results'];
            $categoryIdSelected = 'characters';

            return view('characters',
                [
                    'results' => $results,
                    'categoryIdSelected' => $categoryIdSelected
                ]);
        }
    }
