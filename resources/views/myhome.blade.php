@extends('layouts.myapp')

@section("content")
    <h3>MyHome</h3>
    <div class="container chat_window">
        <div class="row">
            <div class="col-9 card chat_table">
                <div class="card-body">
                    @for ($i = 0; $i < 10; $i++)
                        <div class="d-flex justify-content-end p-1">
                            <div class="card bg-dark text-white">
                                <div class="card-body">Hello World!!!!!!!!</div>
                            </div>
                        </div>
                    @endfor
                </div>
                <div class = "message_part card-footer">
                    <form action="">
                        @csrf
                        <div class="input-group">
                            <textarea name="" class="form-control" placeholder="Type your message..."></textarea>
                            <div class = "input-group-append">
                               <button type = "submit" class = "btn btn-primary">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-3 users_table"></div>
        </div>
    </div>

@endsection