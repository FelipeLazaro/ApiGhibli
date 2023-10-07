<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\User;
use Illuminate\Support\Arr;
use Exception;

class GhibliController extends Controller
{
    public function getGhibli($id_user) {

        $client = new Client();   
        $user = User::where('id',$id_user)
                ->first();

        if (!isset($user)) {
            //throw new Exception('No user registration');
            return response()->json(['error' => 'No user registration'], 404);
        }
        $endpoint = $user->rol;
        $response = $client->get('https://ghibliapi.vercel.app/'.$endpoint.'');

        if ($response->getStatusCode() === 200) {
            $data = json_decode($response->getBody());
            
            return response()->json($data);
        }

        
        return response()->json(['error' => 'Hubo un problema al obtener los datos de Studio Ghibli'], 500);
    }
}
