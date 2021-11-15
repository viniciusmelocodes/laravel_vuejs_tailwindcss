<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use LaravelVueGoodTable\Columns\Number;
use LaravelVueGoodTable\Columns\Text;
use LaravelVueGoodTable\InteractsWithVueGoodTable;

class UsersController extends Controller
{
    use InteractsWithVueGoodTable;

    /**
     * Get the query builder
     *
     * @param Request $request
     *
     * @return Illuminate\Database\Eloquent\Builder
     */
    protected function getQuery(Request $request)
    {
        return User::query();
    }

    /**
     * Get the columns displayed in the table
     *
     * @return array
     */
    protected function getColumns(): array
    {
        return [
            Number::make('ID')
                ->sortable(),

            Text::make('Name', 'name')
                ->searchable(),

            Text::make('E-mail', 'email')
                ->searchable(),
        ];
    }
}
