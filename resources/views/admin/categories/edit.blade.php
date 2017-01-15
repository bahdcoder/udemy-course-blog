@extends('layouts.app')

@section('content')

      @include('admin.includes.errors')

      <div class="panel panel-default">
            <div class="panel-heading">
                  Update category: {{ $category->name }}
            </div>

            <div class="panel-body">
                  <form action="{{ route('category.update', ['id' => $category->id]) }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                        </div>
                        <div class="form-group">
                              <div class="text-center">
                                    <button class="btn btn-success" type="submit">
                                          Update category
                                    </button>
                              </div>
                        </div>
                  </form>
            </div>
      </div>
@stop