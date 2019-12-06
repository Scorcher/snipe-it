@php $default = (!isset($default) || !in_array($default, array('user', 'asset', 'location'))) ? 'asset' : $default;  @endphp
<div class="form-group" id="assignto_selector"{!!  (isset($style)) ? ' style="'.e($style).'"' : ''  !!}>
    {{ Form::label('name', trans('admin/hardware/form.checkout_to'), array('class' => 'col-md-3 control-label')) }}
    <div class="col-md-8">
        <div class="btn-group" data-toggle="buttons">
            @if ((isset($user_select)) && ($user_select!='false'))
            <label class="btn btn-default{!! ($default == 'user') ? ' active' : ''  !!}">
                <input name="checkout_to_type" value="user" type="radio"{!! ($default == 'user') ? ' checked="checked" class="active"' : ''  !!}><i class="fa fa-user"></i> {{ trans('general.user') }}
            </label>
            @endif
            @if ((isset($asset_select)) && ($asset_select!='false'))
            <label class="btn btn-default{!! ($default == 'asset') ? ' active' : ''  !!}">
                <input name="checkout_to_type" value="asset" type="radio"{!! ($default == 'asset') ? ' checked="checked" class="active"' : ''  !!}><i class="fa fa-barcode"></i> {{ trans('general.asset') }}
            </label>
            @endif
            @if ((isset($location_select)) && ($location_select!='false'))
            <label class="btn btn-default{!! ($default == 'location') ? ' active' : ''  !!}">
                <input name="checkout_to_type" value="location" type="radio"{!! ($default == 'location') ? ' checked="checked" class="active"' : ''  !!}><i class="fa fa-map-marker"></i> {{ trans('general.location') }}
            </label>
            @endif

            {!! $errors->first('checkout_to_type', '<span class="alert-msg"><i class="fa fa-times"></i> :message</span>') !!}
        </div>
    </div>
</div>
