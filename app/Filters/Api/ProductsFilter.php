<?php 
namespace App\Filters\Api;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;


class ProductsFilter extends ApiFilter{
    protected $safeParms= [
        'name' => ['eq'],
        'description' => ['eq'],
        'purchasePrice' =>['eq' ,'lt','lte','gt','gte'],
        'sellingPrice' => ['eq' ,'lt','lte','gt','gte'],
        'quantity' => ['eq' ,'lt','lte','gt','gte'],
        'categoryId' => ['eq']
    ];


    protected $columnMap = [
        //'quantity' => 'quantity',
        'purchasePrice' => 'purchase_price',
        'sellingPrice' => 'selling_price',
        'categoryId' => 'category_id'
    ];

    protected $operatorMap =[
        'eq' => '=',
        'lt' => '<',
        'lte' => '=<',
        'gt' => '>',
        'gte' => '=>',
        'ne' => '!='
    ];

    
}