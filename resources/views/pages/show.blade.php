@include('layouts.main')
<h1> {{ $mode }} Users Detail </h1>
<table class="table table-striped table-bordered">
    <tr>
        <td>Name</td>
        <td>{{ $user->name }}</td>
    </tr>
    <tr>
        <td>Gender</td>
        <td>{{  $user->gender }}</td>
    </tr>
    <tr>
        <td>Description</td>
        <td>{{ $user->description }}</td>
    </tr>
</table>