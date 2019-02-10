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

                    <form action="">
                          <div class="form=group">
                                <label>Ahora estoy pensando en:</label>
                                <input type="text" name="thought" class="form-control">
                          </div>
                          <button type="submit" class="btn btn-primary">
                              Enviar pensamiento
                          </button>
                    </form>

                </div>
            </div>

          <div class="card">
                <div class="card-header">content</div>

                <div class="card-body">
                        <p>Some migration operations are destructive, which means they may
                         cause you to lose data. In order to protect you from running these
                          commands against your production database, you will be prompted for
                          confirmation before the commands are executed. To force the commands
                          to run without a prompt, use the --force flag:

                 </p>
                </div>
                <div class="car-footer">
                    <button class="btn btn-default">
                        Editar
                    </button>
                    <button class="btn btn-danger">
                         Edimilar
                    </button>
                </div>
            </div>
            <div>
                            <cuong></cuong>

            </div>
    </div>
</div>
@endsection
