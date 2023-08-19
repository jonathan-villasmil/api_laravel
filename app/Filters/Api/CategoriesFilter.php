<?php 
namespace App\Filters\Api;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;


class CategoriesFilter extends ApiFilter{
    protected $safeParms= [
        'name' => ['eq'],
        'description' => ['eq'],
        //'status' => ['eq', 'ne'],
    ];

    // protected $columnMap = [];

    protected $operatorMap =[
        'eq' => '=',
        'lt' => '<',
        'lte' => '=<',
        'gt' => '>',
        'gte' => '=>',
        'ne' => '!='
    ];

    
}