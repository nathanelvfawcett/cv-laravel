<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PortfolioEntryController extends Controller
{
    public function portfolio(): View
    {
        $portfolios = DB::table('portfolio_entries')->get();
        return view('portfolio', ['portfolios' => $portfolios]);
    }

    public function project($pageTitle): View
    {
        $portfolios = DB::table('portfolio_entries')->where('page_id', $pageTitle)->get();
        return view('project', ['portfolios' => $portfolios]);
    }

}
