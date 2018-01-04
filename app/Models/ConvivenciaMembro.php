<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ConvivenciaMembro
 * @package App\Models
 * @version January 2, 2018, 9:50 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection convivenciaMembro
 * @property \Illuminate\Database\Eloquent\Collection convivenciaMembro
 */
class ConvivenciaMembro extends Model
{
    use SoftDeletes;

    public $table = 'convivencia_membros';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'convivencia_id',
        'membro_id'
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'convivencia_id' => 'integer',
        'membro_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function convivencias()
    {
        return $this->belongsToMany(\App\Models\Convivencia::class, 'convivencia_membro', 'convivencia_id', 'membro_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function membros()
    {
        return $this->belongsToMany(\App\Models\Membro::class, 'convivencia_membro', 'convivencia_id', 'membro_id');
    }
}
