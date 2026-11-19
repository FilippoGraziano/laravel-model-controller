@props(['percentualVote' => 0])

<div class="card">

    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <h6 class="card-subtitle text-body-secondary mb-4">{{ $nationality }}</h6>

        <span class="date d-block">Date: {{ str_replace('-', '/', $date) }}</span>
    </div>

    <div class="card-footer">
        Vote:
        <div class="progress" role="progressbar" aria-valuenow="{{ $percentualVote }}" aria-valuemin="0" aria-valuemax="100" style="height: 15px">
            <div class="progress-bar" style="width: {{ $percentualVote }}%">{{ $vote }}</div>
        </div>
    </div>

</div>
