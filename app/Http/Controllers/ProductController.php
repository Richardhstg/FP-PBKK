<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Brick\Math\BigInteger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function index()
    {
        $class = session('result');

        if (isset($class)) {
            $products = Product::where('name', $class)->get();
        } else {
            $products = Product::all();
        }
        return view('frontend.shop', compact('products'));
    }

    public function index_dashboard()
    {
        $class = session('result');

        if (isset($class)) {
            $products = Product::where('name', $class)->get();
        } else {
            $products = Product::all();
        }
        return view('dashboard.product_info', compact('products'));
    }

    public function single(string $id)
    {
        $product = Product::findOrFail($id);
        return view('frontend.single-product', compact('product'));
    }

    public function detectImage()
    {
        $file_name = session('file_name');

        if (!$file_name) {
            return back()->with('error', 'File tidak ditemukan di session.');
        }

        $image_path = public_path('uploads/' . $file_name);

        if (!file_exists($image_path)) {
            return back()->with('error', 'File gambar tidak ditemukan di server.');
        }

        $image_path = str_replace('\\', '/', $image_path);

        $script_path = str_replace('\\', '/', app_path('tes.py'));

        $command = escapeshellcmd("python " . escapeshellarg($script_path) . " " . escapeshellarg($image_path));

        $output = shell_exec($command);

        $result = trim($output);

        if (!$result) {
            return back()->with('error', 'Tidak ada hasil dari script Python.');
        }

        return redirect()->route('shop')->with('result', $result);
    }

    public function store_photo(Request $request)
    {
        $filePath = public_path('uploads');

        if ($request->hasfile('nama')) {
            $file = $request->file('nama');
            $file_name = time() . $file->getClientOriginalName();

            $file->move($filePath, $file_name);
        }

        return redirect()->route('detect')->with('file_name', $file_name);
    }

    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|string|max:255',
        ]);

        $query = $request->input('query');

        $products = Product::where('name', 'LIKE', "%{$query}%")->get();

        return view('frontend.shop', compact('products', 'query'));
    }


    public function create()
    {
        $title = "Add New Product";
        return view('dashboard.add_product', compact('title'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate(
            [
                'name' => 'required',
                'desc' => 'required',
                'price' => 'required|numeric',
                'image' => 'mimes:png,jpeg,jpg|max:2048',
            ]
        );

        $filePath = public_path('images');
        $insert = new Product();
        $insert->name = $request->name;
        $insert->description = $request->desc;
        $insert->price = $request->price;
        $insert->stock = 99;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $file_name = time() . $file->getClientOriginalName();

            $file->move($filePath, $file_name);
            $insert->image = $file_name;
        }

        $result = $insert->save();
        Session::flash('success', 'Prpduct berhasil ditambahkan');
        return redirect()->route('dashboard-product-info');
    }

    public function edit(string $id)
    {
        $title = "Update data Product";
        $edit = Product::findOrFail($id);
        return view('dashboard.add_product', compact('edit', 'title'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'name' => 'required',
                'desc' => 'required',
                'price' => 'required|numeric',
                'image' => 'mimes:png,jpeg,jpg|max:2048',
            ]
        );

        $update = Product::findOrFail($id);

        $update->name = $request->name;
        $update->description = $request->desc;
        $update->price = $request->price;
        $update->stock = 99;

        if ($request->hasfile('image')) {
            $filePath = public_path('images');
            $file = $request->file('image');
            $file_name = time() . $file->getClientOriginalName();
            $file->move($filePath, $file_name);
            // delete old image
            if (!is_null($update->image)) {
                $oldImage = public_path('images/' . $update->image);
                if (File::exists($oldImage)) {
                    unlink($oldImage);
                }
            }
            $update->image = $file_name;
        }

        $result = $update->save();
        Session::flash('success', 'Data berhasil diperbaharui');
        return redirect()->route('dashboard-product-info');
    }

    public function destroy(Request $request)
    {
        $data = Product::findOrFail($request->product_id);
        $data->delete();
        // delete photo if exists
        if (!is_null($data->image)) {
            $image = public_path('images/' . $data->image);
            if (File::exists($image)) {
                unlink($image);
            }
        }
        Session::flash('success', 'Product deleted successfully');
        return redirect()->route('dashboard-product-info');
    }
}
