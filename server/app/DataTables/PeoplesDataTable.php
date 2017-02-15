<?php

namespace App\DataTables;

use App\Models\Peoples;
use Form;
use Carbon\Carbon; 
use Yajra\Datatables\Services\DataTable;

class PeoplesDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'peoples.datatables_actions')
            ->editColumn('born_date', function($data){
                $bornAt = new Carbon($data->born_date);
                return $bornAt->format('Y-m-d');
            })
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $peoples = Peoples::query();

        return $this->applyScopes($peoples);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->addAction(['width' => '14%'])
            ->ajax('')
            ->parameters([
                'dom' => 'Bfrtip',
                'scrollX' => false,
                'buttons' => [
                    'print',
                    'reset',
                    'reload',
                    [
                         'extend'  => 'collection',
                         'text'    => '<i class="fa fa-download"></i> Export',
                         'buttons' => [
                             'csv',
                             'excel',
                             'pdf',
                         ],
                    ],
                    'colvis'
                ]
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        return [
            'first_name' => ['name' => 'first_name', 'data' => 'first_name'],
            'last_name' => ['name' => 'last_name', 'data' => 'last_name'],
            'born_date' => ['name' => 'born_date', 'data' => 'born_date']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'peoples';
    }
}
