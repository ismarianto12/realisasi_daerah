@extends('layouts.template') 
@section('title','Page ')
@section('content')   
<body style="margin:0px;padding:0px;overflow:hidden">
    <iframe src="{{ Url($page) }}" frameborder="0" style="overflow:hidden;height:600px;width:100%" height="500px" width="100%"></iframe>
</body>
@endsection 


