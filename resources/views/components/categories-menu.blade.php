<div class="card mt-3">
  <div class="card-header" style="background-color: #FDB819; font-weight: 800;"><i class="fa fa-th-large"></i> Categories</div>
  <div class="card-body">
    <ul class="nav">
      @foreach($categories as $category)
      <li class="dropend" ><a href="" class="dropdown-toggle" data-bs-toggle="dropdown" id="dropdownMenu-{{$category->id}}"> {{$category->name}}</a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu-{{$category->id}}">
          @foreach($category->subCategories as $subCategory)
          <li><a href="" class="dropdown-item">{{$subCategory->name}}</a></li>
          @endforeach
        </ul>
      </li>
      @endforeach
    </ul>
  </div>
</div>