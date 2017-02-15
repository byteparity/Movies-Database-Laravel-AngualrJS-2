<?php

namespace App\DataTables;

use App\Models\MoviePeoples;
use Form;
use Yajra\Datatables\Services\DataTable;

class MoviePeoplesDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'movie_peoples.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $moviePeoples = MoviePeoples::with(['movie', 'people', 'proffession']);

        return $this->applyScopes($moviePeoples);
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
            'movie_name' => ['name' => 'movie_id', 'data' => 'movie.title'],
            'people_name' => ['name' => 'people_id', 'data' => 'people.full_name'],
            'proffession_name' => ['name' => 'proffession_id', 'data' => 'proffession.proffession_type'],
            'name_in_movie' => ['name' => 'name_in_movie', 'data' => 'name_in_movie'],
            'character_in_movie' => ['name' => 'character_in_movie', 'data' => 'character_in_movie']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'moviePeoples';
    }
}
