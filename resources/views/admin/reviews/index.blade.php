@extends('layouts.admin')

@section('title', 'Manage Reviews')

@section('content')
<div class="container py-4">
    <h2>All Reviews</h2>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>User</th>
                <th>Table</th>
                <th>Overall</th>
                <th>Food</th>
                <th>Ambience</th>
                <th>Service</th>
                <th>Comments</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reviews as $review)
            <tr>
                <td>{{ $review->user->name ?? 'N/A' }}</td>
                <td>{{ $review->reservation->table->table_number ?? 'N/A' }}</td>
                <td>
                    @for($i = 1; $i <= 5; $i++) @if($i <=$review->overall_rating)
                        <i class="bi bi-star-fill text-warning"></i>
                        @else
                        <i class="bi bi-star text-muted"></i>
                        @endif
                        @endfor
                </td>
                <td>
                    @for($i = 1; $i <= 5; $i++) @if($i <=$review->food_rating)
                        <i class="bi bi-star-fill text-warning"></i>
                        @else
                        <i class="bi bi-star text-muted"></i>
                        @endif
                        @endfor
                </td>
                <td>
                    @for($i = 1; $i <= 5; $i++) @if($i <=$review->ambience_rating)
                        <i class="bi bi-star-fill text-warning"></i>
                        @else
                        <i class="bi bi-star text-muted"></i>
                        @endif
                        @endfor
                </td>
                <td>
                    @for($i = 1; $i <= 5; $i++) @if($i <=$review->service_rating)
                        <i class="bi bi-star-fill text-warning"></i>
                        @else
                        <i class="bi bi-star text-muted"></i>
                        @endif
                        @endfor
                </td>
                <td>{{ $review->comments }}</td>
                <td>
                    <form action="{{ route('admin.reviews.updateStatus', $review) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <select name="status" onchange="this.form.submit()">
                            <option value="pending" {{ $review->status == 'pending' ? 'selected' : '' }}>Pending
                            </option>
                            <option value="approved" {{ $review->status == 'approved' ? 'selected' : '' }}>Approved
                            </option>
                            <option value="rejected" {{ $review->status == 'rejected' ? 'selected' : '' }}>Rejected
                            </option>
                        </select>
                    </form>
                </td>
                <td>
                    <form action="{{ route('admin.reviews.destroy', $review) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
