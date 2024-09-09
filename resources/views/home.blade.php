@include('layout')
@section('content')
<h1>home page is here</h1>
<!-- <div id="carouselId" class="carouselId slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
        <li data-target="#carouselId" data-slide-to="1"></li>
        <li data-target="#carouselId" data-slide-to="2"></li>
    </ol>
</div> -->
@stop
<button>login</button>
<style>
    h1{
        padding: 50px;
    }
</style>
<script>
    $(document).ready(function(){
        $('button').click(function(){
            alert("all set");
        })
    })
</script>
