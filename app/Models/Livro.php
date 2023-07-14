<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = [ "nome", "abreviacao", "posicao", "testamento_id"];
    use HasFactory;

    public function testamento(){
        return $this->belongsTo(Testamento::class);
    }
}
