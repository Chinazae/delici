@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <h2>Create Coupon</h2>

    <form method="POST" action="{{ route('coupons.store') }}">
        @csrf

        <div class="mb-3">
            <label>Code</label>
            <input type="text" name="code" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Type</label>
            <select name="type" class="form-control" required>
                <option value="percentage">Percentage</option>
                <option value="fixed">Fixed Amount</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Value</label>
            <input type="number" name="value" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Expires At (optional)</label>
            <input type="date" name="expires_at" class="form-control">
        </div>

        <div class="mb-3">
            <label>Usage Limit (optional)</label>
            <input type="number" name="usage_limit" class="form-control">
        </div>

        <button class="btn btn-success">Create Coupon</button>
    </form>
</div>
@endsection
