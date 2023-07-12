<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jumum_model extends Model
{
    use HasFactory;
    protected $table ="jumum";
    protected $primaryKey ="id";

    public function tampil_jumum(){
        $query = \DB::table('jumum')->get();
        return $query;
    }
}
