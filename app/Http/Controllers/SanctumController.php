<?php
declare(strict_types=1);
/* 
 */
namespace App\Http\Controllers;

use App\Modules\Core\HTTPResponseCodes;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SanctumController 
{
    public function issueToken(Request $request) : Response
    {
        try
        {
          throw new Exception("Hell");
        }catch(Exception $error){
            return new Response([
                'exception' => get_class($error),
                'errors'=>$error->getMessage()
            ], HTTPResponseCodes::BadRequest['code']
        );
        }
    }
}
