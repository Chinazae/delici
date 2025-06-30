@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <h2>Edit Coupon</h2>

    <form method="POST" action="{{ route('coupons.update', $coupon->id) }}">
        @csrf
        @method('PATCH')

        <div class="mb-3">
            <label>Code</label>
            <input type="text" name="code" class="form-control" value="{{ $coupon->code }}" required>
        </div>

        <div class="mb-3">
            <label>Type</label>
            <select name="type" class="form-control" required>
                <option value="percentage" {{ $coupon->type == 'percentage' ? 'selected' : '' }}>Percentage</option>
                <option value="fixed" {{ $coupon->type == 'fixed' ? 'selected' : '' }}>Fixed Amount</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Value</label>
            <input type="number" name="value" class="form-control" value="{{ $coupon->value }}" required>
        </div>

        <div class="mb-3">
            <label>Expires At (optional)</label>
            <input type="date" name="expires_at" class="form-control" value="{{ $coupon->expires_at }}">
        </div>

        <div class="mb-3">
            <label>Usage Limit (optional)</label>
            <input type="number" name="usage_limit" class="form-control" value="{{ $coupon->usage_limit }}">
        </div>

        <button class="btn btn-success">Update Coupon</button>
    </form>
</div>
@endsection
