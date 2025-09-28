<?php

namespace App\DataTables;

use App\Models\Member;
use App\Models\MemberReward;
use App\Models\PromotionReward;
use Illuminate\Support\Facades\Request;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class MemberRewardDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addIndexColumn('DT_RowIndex')
            ->addColumn('type', function($item) {
                $model = explode("\\", $item->sourceable_type, 3);
                return preg_replace('/(?<!\ )[A-Z]/', ' $0', $model[2]);
            })
            ->addColumn('description', function($item) {
                $description = '';
                $source = $item->sourceable;
                if ($item->sourceable_type == PromotionReward::class) {
                    $description .= $source->promotion?->name.' ('.$source->referral_count.' members)';
                }
                return $description ?? '-';
            })
            ->rawColumns([]);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\MemberReward $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(MemberReward $model)
    {
        return $model->with(['member','sourceable'])->whereHas('member')->localsearch(request());
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('member-reward-list-table')
            ->columns($this->getColumns())
            ->ajax([
                'url' => route('member-rewards.index'),
                'data' => 'function(d) {
                    d.member_name = $("#member_name").val();
                    d.created_year_month = $("#created_year_month").val();
                }',
            ])
            ->dom("<'d-flex justify-content-end tw-py-2' p><'row scroll-container'<'col-sm-12 overflow-scroll' t>><'row'<'col-lg-12' <'tw-py-3 col-lg-12 d-flex flex-column flex-sm-row align-items-center justify-content-between tw-space-y-5 md:tw-space-y-0' ip>r>>")
            ->initComplete('function() {
                    $(".datatable-input").on("change",function () {
                        $("#member-reward-list-table").DataTable().ajax.reload();
                    });
                    $("#subBtn").on("click",function () {
                        $("#member-reward-list-table").DataTable().ajax.reload();
                    });
                    $("#filterBranch").on("click",function () {
                        $("#member-reward-list-table").DataTable().ajax.reload();
                    });
                    $("#clearBtn").on("click",function () {
                        $("#member_name").val(null);
                        $("#created_year_month").val(null);
                        $("#created_year_month").change();
                        $("#member-reward-list-table").DataTable().ajax.reload();
                    });
                    $("#member-reward-list-table").on("click", ".delFunc", function(e) {
                        var del_id = ".destroy_" + $(this).attr("data-id");
                        event.preventDefault();
                        Swal.fire({
                            title: "'.trans('messages.are_you_sure').'",
                            text: "'.trans('messages.wont_able_revert').'",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonText: "'.trans('messages.yes_delete_it').'"
                        }).then(function(result) {
                            if (result.value) {
                                $(del_id).submit();
                            }
                            else{
                                if(id.prop("checked")) { id.prop("checked", false); }
                                else { id.prop("checked", true); }
                            }
                        });
                    });
                }');
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('DT_RowIndex')->title('#')->orderable(false),
            Column::make('member.name')->title('Member Name')->orderable(false),
            Column::make('type')->orderable(false),
            Column::make('description')->orderable(false),
            Column::make('amount')->orderable(false),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'MemberReward_' . date('YmdHis');
    }
}
