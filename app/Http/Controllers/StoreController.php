<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\DropVote;

class StoreController extends Controller
{
    /**
     * Size chart reference data (Sesuai gambar Size Chart resmi TEASE DE AMOR)
     * Size 1: width 56 cm, length 74 cm
     * Size 2: width 59 cm, length 76 cm
     */
    public static function getSizeChart()
    {
        return [
            '1' => [
                'name' => 'Size 1',
                'width' => 56,
                'length' => 74,
                'sleeve' => 25,
                'weight_rec' => '45 - 65 kg',
                'height_rec' => '155 - 172 cm',
                'fit_desc' => 'Boxy Oversized Cut untuk postur standar & ramping'
            ],
            '2' => [
                'name' => 'Size 2',
                'width' => 59,
                'length' => 76,
                'sleeve' => 27,
                'weight_rec' => '65 - 85+ kg',
                'height_rec' => '170 - 185+ cm',
                'fit_desc' => 'Extra Baggy Oversized Cut untuk postur lebih tinggi & berisi'
            ],
        ];
    }

    /**
     * Homepage
     */
    public function index(Request $request)
    {
        $products = Product::where('is_featured', true)->orderBy('id', 'asc')->get();
        $sizeChart = self::getSizeChart();
        $votes = DropVote::all();

        return view('store.index', compact('products', 'sizeChart', 'votes'));
    }

    /**
     * Product Detail Page
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $relatedProducts = Product::where('id', '!=', $product->id)->get();
        $sizeChart = self::getSizeChart();

        return view('store.product', compact('product', 'relatedProducts', 'sizeChart'));
    }

    /**
     * Size Guide Page
     */
    public function sizeGuide()
    {
        $sizeChart = self::getSizeChart();
        return view('store.size-guide', compact('sizeChart'));
    }

    /**
     * Lookbook Page (Tunnel Walk & OOTD editorial)
     */
    public function lookbook()
    {
        return view('store.lookbook');
    }

    /**
     * Vote on Next Drop
     */
    public function vote(Request $request)
    {
        $optionKey = $request->input('option_key');
        $vote = DropVote::where('option_key', $optionKey)->first();

        if ($vote) {
            $vote->increment('votes_count');
            if ($request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'votes' => DropVote::all(),
                    'message' => 'Terima kasih atas voting kamu untuk koleksi TEASE DE AMOR berikutnya!'
                ]);
            }
            return back()->with('success', 'Voting kamu berhasil dicatat!');
        }

        if ($request->wantsJson()) {
            return response()->json(['success' => false, 'message' => 'Opsi tidak ditemukan.'], 404);
        }

        return back()->with('error', 'Opsi voting tidak valid.');
    }
}
