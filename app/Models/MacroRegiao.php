<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MacroRegiao
 * @package App\Models
 * @version March 11, 2018, 12:52 am UTC
 *
 * @property string no_macro_regiao
 * @property string no_responsavel
 */
class MacroRegiao extends Model
{
    use SoftDeletes;

    public $table = 'macro_regiaos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'no_macro_regiao',
        'no_responsavel'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'no_macro_regiao' => 'string',
        'no_responsavel' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'no_macro_regiao' => 'required'
    ];

    public function users()
    {
        return $this->belongsToMany(\App\Users::class);
    }
}
