<?php
/**
 * Model genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Cabang extends Model
{
    use SoftDeletes;
	
	protected $table = 'cabangs';
	
	protected $hidden = [
        
    ];

	protected $guarded = [];

	protected $dates = ['deleted_at'];

	public function scopeGetDataCabang(){
		return DB::table('cabangs')->join('transaksikirims','cabangs.id','=','transaksikirims.KodeCabang')->join('produks','produks.id','=','transaksikirims.KodeProduk')->join('transaksipenjualans','produks.id','=','transaksipenjualans.KodeProduk')->groupBy('cabangs.NamaCabang')->groupBy('produks.NamaProduk')->select(DB::raw('cabangs.NamaCabang','produks.NamaProduk','(sum(transaksikirims.JumlahBarangKirim) - sum(transaksipenjualans.JumlahBarangBeli)) as sisa'))->get();

	}
}
