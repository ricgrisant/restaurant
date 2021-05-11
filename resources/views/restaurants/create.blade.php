@extends('layouts.layout')

@section('restaurantDetails')
    <div class="container">
        <div class="row">
            <div class="restaurants">
                <p>Create a New Restaurant</p>
            </div>
        </div>
        <div class="row">
            <div class="mt-5 d-flex justify-content-center">
                <form action="/restaurants" method="POST">
                  @csrf
                    <div class="row mb-3">
                      <label for="inputName" class="col-12 col-form-label">Name</label>
                      <div class="col-12">
                        <input type="text" name="name" class="form-control" id="inputName">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputEmail" class="col-12 col-form-label">Email</label>
                      <div class="col-12">
                        <input type="email" name="email" class="form-control" id="inputEmail">
                      </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPhone" class="col-12 col-form-label">Phone</label>
                        <div class="col-12">
                          <input type="text" name="phone" class="form-control" id="inputPhone">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputCategory" class="col-12 col-form-label">Category</label>
                        <div class="col-12">
                            <select name="category" class="form-select">
                              <option value="" disabled selected>Select one category</option>
                              <option value="Pizza">Pizza</option>
                              <option value="Hamburgers">Hamburgers</option>
                              <option value="Fried Chicken">Fried Chicken</option>
                              <option value="Mexican">Mexican</option>
                              <option value="Latina">Latina</option>
                              <option value="Chinese">Chinese</option>
                          </select>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="d-flex justify-content-end">
                          <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                      </div> 
                </form>
            </div>
        </div>
    </div>
@endsection