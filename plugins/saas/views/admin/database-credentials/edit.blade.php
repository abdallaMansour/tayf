@extends('core::base.layouts.master')
@section('title')
    {{ translate('Edit Database Credential') }}
@endsection
@section('main_content')
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header bg-white border-bottom2 pb-0">
                    <div class="post-head d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <div class="content">
                                <h4>{{ translate('Edit Database Credential') }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div>
                        <form action="{{ route('plugin.saas.database-credentials.update', $databaseCredential->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-row mb-20">
                                <div class="col-md-4">
                                    <label class="font-14 bold black">{{ translate('Database Name') }} <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="db_name" class="theme-input-style"
                                        value="{{ old('db_name', $databaseCredential->db_name) }}" placeholder="{{ translate('Enter database name') }}" required>
                                    @if ($errors->has('db_name'))
                                        <div class="invalid-input">{{ $errors->first('db_name') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-row mb-20">
                                <div class="col-md-4">
                                    <label class="font-14 bold black">{{ translate('Database User') }} <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="db_user" class="theme-input-style"
                                        value="{{ old('db_user', $databaseCredential->db_user) }}" placeholder="{{ translate('Enter database user') }}" required>
                                    @if ($errors->has('db_user'))
                                        <div class="invalid-input">{{ $errors->first('db_user') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-row mb-20">
                                <div class="col-md-4">
                                    <label class="font-14 bold black">{{ translate('Database Password') }} <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="db_password" class="theme-input-style"
                                        value="{{ old('db_password', $databaseCredential->db_password) }}" placeholder="{{ translate('Enter database password') }}" required>
                                    @if ($errors->has('db_password'))
                                        <div class="invalid-input">{{ $errors->first('db_password') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 text-right">
                                    <a href="{{ route('plugin.saas.database-credentials.index') }}" class="btn long btn-secondary mr-2">{{ translate('Cancel') }}</a>
                                    <button type="submit" class="btn long">{{ translate('Update') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
