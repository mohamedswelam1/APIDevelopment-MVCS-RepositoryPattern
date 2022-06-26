<?php 
declare(strict_types=1);

namespace App\Modules\Students ;

use App\Modules\Common\MyHelpers;
use Illuminate\Support\Facades\Date;

class StudentsMapper
{
    public static function mapFrom(array $data) : Students
    {
        return new Students(
           MyHelpers::nullStringToInt($data['id'] ?? null),
            $data['name'],
            $data['email'],
            $data['deletedAt'] ?? null,
            $data['creaatedAt'] ?? Date("Y-m-d H:i:s"),
            $data['updated']
            
        );
    }
}