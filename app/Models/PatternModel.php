<?php

namespace App\Models;

use App\Entities\Pattern;
use CodeIgniter\Model;

class PatternModel extends Model
{

    //CREATE TABLE pattern (id INT, redValue VARCHAR(5), yellowValue VARCHAR(5), blueValue VARCHAR(5), blackValue VARCHAR(5), whiteValue VARCHAR(5), lValue VARCHAR(5), aValue VARCHAR(5), bValue VARCHAR(5));

    /**
     * @var string
     */
    protected $table = 'pattern';

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    /**
     * @var string
     */
    protected $returnType = Pattern::class;

    /**
     * @var bool
     */
    protected $useSoftDeletes = false;

    /**
     * @var string[]
     */
    protected $allowedFields = [
        'redValue', 'yellowValue', 'blueValue', 'blackValue', 'whiteValue', 'lValue', 'aValue', 'bValue'
    ];

    /**
     * @var bool
     */
    protected $useTimestamps = false;

    /**
     * @var array<string, string>
     */
    protected $validationRules = [];

    /**
     * @var array
     */
    protected $validationMessages = [];

    /**
     * @var bool
     */
    protected $skipValidation = false;
}