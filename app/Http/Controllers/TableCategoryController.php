<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\TableCategory;
use Illuminate\Http\Request;

class TableCategoryController extends Controller
{
    public function index()
    {
        $categories = TableCategory::all();
        return view('admin.table-categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.table-categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        TableCategory::create($request->all());
        return redirect()->route('table-categories.index')->with('success', 'Category added successfully!');
    }

    public function edit(TableCategory $tableCategory)
    {
        return view('admin.table-categories.edit', compact('tableCategory'));
    }

    public function update(Request $request, TableCategory $tableCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $tableCategory->update($request->all());
        return redirect()->route('table-categories.index')->with('success', 'Category updated successfully!');
    }

    public function destroy(TableCategory $tableCategory)
    {
        $tableCategory->delete();
        return redirect()->route('table-categories.index')->with('success', 'Category deleted successfully!');
    }
}
