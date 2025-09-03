@extends('core::base.layouts.master')
@section('title')
    {{ translate('Database Credential Details') }}
@endsection
@section('main_content')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header bg-white border-bottom2 pb-0">
                    <div class="post-head d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <div class="content">
                                <h4>{{ translate('Database Credential Details') }}</h4>
                            </div>
                        </div>
                        <div class="d-flex">
                            <a href="{{ route('plugin.saas.database-credentials.edit', $databaseCredential->id) }}" class="btn btn-primary mr-2">
                                {{ translate('Edit') }}
                            </a>
                            <a href="{{ route('plugin.saas.database-credentials.index') }}" class="btn btn-secondary">
                                {{ translate('Back to List') }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-14 bold black">{{ translate('Database Name') }}</label>
                                <div class="form-control-plaintext">{{ $databaseCredential->db_name }}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-14 bold black">{{ translate('Database User') }}</label>
                                <div class="form-control-plaintext">{{ $databaseCredential->db_user }}</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-14 bold black">{{ translate('Database Password') }}</label>
                                <div class="form-control-plaintext">
                                    <span class="password-field" id="password-field">••••••••</span>
                                    <button type="button" class="btn btn-sm btn-outline-secondary ml-2" onclick="togglePassword()">
                                        <i class="fa fa-eye" id="toggle-icon"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-14 bold black">{{ translate('Status') }}</label>
                                <div class="form-control-plaintext">
                                    @if($databaseCredential->is_active)
                                        <span class="badge badge-success">{{ translate('Active') }}</span>
                                    @else
                                        <span class="badge badge-danger">{{ translate('Inactive') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-14 bold black">{{ translate('Created At') }}</label>
                                <div class="form-control-plaintext">{{ $databaseCredential->created_at->format('Y-m-d H:i:s') }}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-14 bold black">{{ translate('Updated At') }}</label>
                                <div class="form-control-plaintext">{{ $databaseCredential->updated_at->format('Y-m-d H:i:s') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_scripts')
<script type="application/javascript">
    function togglePassword() {
        const passwordField = document.getElementById('password-field');
        const toggleIcon = document.getElementById('toggle-icon');
        
        if (passwordField.textContent === '••••••••') {
            passwordField.textContent = '{{ $databaseCredential->db_password }}';
            toggleIcon.className = 'fa fa-eye-slash';
        } else {
            passwordField.textContent = '••••••••';
            toggleIcon.className = 'fa fa-eye';
        }
    }
</script>
@endsection
