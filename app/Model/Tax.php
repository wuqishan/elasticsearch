<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    protected $table = 'tax';

    public function get100()
    {
        $res = $this->join('tax_content', 'tax_content.taxid', '=', 'tax.taxid')
                    ->whereBetween('tax.taxid', [1, 100])
                    ->select('tax.*', 'tax_content.content')
                    ->get();
        return $res->toArray();
    }
}
