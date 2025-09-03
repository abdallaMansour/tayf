@extends('core::base.layouts.master')
@section('title')
    {{ translate('Database Credentials') }}
@endsection
@section('custom_css')
    @include('core::base.includes.data_table.css')
@endsection
@section('main_content')
    <div class="row">
        <!-- Database Credentials List-->
        <div class="col-md-12">
            <div class="card mb-30">
                <div class="card-header bg-white border-bottom2">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="font-20">{{ translate('Database Credentials') }}</h4>
                        <div class="d-flex flex-wrap">
                            <a href="{{ route('plugin.saas.database-credentials.create') }}"
                                class="btn long">{{ translate('Add Database Credential') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="hoverable text-nowrap border-top2 " id="database_credentials_table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ translate('Database Name') }}</th>
                                <th>{{ translate('Database User') }}</th>
                                <th>{{ translate('Database Password') }}</th>
                                <th>{{ translate('Status') }}</th>
                                <th>{{ translate('Created At') }}</th>
                                <th>{{ translate('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $key = 1;
                            @endphp
                            @foreach ($credentials as $credential)
                                <tr>
                                    <td>{{ $key }}</td>
                                    <td>{{ $credential->db_name }}</td>
                                    <td>{{ $credential->db_user }}</td>
                                    <td>{{ $credential->db_password }}</td>
                                    <td>
                                        @if ($credential->is_active)
                                            <span class="badge badge-success">{{ translate('Active') }}</span>
                                        @else
                                            <span class="badge badge-danger">{{ translate('Inactive') }}</span>
                                        @endif
                                    </td>
                                    <td>{{ $credential->created_at->format('Y-m-d H:i') }}</td>
                                    <td>
                                        <div class="dropdown-button">
                                            <a href="#" class="d-flex align-items-center" data-toggle="dropdown">
                                                <div class="menu-icon style--two mr-0">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="{{ route('plugin.saas.database-credentials.show', $credential->id) }}">View</a>
                                                <a href="{{ route('plugin.saas.database-credentials.edit', $credential->id) }}">Edit</a>
                                                <a href="#" onclick="deleteConfirmation('{{ $credential->id }}')">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @php
                                    $key++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Database Credentials List-->

        <!--Delete Modal-->
        <div id="delete-modal" class="delete-modal modal fade show" aria-modal="true">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title h6">{{ translate('Delete Confirmation') }}</h4>
                    </div>
                    <div class="modal-body text-center">
                        <p class="mt-1">{{ translate('Are you sure to delete this database credential') }}?</p>
                        <form method="POST" id="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn long mt-2 btn-danger"
                                data-dismiss="modal">{{ translate('Cancel') }}</button>
                            <button type="submit" class="btn long mt-2">{{ translate('Delete') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Delete Modal-->
    </div>
@endsection
@section('custom_scripts')
    @include('core::base.includes.data_table.script')
    <script type="application/javascript">
       (function($) {
            "use strict";
            $("#database_credentials_table").DataTable();
        })(jQuery);    

        /**
         * show delete confirmation modal
         */
        function deleteConfirmation(credential_id) {
            "use strict";
            $("#delete-form").attr('action', "{{ route('plugin.saas.database-credentials.destroy', '') }}/" + credential_id);
            $('#delete-modal').modal('show');
        }
</script>
@endsection
