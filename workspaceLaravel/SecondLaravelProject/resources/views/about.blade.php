@for($i = 0; $i < 10; $i++)
<h2>Number {{ $i + 1 }}</h2>
@endfor

@foreach ($names as $item)
    <h2>{{ $item }}</h2>
@endforeach

@forelse ($names as $item)
    <h2>The name is {{ $item }}</h2>
@empty
    <h2>Nothing here</h2>
@endforelse

{{ $i = 0 }}
@while ($i < 10)
    {{ $i }}
    {{ $i++ }}
@endwhile