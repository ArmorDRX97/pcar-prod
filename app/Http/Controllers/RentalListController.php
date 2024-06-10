<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Rental;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class RentalListController extends AppBaseController
{
    public function index(Request $request)
    {
        $status = $request->query('status');

        $query = Rental::query();

        if ($status) {
            $query->where('status', $status);
        }

        $rentals = $query->orderByDesc('id')->paginate(10);;
        return view('rental.index', compact('rentals'));
    }

    public function updateStatus(Request $request, $id)
    {
        $validatedData = $request->validate([
            'status' => 'required|in:new,in_progress,canceled,done',
        ]);

        $rentalRequest = Rental::findOrFail($id);
        $rentalRequest->update($validatedData);

        return redirect()->back()->with('success', 'Status updated successfully.');
    }
    public function destroy($id)
    {
        $rental = Rental::findOrFail($id);

        $rental->delete();

        return '\'success\', \'Status updated successfully.\'';
    }

}
