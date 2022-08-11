@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{$contact->your_name}}
                    {{$contact->title}}
                    {{$contact->email}}
                    {{$contact->url}}
                    {{$age}}
                    {{$gender}}
                    {{$contact->contact}}
                    <form method="GET" action="{{ route('contact.edit', ['id' => $contact->id]) }}">
                        @csrf

                        <input type="submit" class="btn btn-primary" name="btn_confirm" value="変更する">
                    </form>
                    <form method="POST" action="{{ route('contact.destory', ['id' => $contact->id]) }}" id="delete_{{$contact->id}}">
                        @csrf
                        <a href="#" class="btn btn-danger" data-id="{{$contact->id}}" onclick="deletePost(this);">削除する</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    function deletePost(e) {
        'use strict';
        if(confirm('本当に削除しますか')){
            document.getElementById('delete_' + e.dataset.id).submit();
        }
    }

</script>

@endsection
