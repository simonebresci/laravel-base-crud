

@php
if (isset($edit) && !empty($edit)){
    // EDIT CASE
    $method = 'PUT';
    $url = route('beer.update', compact('beer'));
}else{
    // CREATE CASE
    $url = route('beer.store');
    $method = 'POST';
}
@endphp


<form class="form-horizontal text-left" action={{$url}}  method="post">
  @csrf
  @method($method)


  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-10">
      <input type="text" value="{{(isset($beer)?$beer->name:'')}}" class="form-control {{($errors->has('name')?'is-invalid':'')}}" id="name" name="name" placeholder="Enter name">
      @php
        if($errors->has('name')){
          echo '<span class=text-danger>'. $errors->first('name') . '</span>';
        }
      @endphp
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Type:</label>
    <div class="col-sm-10">
      <input type="text" value="{{(isset($beer)?$beer->type:'')}}" class="form-control {{($errors->has('type')?'is-invalid':'')}}" id="type" name="type" placeholder="Enter type">
      @php
        if($errors->has('type')){
          echo '<span class=text-danger>'. $errors->first('type') . '</span>';
        }
      @endphp
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Quantity(L):</label>
    <div class="col-sm-10">
      <input type="text" value="{{(isset($beer)?$beer->quantityL:'')}}" class="form-control {{($errors->has('quantityL')?'is-invalid':'')}}" id="quantityL" name="quantityL" placeholder="Enter quantity(L)">
      @php
        if($errors->has('quantityL')){
          echo '<span class=text-danger>'. $errors->first('quantityL') . '</span>';
        }
      @endphp
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Price:</label>
    <div class="col-sm-10">
      <input type="text" value="{{(isset($beer)?$beer->price:'')}}" class="form-control {{($errors->has('price')?'is-invalid':'')}}" id="price" name="price" placeholder="Enter price">
      @php
        if($errors->has('price')){
          echo '<span class=text-danger>'. $errors->first('price') . '</span>';
        }
      @endphp
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Description:</label>
    <div class="col-sm-10">
      <input type="text" value="{{(isset($beer)?$beer->description:'')}}" class="form-control {{($errors->has('description')?'is-invalid':'')}}" id="description" name="description" placeholder="Enter description">
      @php
        if($errors->has('description')){
          echo '<span class=text-danger>'. $errors->first('description') . '</span>';
        }
      @endphp
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Img Path:</label>
    <div class="col-sm-10">
      <input type="text" value="{{(isset($beer)?$beer->img_path:'')}}" class="form-control {{($errors->has('img_path')?'is-invalid':'')}}" id="img_path" name="img_path" placeholder="Enter img path">
      @php
        if($errors->has('img_path')){
          echo '<span class=text-danger>'. $errors->first('img_path') . '</span>';
        }
      @endphp
    </div>
  </div>


  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default btn-primary">Submit</button>
    </div>
  </div>

</form>
