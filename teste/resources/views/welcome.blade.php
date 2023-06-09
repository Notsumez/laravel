<!-- O extends é como se fosse o "include" do php,  -->
@extends('layouts.main')

@section('title', 'welcome')

@section('content')
<h1>Algum Titulo</h1>    
<!-- O Laravel tem suas próprias estruturas, como if, for, etc... -->
@if(10 > 5)
    <p>A condição é true</p>
@endif

<p>{{ $nome }}</p>

@if($nome == "Pedro")
    <p>O nome é pedro</p>
@elseif($nome == "Andrey")
    <p>O nome é {{ $nome }} e ele tem {{ $idade }} anos</p>
@else 
    <p>O nome não é Pedro</p>
@endif

@endsection