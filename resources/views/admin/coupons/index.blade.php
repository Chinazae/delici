@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <h2>Coupons</h2>

    <a href="{{ route('coupons.create') }}" class="btn btn-primary mb-3">Create New Coupon</a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Code</th>
                <th>Type</th>
                <th>Value</th>
                <th>Expires At</th>
                <th>Usage Limit</th>
                <th>Used Count</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($coupons as $coupon)
            <tr>
                <td>{{ $coupon->code }}</td>
                <td>{{ ucfirst($coupon->type) }}</td>
                <td>
                    @if($coupon->type == 'percentage')
                    {{ $coupon->value }}%
                    @else
                    ₦{{ number_format($coupon->value, 2) }}
                    @endif
                </td>
                <td>{{ $coupon->expires_at ?? 'N/A' }}</td>
                <td>{{ $coupon->usage_limit ?? 'Unlimited' }}</td>
                <td>{{ $coupon->used_count }}</td>
                <td>
                    <a href="{{ route('coupons.edit', $coupon->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('coupons.destroy', $coupon->id) }}" method="POST"
                        style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger"
                            onclick="return confirm('Delete this coupon?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
