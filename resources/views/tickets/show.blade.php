@extends('layouts.main')

@section('content')

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">AndyTech Company</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
                </button>
            </div>
            </div>
                <form action=""  method="Post">
                        {{  csrf_field() }}

                    <div class="form-group mb-3">
                        <label for="summary" class="form-label"> Summary </label>
                        <div class="input-group">
                            <input type="text" id="summary" name="summary" class="form-control" value=" {{ $ticket->summary }} "/>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for= "description" class="form-label"> Description </label>
                        <div class="input-group">
                            <input type="text" id="description" name="description" class="form-control" value=" {{ $ticket->description }} "/>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="status" class="form-label"> Status </label>
                        <div class="input-group">
                            <input type="text" id="status" name="status" class="form-control"/>
                        </div>
                    </div>


                    <button class="btn btn-primary" type="submit"> Add </button>



                </form>


        </main>
@endsection
