@if(session()->has('message'))
<div class="alert alert-success">
    {{session()->get('message')}}
</div>
<div class="alert alert-denger">
    {{session()->get('error')}}
</div>
@endif


