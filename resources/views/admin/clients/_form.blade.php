{!! Form::hidden('atendente', $nome, ['class' => 'form-control']) !!}
<h3> Criar Conta</h3>

<hr style="border: solid #ddd; border-width: 1px 0 0; clear: both; margin: 22px 0 21px; height: 0;">

<div class="form-group">
    {!! Form::label('Name', 'Nome da conta:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>"Nome da conta"]) !!}
</div>

<div class="form-group">
    {!! Form::label('Tipo', 'Tipo:') !!}
    {!! Form::select('qualification[name]', $list_status,null, ['class' => 'form-control', 'placeholder'=>"Tipo"]) !!}
</div>

<div class="form-group">
    {!! Form::label('Sector', 'Setor:') !!}
    {!! Form::select('sector', $list_sector,null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Description', 'Descrição:') !!}
    {!! Form::textarea('description',null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Phone', 'Telefone:') !!}
    {!! Form::text('phone[number2]', null, ['class' => 'form-control', 'placeholder'=>"Telefone"]) !!}
</div>

<div class="form-group">
    {!! Form::label('Phone', 'Celular:') !!}
    {!! Form::text('phone[number]', null, ['class' => 'form-control', 'placeholder'=>"Telefone"]) !!}
</div>

<div class="form-group">
    {!! Form::label('Email', 'Email:') !!}
    {!! Form::text('email[email]', null, ['class' => 'form-control', 'placeholder'=>"Email Address"]) !!}
</div>

<hr style="border: solid #ddd; border-width: 1px 0 0; clear: both; margin: 22px 0 21px; height: 0;">

<h4> Informações de endereço</h4>

<div class="form-group">
    {!! Form::label('CEP', 'CEP:') !!}
    {!! Form::text('address[zipcode]', null, ['class' => 'form-control', 'placeholder'=>"CEP"]) !!}
</div>

<div class="form-group">
    {!! Form::label('State', 'Estado:') !!}
    {!! Form::select('address[state]', $list_state,null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('City', 'Cidade:') !!}
    {!! Form::text('address[city]', null, ['class' => 'form-control', 'placeholder'=>"Cidade"]) !!}
</div>


<div class="form-group">
    {!! Form::label('District', 'Bairro:') !!}
    {!! Form::text('address[district]', null, ['class' => 'form-control', 'placeholder'=>"Bairro"]) !!}
</div>

<div class="form-group">
    {!! Form::label('Street', 'Rua:') !!}
    {!! Form::text('address[street]', null, ['class' => 'form-control', 'placeholder'=>"Rua"]) !!}
</div>

<div class="form-group">
    {!! Form::label('Number', 'Número:') !!}
    {!! Form::text('address[number]', null, ['class' => 'form-control', 'placeholder'=>"Número"]) !!}
</div>

<div class="form-group">
    {!! Form::label('Complement', 'Complemento:') !!}
    {!! Form::text('address[complement]', null, ['class' => 'form-control', 'placeholder'=>"Complemento"]) !!}
</div>





