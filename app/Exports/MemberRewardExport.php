<?php

namespace App\Exports;

use App\Models\MemberReward;
use App\Models\PromotionReward;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class MemberRewardExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */
    protected $no;
    protected $date_start;
    protected $date_end;

    public function __construct($date_start = null,$date_end = null)
    {
        $this->no = 0;
        $this->date_start = $date_start;
        $this->date_end = $date_end;
    }

    public function collection()
    {
        $rewards = MemberReward::with(['member','sourceable'])->whereHas('member')
            ->when($this->date_start, function ($q) {
                $q->whereDate('member_rewards.created_at', '>=', $this->date_start);
            })
            ->when($this->date_end, function ($q) {
                $q->whereDate('member_rewards.created_at', '<=', $this->date_end);
            });

        return $rewards->latest('id')->get();
    }

    public function map($reward) : array
    {
        $this->no++;
        $model = explode("\\", $reward->sourceable_type, 3);
        $type = preg_replace('/(?<!\ )[A-Z]/', ' $0', $model[2]);

        $description = '';
        $source = $reward->sourceable;
        if ($reward->sourceable_type == PromotionReward::class) {
            $description .= $source->promotion?->name.' ('.$source->referral_count.' members)';
        }

        return [
            $this->no,
            $reward->created_at->format('d M Y'),
            $reward->member?->name,
            $type,
            $description,
            $reward->amount,
        ] ;
    }

    public function headings() : array
    {
        return [
            ['#', 'Created At', 'Member Name', 'Type', 'Description', 'Amount'],
        ];
    }
}
