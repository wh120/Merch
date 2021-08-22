<div>
  <form action="{{route('Category.store')}}" method="post" enctype="multipart/form-data">
  	@csrf
  <label for="CategoryName">CategoryName:</label>
  <input type="text" name="CategoryName">
  <br><br>
  <select name="id_Exhibtion">
  	@foreach($adminex as $exhibtioins)
    <option name="id_Exhibtion">{{$exhibtioins->id}}.{{ $exhibtioins->Exhibition_Name }}</option>
    @endforeach                                  
  </select>
  
  <input type="file" name="image" class="form-control" multiple accept=".png, .jpg, .jpeg" style="width: auto;height: auto;margin: 0px;padding: 121px 0px 85px 118.1px;"
                />

  <input type="submit" value="Submit">
</form>
</div>