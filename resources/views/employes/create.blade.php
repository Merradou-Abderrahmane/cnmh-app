@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="col-md-12 d-flex justify-content-center">
            <!-- general form elements -->
            <div class="card card-primary card-create">
              <div class="card-header">
                <h3 class="card-title"> @lang('crud.create') @lang('models/employes.singular')</h3>
              </div>
            {!! Form::open(['route' => 'employes.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('employes.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('employes.index') }}" class="btn btn-default"> @lang('crud.cancel') </a>
            </div>

            {!! Form::close() !!}

        </div>
        </div>
    </div>
@endsection
