<h3> Criar Oportunidade</h3>

<hr style="border: solid #ddd; border-width: 1px 0 0; clear: both; margin: 22px 0 21px; height: 0;">

<div class="form-group">
    {!! Form::label('Oportunidade', 'Nome da Oportunidade:') !!}
    {!! Form::text('name',null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Conta', 'Nome da Conta:') !!}
    {!! Form::select('client_id', $clients, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Type', 'Tipo:') !!}
    {!! Form::select('type', $list_type,null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Status', 'Fase:') !!}
    {!! Form::select('fase', $list_status,null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('date', 'Data de Fechamento:') !!}
    {!! Form::text('datefinal', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Price', 'Valor:') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Loss', 'Razão pela perda:') !!}
    {!! Form::select('loss', $list_loss,null, ['class' => 'form-control']) !!}
</div>

<hr style="border: solid #ddd; border-width: 1px 0 0; clear: both; margin: 22px 0 21px; height: 0;">

<h3> Informações adicionais </h3>

<div class="form-group">
    {!! Form::label('Etapa', 'Próxima Etapa:') !!}
    {!! Form::text('next', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Descrição', 'Próxima Etapa:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<hr style="border: solid #ddd; border-width: 1px 0 0; clear: both; margin: 22px 0 21px; height: 0;">

<h3> Informações do Sistema </h3>

<h5> Criado por: </h5>
<h5> Última modificação feita por: </h5>

