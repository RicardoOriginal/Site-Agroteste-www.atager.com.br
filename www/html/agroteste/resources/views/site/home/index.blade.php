@extends('site.templates.template1')

@section('content')

<h1>Home page do site!</h1>
{{$xss}}

@if( $var1 == '165654' )
    <p>É igual</p>
@else
    <p>É diferente</p>
@endif

@unless($var1 == 1234)
    <p>Não é igual</p>
@endunless

@for( $i = 0; $i < 10; $i++)
    <p>for: {{$i}}</p>
@endfor

@foreach($arrayData as $array)
    <p>foreach: {{$array}}</p>
@endforeach

{{--
@if( count($arrayData) > 0)
    @foreach($arrayData as $array)
        <p>foreach: {{$array}}</p>
    @endforeach
@else
    <p>Não existe itens para serem impressos</p>
@endif
--}}

@forelse($arrayData as $array)
    <p>foreach: {{$array}}</p>
@empty
    <p>Não existem itens para serem impressos</p>
@endforelse

@include('site.includes.sidebar', compact($var1))
    
@endsection

@push('scripts')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
          crossorigin="anonymous">
@endpush