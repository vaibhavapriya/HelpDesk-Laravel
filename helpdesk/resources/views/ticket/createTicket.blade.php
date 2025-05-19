@extends('components.layouts.app.client')
@section('content')
<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="card px-1 py-4">
        <form action="{{ route('tickets.store') }}" method="POST">
        @csrf
        @method('POST')
            <div class="card-body">
                <h6 class="information">Please provide following information about Anz CMK</h6>
                <div class="row mt-3">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="title" class="form-label">Title</label>
                            <div class="input-group"> <input class="form-control" type="text" placeholder="title"> </div>
                            <div class="invalid-feedback" id='title_error'></div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="priority" class="form-label">Priority</label>
                            <select class="form-select" id="priority" name="priority">
                            <option value="high">High</option>
                            <option value="medium">Medium</option>
                            <option value="low">Low</option>
                            </select>
                            <div class="invalid-feedback" id='priority_error'></div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row mt-3">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="topic" class="form-label">Topic</label>
                            <div class="input-group"> <input class="form-control" type="text" placeholder="topic"> </div>
                            <div class="invalid-feedback" id='topic_error'></div>
                        </div>
                    </div>
                </div> -->
                <div class="row mt-3">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="description" class="form-label">Description</label>
                            <div class="input-group"> <textarea class="form-control" placeholder="description"></textarea> </div>
                            <div class="invalid-feedback" id='description_error'></div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="attachment" class="form-label">Attachment</label>
                            <div class="input-group"><input class="form-control" type="file" id="attachment" name="attachment" accept="image/*"></div>

                        </div>
                    </div>
                </div>
                
                <div class=" d-flex flex-column text-center px-5 mt-3 mb-3"> <small class="agree-text">By Booking this appointment you agree to the</small> <a href="#" class="terms">Terms & Conditions</a> </div> <button class="btn btn-primary btn-block confirm-button">Confirm</button>
            </div>
        </form>
    </div>
</div>
@endsection
    
