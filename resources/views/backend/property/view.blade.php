@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('add.property') }}" class="btn btn-inverse-info"> Add Property Type </a>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Property Type All </h6>

                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Sl </th>
                                        <th>Image </th>
                                        <th>Name </th>
                                        <th>Property Type </th>
                                        <th>Status Type </th>
                                        <th>City </th>
                                        <th>Status </th>
                                        <th>Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($properties as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img src="{{ asset($item->property_thambnail) }}"
                                                    style="width: 70px; height:40px" alt="">
                                            </td>
                                            <td>{{ Str::limit($item->property_name, 50, '...') }}</td>
                                            <td>{{ $item['type']['type_name'] }}</td>
                                            <td>{{ $item->property_status }}</td>
                                            <td>{{ $item->city }}</td>
                                            <td>
                                                @if ($item->status == 1)
                                                    <span class="badge rounded-pill bg-success">Active</span>
                                                @else
                                                    <span class="badge rounded-pill bg-danger">InActive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('property.details', $item->id) }}"
                                                    class="btn btn-inverse-warning">
                                                    <i data-feather="eye"></i>
                                                </a>

                                                <a href="{{ route('edit.property', $item->id) }}"
                                                    class="btn btn-inverse-warning">
                                                    <i data-feather="edit"></i>
                                                </a>

                                                <a href="{{ route('delete.property', $item->id) }}"
                                                    class="btn btn-inverse-danger" id="delete">
                                                    <i data-feather="trash-2"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
