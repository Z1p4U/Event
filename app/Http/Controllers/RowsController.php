<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRowsRequest;
use App\Http\Requests\UpdateRowsRequest;
use App\Models\Rows;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RowsController extends Controller
{
    public function index()
    {
        $item = Rows::searchQuery()
            ->sortingQuery()
            ->paginationQuery();

        try {
            return $this->success("Item List", $item);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    public function toggle($id)
    {
        $seat = Rows::findOrFail($id);

        $seat->status = !$seat->status;

        $seat->save();

        return response()->json(['message' => 'Seat marked as occupied'], 200);
    }
}
