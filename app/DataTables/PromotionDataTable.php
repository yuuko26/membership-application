<?php

namespace App\DataTables;

use App\Models\Member;
use App\Models\Promotion;
use Illuminate\Support\Facades\Request;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PromotionDataTable extends DataTable
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
            ->editColumn('name', function($item) {
                return $item->name ?? '-';
            })
            ->editColumn('start_date', function($item) {
                return $item->start_date?->format('d M Y') ?? '-';
            })
            ->editColumn('end_date', function($item) {
                return $item->end_date?->format('d M Y') ?? '-';
            })
            ->editColumn('promotion_status', function($item) {
                return $item->status_name ?? '-';
            })
            ->addColumn('action', function ($item) {
                return view('promotions.action', compact('item'));
            })
            ->rawColumns(['promotion_status','action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Promotion $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Promotion $model)
    {
        return $model->localsearch(request());
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('promotion-list-table')
            ->columns($this->getColumns())
            ->ajax([
                'url' => route('promotions.index'),
                'data' => 'function(d) {
                    d.name = $("#name").val();
                    d.start_date = $("#start_date").val();
                    d.end_date = $("#end_date").val();
                    d.promotion_status = $("#promotion_status").val();
                }',
            ])
            ->dom("<'d-flex justify-content-end tw-py-2' p><'row scroll-container'<'col-sm-12 overflow-scroll' t>><'row'<'col-lg-12' <'tw-py-3 col-lg-12 d-flex flex-column flex-sm-row align-items-center justify-content-between tw-space-y-5 md:tw-space-y-0' ip>r>>")
            ->initComplete('function() {
                    $(".datatable-input").on("change",function () {
                        $("#promotion-list-table").DataTable().ajax.reload();
                    });
                    $("#subBtn").on("click",function () {
                        $("#promotion-list-table").DataTable().ajax.reload();
                    });
                    $("#filterBranch").on("click",function () {
                        $("#promotion-list-table").DataTable().ajax.reload();
                    });
                    $("#clearBtn").on("click",function () {
                        $("#name").val(null);
                        $("#start_date").val(null);
                        $("#end_date").val(null);
                        $("#promotion_status").val(null);
                        $("#promotion_status").change();
                        $("#promotion-list-table").DataTable().ajax.reload();
                    });
                    $("#promotion-list-table").on("click", ".delFunc", function(e) {
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
                    $("#promotion-list-table").on("change", ".change-status", function(e) {
                        var $this = $(this);
                        var id = $(this).data("id");
                        var form = $("#update-promotion-status-"+id);
                        var button_text = $this.val() == 1 ? "'.trans('messages.yes_deactive_it').'" : "'.trans('messages.yes_active_it').'";

                        Swal.fire({
                            title: "'.trans('messages.are_you_sure').'",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonText: button_text,
                            cancelButtonText: "'.trans('messages.cancel').'",
                        }).then(function(result) {
                            if (result.value) {
                                form.submit();
                            }else{
                                if($this.val() == 1){
                                    $this.prop("checked", true);
                                }else{
                                    $this.prop("checked", false);
                                }
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
            Column::make('name')->orderable(false),
            Column::make('start_date')->orderable(false),
            Column::make('end_date')->orderable(false),
            Column::make('promotion_status')->title('Status')->orderable(false),
            Column::make('action')->width('12%')->className('text-end')->title('')->orderable(false),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Promotion_' . date('YmdHis');
    }
}
