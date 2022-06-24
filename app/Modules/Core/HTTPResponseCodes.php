<?php
declare(strict_types=1);
namespace App\Modules\Core ;

abstract class HTTPResponseCodes
{
    const Success=[
        'title'=>'success',
        'code'=>200,
        'message'=>'Request has been successfuly'
    ];

    const NotFound=[
        'title'=>'not_found',
        'code'=>404,
        'message'=>'could not locate resource'
    ];


    const InvalidArguments=[
        'title'=>'invaid_arguments_error',
        'code'=>404,
        'message'=>'invaild arguments '
    ];


    const BadRequest=[
        'title'=>'success',
        'code'=>400,
        'message'=>'server failed to process your request'
    ];
    
}