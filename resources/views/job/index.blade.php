<div>
    <h1>Job Index</h1>
    <h2>Name: {{ $name }}</h2>
    @foreach ($jobs as $job)
        <h2>{{ $job['title'] }}</h2>
        <p>{{ $job['salary'] }}</p>
        <p>{{ $job['description'] }}</p>
    @endforeach
</div>
