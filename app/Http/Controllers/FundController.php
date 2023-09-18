<?php

namespace App\Http\Controllers;

use App\Models\Fund;
use Illuminate\Http\Request;
use App\Models\FundAdministrator;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\JoinClause;

class FundController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fonduri = Fund::all();
        return response()->json($fonduri);
    }

    /**
     * Display a listing of the resource.
     */
    public function allinfo()
    {


        $query = "SELECT funds.*, fund_administrators.* FROM
        funds LEFT JOIN
        fund_administrators ON funds.fund_administrator_id = fund_administrators.id;";

        $fonduri = DB::select($query);
        return response()->json($fonduri);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $fond = Fund::find($id);
        return response()->json($fond);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fund $fund)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fund $fund)
    {
        //
    }
}
