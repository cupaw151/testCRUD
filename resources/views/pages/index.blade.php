@include('layouts.main')
<div class="col-xs-6">
    <a href="{{ URL::action('PagesController@create') }}" class="btn btn-info">
        Create Data
    </a>
</div>
@if($user)
    <table class="table table-striped table-bordered">
        <tr>
            <td>Name</td>
            <td>Gender</td>
            <td>Description</td>
            <td>Action</td>
        </tr>
    @foreach($user as $users)
        <tr>
            <td>{{ $users->name }}</td>
            <td>{{ $users->gender }}</td>
            <td>{{ $users->description }}</td>
            <td>
                <a href="{{ URL::action('PagesController@edit', $users->id) }}" class="btn btn-info">
                    Update
                </a>
                {!! Form::open([
                                'method' => 'DELETE',
                                'action' => ['PagesController@destroy', $users->id],
                            ])
                !!}
                <button type="submit" class="btn btn-danger">
                    Delete
                </button>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>
@endif