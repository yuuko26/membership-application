<?php

namespace App\Jobs;

use App\Models\Member;
use App\Models\Promotion;
use App\Models\PromotionReward;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\DB;

class ReferralCalculation implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $today = Carbon::today()->format('Y-m-d');

        $promotions = Promotion::with('rewards')
            ->where('start_date', '<=', $today)
            ->where('end_date', '>=', $today)
            ->get();

        $members = Member::where('status',Member::STATUS_APPROVED)->get();
        foreach ($members as $member) {
            foreach ($promotions as $promotion) {
                $this->checkPromotion($member, $promotion);
            }
        }
    }

    protected function checkPromotion($member, $promotion)
    {
        $referral_count = $member->refer_members()
//            ->where('status', Member::STATUS_APPROVED)
            ->whereBetween('created_at', [$promotion->start_date->format('Y-m-d 00:00:00'), $promotion->end_date->format('Y-m-d 23:59:59')])
            ->count();

        foreach ($promotion->rewards as $reward) {
            $has_rewarded = $member->promotion_rewards()->where('promotion_id', $promotion->id)
                ->where('reward_id', $reward->id)
                ->exists();

            if ($referral_count >= $reward->referral_count && !$has_rewarded) {
                $this->assignReward($member, $promotion, $reward);
            }
        }
    }

    protected function assignReward($member, $promotion, $reward)
    {
        DB::beginTransaction();

        $member->promotion_rewards()->create([
            'promotion_id' => $promotion->id,
            'reward_id' => $reward->id,
        ]);

        $member->rewards()->create([
            'amount' => $reward->amount,
            'sourceable_type' => PromotionReward::class,
            'sourceable_id' => $reward->id,
        ]);

        DB::commit();
    }
}
