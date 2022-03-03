


<a href="{{route('admin.create')}}"><br>Create</a> <br>
<a href="{{route('admin.update')}}"><br>Update</a> <br>
<a href="{{route('admin.delete')}}"><br>Delete</a> <br>
<br/>


@foreach($chap as $ch)
    <div style="width: 250px; float:left">
        <img src="assets/images/anhtruyen/{{$ch->ANHTRUYEN}}" alt="" style="width:150px">
        <p href="#" style="max-width: 100px;">{{$ch->TENTRUYEN}}</p>
    </div>
    
@endforeach

