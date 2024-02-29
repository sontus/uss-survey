<?php

namespace App\Exports;

use App\Models\UserAnswer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ReportExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return UserAnswer::select('id','user_id','box_11','box_12','box_13','box_14','box_15')->get();
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ["ID", "User ID", "Box 1","Box 2","Box 3","Box 4","Box 5","Box 6","Box 7","Box 8","Box 9","Box 10"];
    }
}
