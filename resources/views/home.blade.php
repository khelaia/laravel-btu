@extends('layouts.app')

@push('scripts')
    <script src="/assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
@endpush

@section('content')
    <div class="pt-3">
        <h3>Quizzes</h3>
        <div class="pt-3">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                @forelse($quizzes as $quiz)
                    <tr>
                        <th scope="row">{{$quiz->id}}</th>
                        <td>{{$quiz->title}}</td>
                        <td><img style="height: 50px" src="{{$quiz->image}}" alt=""></td>
                        <td>
                            <span @class([
                                'badge text-bg-danger' => !$quiz->status,
                                'badge text-bg-success' => $quiz->status,
                            ])>{{$quiz->status ? 'Active': 'Inactive'}}</span>
                        </td>
                    </tr>
                @empty
                    Content not found
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
