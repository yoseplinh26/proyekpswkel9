<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BelajarModel extends Model
{
    use HasFactory;

    protected $table = 't_siswas';
    
    // untk atribut yang gak boleh atau gak perlu diisi; 
    protected $guarded = ['id'];
    // insert into t_siswas (nama, kelas) values ('yoseplin', 'd3ti')

    // untuk atribut yang diisi
    // protected $fillable = ['nama', 'kelas'];
    // insert into t_siswas (nama, kelas) values ('yoseplin', 'd3ti')

}
