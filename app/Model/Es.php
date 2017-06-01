<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Elasticsearch\ClientBuilder;

class Es extends Model
{

    private $client = null;

    public function build()
    {
        $hosts = config('es.server');
        $this->client = ClientBuilder::create()
            ->setHosts($hosts)
            ->build();
    }

    public function indices()
    {
        $indexParams = [
            'index' => 'test_es',
            'body' => [
                'settings' => [
                    'number_of_shards' => 5,
                    'number_of_replicas' => 1
                ]
            ]
        ];

        $this->build();
        $response = $this->client->indices()->create($indexParams);
    }

    public function store($data100)
    {
        $this->build();

        $params = [
            'index' => 'test_es',
            'type' => 'documents'
        ];

        foreach ($data100 as $k => $v) {
            $params['id'] = $v['taxid'];
            $params['body'] = $v;

            $r = $this->client->index($params);
        }

    }

    public function get($id)
    {
        $this->build();

        $params = [
            'index' => 'test_es',
            'type' => 'documents',
            'id' => $id
        ];

        $result = $this->client->get($params);


        dd($result);exit;

    }

}
