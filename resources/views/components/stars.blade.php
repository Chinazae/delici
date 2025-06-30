@props(['rating' => 0])

@for($i = 1; $i <= 5; $i++) @if($i <=$rating) <i class="bi bi-star-fill text-warning"></i>
    @else
    <i class="bi bi-star text-muted"></i>
    @endif
    @endfor
