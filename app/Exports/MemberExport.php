<?php

namespace App\Exports;

use App\Models\Member;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class MemberExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $no;
    protected $status;

    public function __construct($status)
    {
        $this->no = 0;
        $this->status = $status;
    }

    public function collection()
    {
        $members = Member::when(!is_null($this->status), function($query) {
            return $query->where('status', $this->status);
        });
        return $members->get();
    }

    public function map($member) : array
    {
        $this->no++;

        return [
            $this->no,
            $member->created_at->format('d M Y'),
            $member->name,
            $member->phone,
            $member->email,
            $member->status_name ?? '-',
        ] ;
    }

    public function headings() : array
    {
        return [
            ['#', 'Apply Date', 'Name', 'Phone', 'Email', 'Status'],
        ];
    }
}
