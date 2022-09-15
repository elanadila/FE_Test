<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class RuasController extends Controller
{
    //

    public function index()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://630c319983986f74a7bb0dc5.mockapi.io/jm/ruas/ruas');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $data = json_decode($body, true);
        // return count($data);
        // return $data[50]['ruas'];

        // return $data['data']->ruas;

        // "ruas": "ruas 69"

        return view('welcome', ['data' => $data]);

    }

    public function getData()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://630c319983986f74a7bb0dc5.mockapi.io/jm/ruas/ruas');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $data = json_decode($body, true);
        // return count($data);
        // return $data[50]['ruas'];

        // return $data['data']->ruas;

        // "ruas": "ruas 69"

        return view('ruas', ['data' => $data]);
    }

    public function getSingleRuas($id)
    {
        $client = new Client();
        $response = $client->request('GET', 'https://630c319983986f74a7bb0dc5.mockapi.io/jm/ruas/ruas/' . $id, [
            'headers' => [
                'Accept' => 'application/json'
            ]
        ]);
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $data = json_decode($body, true);
        // dd($data);

        return view('detail', ['data' => $data]);
    }

    public function addRuas(Request $request)
    {
        $client = new Client();
        $response = $client->request('POST', 'https://630c319983986f74a7bb0dc5.mockapi.io/jm/ruas/ruas/', [
            'headers' => [
                'Accept' => 'application/json'
            ],
            'json' => [
                'ruas' => $request->ruas,
                'unit' => $request->unit,
                'picture' => $request->picture,
                'date_create' => $request->date_create,
            ],
        ]);
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $data = json_decode($body, true);


        return redirect()->route('ruas')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function getEditRuas($id)
    {
        $client = new Client();
        $response = $client->request('GET', 'https://630c319983986f74a7bb0dc5.mockapi.io/jm/ruas/ruas/' . $id, [
            'headers' => [
                'Accept' => 'application/json'
            ]
        ]);
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $data = json_decode($body, true);
        // dd($data);

        return view('edit', ['data' => $data]);
    }

    public function editRuas(Request $request, $id)
    {
        $client = new Client();
        $response = $client->request('PUT', 'https://630c319983986f74a7bb0dc5.mockapi.io/jm/ruas/ruas/' . $id,  [
            'headers' => [
                'Accept' => 'application/json'
            ],
            'json' => [
                'ruas' => $request->ruas,
                'unit' => $request->unit,
                'picture' => $request->picture,
                'date_create' => $request->date_create,
            ],
        ]);
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $data = json_decode($body, true);


        return redirect()->route('ruas')->with('success', 'Data Berhasil Di Update');
    }

    public function deleteRuas($id)
    {
        $client = new Client();
        $response = $client->request('DELETE', 'https://630c319983986f74a7bb0dc5.mockapi.io/jm/ruas/ruas/' . $id, [
            'headers' => [
                'Accept' => 'application/json'
            ]
        ]);
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $data = json_decode($body, true);
        // dd($data);

        return redirect()->route('ruas')->with('success', 'Data Berhasil Di Hapus');

    }
}
