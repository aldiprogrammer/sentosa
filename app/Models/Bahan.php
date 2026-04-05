<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
    //


    /**
     * Get the user that owns the Bahan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jenisbahan()
    {
        return $this->belongsTo(Jenisbahan::class, 'id_kategori_bahan');
    }

    public function satuanstok()
    {
        return $this->belongsTo(Satuanstok::class, 'satuan_stok');
    }
}
