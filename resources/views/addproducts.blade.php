@extends('layouts.main')

@section('main-section')

<div className='col-8'>
    <h1>Add Product</h1>
    <hr/>
  <form method="post">
    @csrf
    <div class="row">
    <div className='form-group col-6'>
        <label>Name</label>
        <input type="text" className='form-control' name="name"/>
    </div>
    <div className='form-group col-6'>
        <label>Price</label>
        <input type="text" className='form-control' name="price"/>
    </div>
    </div>
    <div className='form-group'>
        <label>Brand</label>
        <input type="text" className='form-control' name="brand" />
    </div>
    <div className='form-group'>
        <label>Image</label>
          <input type="file" className='form-control' accept="image/*" name="imageURL" />
    </div>
    <div className='form-group'>
        <label>Category</label>
        <select className='form-select'>
            <option option="select">----choose Categoy--------</option>
        </select>
    </div>
    <div className='form-group'>
        <label>countInStock</label>
        <input type="number" className='form-control' name="countInStock" />
    </div>
    <div className='form-group'>
        <label>Description</label>
        <textarea className='form-control' name="desc"></textarea>
    </div>
    <div class="d-grid gap-2">
      <button type="submit" name="" id="" class="btn btn-primary mt-2">Save Product</button>
    </div>
  </form>
</div>

@endsection