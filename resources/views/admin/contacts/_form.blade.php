
<h3> Criar Contato</h3>

<hr style="border: solid #ddd; border-width: 1px 0 0; clear: both; margin: 22px 0 21px; height: 0;">

<div class="form-group">
    {!! Form::label('Name', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control', 'placeholder'=>"Nome do contato"]) !!}
</div>

<div class="form-group">
    {!! Form::label('Conta', 'Nome da Conta:') !!}
    {!! Form::select('client_id', $clients, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Titulo', 'Título do Contato:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Email', 'E-mail:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Telefone', 'Telefone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Celular', 'Celular:') !!}
    {!! Form::text('celular', null, ['class' => 'form-control']) !!}
</div>




<hr style="border: solid #ddd; border-width: 1px 0 0; clear: both; margin: 22px 0 21px; height: 0;">

