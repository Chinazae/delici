<?php
namespace App\Http\Controllers;

use App\Models\Table;
use App\Models\TableCategory;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        $tables = Table::with('category')->get();
        return view('admin.tables.index', compact('tables'));
    }

    public function create()
    {
        $categories = TableCategory::all();
        return view('admin.tables.create', compact('categories'));
    }

    public function store(Request $request)
{
    $request->validate([
        'table_number' => 'required|unique:tables',
        'table_category_id' => 'required|exists:table_categories,id',
        'seating_capacity' => 'required|integer|min:1',
        'status' => 'required|in:available,reserved,out_of_service',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $data = $request->all();

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('uploads/tables'), $filename);
        $data['image'] = 'uploads/tables/' . $filename;
    }

    Table::create($data);
    return redirect()->route('tables.index')->with('success', 'Table added!');
}


    public function edit(Table $table)
    {
        $categories = TableCategory::all();
        return view('admin.tables.edit', compact('table', 'categories'));
    }

    public function update(Request $request, Table $table)
{
    $request->validate([
        'table_number' => 'required|unique:tables,table_number,'.$table->id,
        'table_category_id' => 'required|exists:table_categories,id',
        'seating_capacity' => 'required|integer|min:1',
        'status' => 'required|in:available,reserved,out_of_service',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $data = $request->all();

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('uploads/tables'), $filename);
        $data['image'] = 'uploads/tables/' . $filename;
    }

    $table->update($data);
    return redirect()->route('tables.index')->with('success', 'Table updated!');
}


    public function destroy(Table $table)
    {
        $table->delete();
        return redirect()->route('tables.index')->with('success', 'Table deleted!');
    }
}
