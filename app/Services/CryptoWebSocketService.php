<?php 

namespace App\Services;

use Illuminate\Support\Facades\Log;
use WebSocket\Client;

class CryptoWebSocketService
{
    private $wsUrl = 'wss://wss.nobitex.ir/connection/websocket';
    private $client;
    private $prices = [];


    public function connect()
    {
        try {
            $this->client= new Client($this->wsUrl);

            //Send connect message 
            $this->sendMessage(
                [
                    'connect' => [],
                    'id' => 1
                ]
            ); 
            // Start ping-pong in a separate thread
            $this->startPingPong();
            return true;
        } catch (\Exception $e) {
            Log::error('WebSocket connection failed: ' . $e->getMessage());
            $this->close();
            return false;
        }
    }

    public function subscribeToToken ($symbol)
    {
        if($this->client)
        {
            return false;
        }
        try {
            $this->sendMessage([
                'subscribe' => [
                    'channel' => "public:orderbook-{$symbol}IRT"
                ],
                'id' => uniqid()
            ]);
            $this->prices[$symbol] = null; // Initialize symbol price

            return true;
        } catch (\Exception $e) {
            Log::error('Failed to subscribe to token: ' . $e->getMessage());
            return false;
        }   
    }

    public function getLatestPrice($symbol)
    {
        if (!$this->client) {
            return null;
        }

        try {
            $message = $this->client->receive();
            $data = json_decode($message, true);
            
            if (isset($data['publication']) && 
                $data['publication']['channel'] === "public:orderbook-{$symbol}IRT") {
                return $data['publication']['data']['last_price'] ?? null;
            }
            
            return null;
        } catch (\Exception $e) {
            Log::error('Failed to get price: ' . $e->getMessage());
            return null;
        }
    }

    private function sendMessage($data)
    {
        if (!$this->client) {
            return false;
        }

        try {
            $this->client->send(json_encode($data));
            return true;
        } catch (\Exception $e) {
            Log::error('Failed to send message: ' . $e->getMessage());
            return false;
        }
    }

    public function close()
    {
        if ($this->client) {
            $this->client->close();
        }
    }

}