@extends('layouts.app')

@section('htmlheader_title')
    Users
@endsection

@section('contentheader_title')
    Users
@endsection

@section('contentheader_description')
    List of users
@endsection

@section('main-content')
    <table id="user-list" class="display nowrap dataTable dtr-inline" cellspacing="0" width="100%" role="grid"
           aria-describedby="example_info" style="width: 100%;">
        <thead>
        <tr role="row">
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        </thead>
    </table>
@endsection

@push('scripts')
<script type="text/javascript">
    $(function () {
        $("#user-list").DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('users.ajax') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'created_at', name: 'created_at' },
                { data: 'updated_at', name: 'updated_at' }
            ],
            order: [[ 4, "desc" ]] // order by updated_at desc
        });
    });
</script>
@endpush