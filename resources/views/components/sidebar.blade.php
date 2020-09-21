<!-- $attributes carry forward the id/class from the X class component -->
<div {{ $attributes->merge(['class' => 'text-xl']) }}>
    <h1>{{ $title }},Hello from sidebar component</h1>
    <h2>{{ $info }}</h2>
    <ul>
    @foreach ($list('4th_appended_item') as $item)
        <li> {{ $item }} </li>
    @endforeach
    </ul>

    <h3>{{ $x_title }}</h3>
    {{ $slot }}
</div>