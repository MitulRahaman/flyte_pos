<div class="pos-tab-content">
    <div class="row">
        <div class="col-xs-6">
            <div class="form-group">
                <label>
                {!! Form::checkbox('enable_offline_payment', 1,!empty($settings["enable_offline_payment"]), 
                [ 'class' => 'input-icheck']); !!}
                @lang('superadmin::lang.enable_offline_payment')
                </label>
            </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
                {!! Form::label('offline_payment_details', __('superadmin::lang.offline_payment_details') . ':') !!}
                @show_tooltip(__('superadmin::lang.offline_payment_details_tooltip'))
                {!! Form::textarea('offline_payment_details', !empty($settings["offline_payment_details"]) ? $settings["offline_payment_details"] : null, ['class' => 'form-control','placeholder' => __('superadmin::lang.offline_payment_details'), 'rows' => 3]); !!}
            </div>
        </div>
    </div>
    <div class="row">
    	<h4>Stripe:</h4>
    	<div class="col-xs-4">
            <div class="form-group">
            	{!! Form::label('STRIPE_PUB_KEY', __('superadmin::lang.stripe_pub_key') . ':') !!}
            	{!! Form::text('STRIPE_PUB_KEY', $default_values['STRIPE_PUB_KEY'], ['class' => 'form-control','placeholder' => __('superadmin::lang.stripe_pub_key')]); !!}
            </div>
        </div>
        <div class="col-xs-4">
            <div class="form-group">
            	{!! Form::label('STRIPE_SECRET_KEY', __('superadmin::lang.stripe_secret_key') . ':') !!}
            	{!! Form::text('STRIPE_SECRET_KEY', $default_values['STRIPE_SECRET_KEY'], ['class' => 'form-control','placeholder' => __('superadmin::lang.stripe_secret_key')]); !!}
            </div>
        </div>

        <div class="clearfix"></div>
        
        <h4>Paypal:</h4>
        <div class="col-xs-6">
            <div class="form-group">
            	{!! Form::label('PAYPAL_MODE', __('superadmin::lang.paypal_mode') . ':') !!}
            	{!! Form::select('PAYPAL_MODE',['live' => 'Live', 'sandbox' => 'Sandbox'],  $default_values['PAYPAL_MODE'], ['class' => 'form-control','placeholder' => __('messages.please_select')]); !!}
                <b><span class="text-danger">@lang('superadmin::lang.important')</span>@lang('superadmin::lang.paypal_info') </b>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-xs-4">
            <div class="form-group">
            	{!! Form::label('PAYPAL_CLIENT_ID', __('superadmin::lang.paypal_client_id') . ':') !!}
            	{!! Form::text('PAYPAL_CLIENT_ID', $default_values['PAYPAL_CLIENT_ID'], ['class' => 'form-control','placeholder' =>'Paypal client id']); !!}
            </div>
        </div>
        <div class="col-xs-4">
            <div class="form-group">
            	{!! Form::label('PAYPAL_APP_SECRET', __('superadmin::lang.paypal_aap_secret') . ':') !!}
            	{!! Form::text('PAYPAL_APP_SECRET', $default_values['PAYPAL_APP_SECRET'], ['class' => 'form-control','placeholder' =>'Paypal app secret']); !!}
            </div>
        </div>

        <div class="col-xs-4">
            <b>@lang('superadmin::lang.step_for_paypal') :</b><br/>
            1. @lang('superadmin::lang.login_to') <a href="https://developer.paypal.com/home" target="_blank">@lang('superadmin::lang.developer_account') </a>.<br/>
            @lang('superadmin::lang.paypal_step_2')<br/>
            @lang('superadmin::lang.paypal_step_3')<br/>
            @lang('superadmin::lang.paypal_step_4')<br/>
            @lang('superadmin::lang.paypal_step_5')<br/>
            @lang('superadmin::lang.paypal_step_6')<br/>
        </div>
        
        

        <div class="clearfix"></div>
        
        <h4>Razorpay: <small>(For INR India)</small></h4>
        <div class="col-xs-4">
            <div class="form-group">
                {!! Form::label('RAZORPAY_KEY_ID', 'Key ID:') !!}
                {!! Form::text('RAZORPAY_KEY_ID', $default_values['RAZORPAY_KEY_ID'], ['class' => 'form-control']); !!}
            </div>
        </div>
        <div class="col-xs-4">
            <div class="form-group">
                {!! Form::label('RAZORPAY_KEY_SECRET', 'Key Secret:') !!}
                {!! Form::text('RAZORPAY_KEY_SECRET', $default_values['RAZORPAY_KEY_SECRET'], ['class' => 'form-control']); !!}
            </div>
        </div>

        <div class="clearfix"></div>
        
        <h4>Pesapal: <small>(For KES currency)</small></h4>
        <div class="col-xs-4">
            <div class="form-group">
                {!! Form::label('PESAPAL_CONSUMER_KEY', 'Consumer Key:') !!}
                {!! Form::text('PESAPAL_CONSUMER_KEY', $default_values['PESAPAL_CONSUMER_KEY'], ['class' => 'form-control']); !!}
            </div>
        </div>
        <div class="col-xs-4">
            <div class="form-group">
                {!! Form::label('PESAPAL_CONSUMER_SECRET', 'Consumer Secret:') !!}
                {!! Form::text('PESAPAL_CONSUMER_SECRET', $default_values['PESAPAL_CONSUMER_SECRET'], ['class' => 'form-control']); !!}
            </div>
        </div>

        <div class="col-xs-4">
            <div class="form-group">
                {!! Form::label('PESAPAL_LIVE', 'Is Live?') !!}
                {!! Form::select('PESAPAL_LIVE',['false' => 'False', 'true' => 'True'],  $default_values['PESAPAL_LIVE'], ['class' => 'form-control']); !!}
            </div>
        </div>

        <div class="clearfix"></div>
        
        <h4>Paystack: <small>(For NGN Nigeria, GHS Ghana)</small></h4>
        <div class="col-xs-6">
            <div class="form-group">
                {!! Form::label('PAYSTACK_PUBLIC_KEY', 'Public key:') !!}
                {!! Form::text('PAYSTACK_PUBLIC_KEY', $default_values['PAYSTACK_PUBLIC_KEY'], ['class' => 'form-control']); !!}
            </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
                {!! Form::label('PAYSTACK_SECRET_KEY', 'Secret key:') !!}
                {!! Form::text('PAYSTACK_SECRET_KEY', $default_values['PAYSTACK_SECRET_KEY'], ['class' => 'form-control']); !!}
            </div>
        </div>

        <div class="clearfix"></div>
        
        <h4>Flutterwave:</h4>
        <div class="col-xs-4">
            <div class="form-group">
                {!! Form::label('FLUTTERWAVE_PUBLIC_KEY', 'Public key:') !!}
                {!! Form::text('FLUTTERWAVE_PUBLIC_KEY', $default_values['FLUTTERWAVE_PUBLIC_KEY'], ['class' => 'form-control']); !!}
            </div>
        </div>
        <div class="col-xs-4">
            <div class="form-group">
                {!! Form::label('FLUTTERWAVE_SECRET_KEY', 'Secret key:') !!}
                {!! Form::text('FLUTTERWAVE_SECRET_KEY', $default_values['FLUTTERWAVE_SECRET_KEY'], ['class' => 'form-control']); !!}
            </div>
        </div>
        <div class="col-xs-4">
            <div class="form-group">
                {!! Form::label('FLUTTERWAVE_ENCRYPTION_KEY', 'Encryption key:') !!}
                {!! Form::text('FLUTTERWAVE_ENCRYPTION_KEY', $default_values['FLUTTERWAVE_ENCRYPTION_KEY'], ['class' => 'form-control']); !!}
            </div>
        </div>
        <div class="col-xs-12 mt-0">
            <p class="help-block mt-0">
                <a href="https://support.flutterwave.com/en/articles/3632719-accepted-currencies" target="_blank">
                    @lang('superadmin::lang.flutterwave_help_text')
                </a>
            </p>
        </div>
        
        
        <!-- Flyte Pay Start -->
        <div class="clearfix"></div>
        
        <h4>Flyte Pay:</h4>
            <div class="col-md-10">
                
                <!-- Application Section -->
                <div class="form-group">
                    <label for="APPLICATION_NAME">Application Name:</label>
                    <input type="text" class="form-control" id="APPLICATION_NAME" name="APPLICATION_NAME" value="{!! $default_values['APPLICATION_NAME'] !!}" >
                </div>

                <div class="form-group">
                    <label for="CONTACT_PERSON">Contact Person Name:</label>
                    <input type="text" class="form-control" id="CONTACT_PERSON" name="CONTACT_PERSON" value="{!! $default_values['CONTACT_PERSON'] !!}"
                        >
                </div>

                <div class="form-group">
                    <label for="CONTACT_EMAIL">Contact Person Email:</label>
                    <input type="email" class="form-control" id="CONTACT_EMAIL" name="CONTACT_EMAIL" value="{!! $default_values['CONTACT_EMAIL'] !!}"
                        >
                </div>

                <div class="form-group">
                    <label for="COUNTRY">Country:</label>
                    <input type="text" class="form-control" id="COUNTRY" name="COUNTRY" value="{!! $default_values['COUNTRY'] !!}" >
                </div>

                <div class="form-group">
                    <label for="BUSINESS_TYPE">Business Type:</label>
                    <input type="text" class="form-control" id="BUSINESS_TYPE" name="BUSINESS_TYPE" value="{!! $default_values['BUSINESS_TYPE'] !!}"
                        >
                </div>

                <div class="form-group">
                    <label for="PRODUCT_NAME">Product Name:</label>
                    <input type="text" class="form-control" id="PRODUCT_NAME" name="PRODUCT_NAME" value="{!! $default_values['PRODUCT_NAME'] !!}"
                        >
                </div>

                <div class="form-group">
                    <label for="PRODUCT_PROFILE">Product Profile:</label>
                    <input type="text" class="form-control" id="PRODUCT_PROFILE" name="PRODUCT_PROFILE" value="{!! $default_values['PRODUCT_PROFILE'] !!}"
                        >
                </div>

                <div class="form-group">
                    <label for="CURRENCY">Currency:</label>
                    <input type="text" class="form-control" id="CURRENCY" name="CURRENCY" value="BDT" readonly>
                </div>

                <div class="form-group">
                    <label for="FLYTE_APP_KEY">Key:</label>
                    <input type="text" class="form-control" id="FLYTE_APP_KEY" name="FLYTE_APP_KEY" value="{!! $default_values['FLYTE_APP_KEY'] !!}" >
                </div>

                <div class="form-group">
                    <label for="TRANSACTION_TYPE">Transaction Type:</label>
                    <input type="text" class="form-control" id="TRANSACTION_TYPE" name="TRANSACTION_TYPE"
                        value="Subscription" readonly>
                </div>

                <h4>Response Type</h4>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="SUCCESS_CATEGORY">Category:</label>
                        <input type="text" class="form-control" id="SUCCESS_CATEGORY"
                            name="SUCCESS_CATEGORY"value="success" readonly>
                    </div>
                    <div class="form-group col-md-9">
                        <label for="SUCCESS_URL">Success URL:</label>
                        <input type="text" class="form-control" id="SUCCESS_URL" name="SUCCESS_URL" value="{!! $default_values['SUCCESS_URL'] !!}"
                            >
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="FAIL_CATEGORY">Category:</label>
                        <input type="text" class="form-control" id="FAIL_CATEGORY" name="FAIL_CATEGORY"
                            value="fail" readonly>
                    </div>
                    <div class="form-group col-md-9">
                        <label for="FAIL_URL">Failed URL:</label>
                        <input type="text" class="form-control" id="FAIL_URL" name="FAIL_URL" value="{!! $default_values['FAIL_URL'] !!}"
                            >
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="CANCEL_CATEGORY">Category:</label>
                        <input type="text" class="form-control" id="CANCEL_CATEGORY" name="CANCEL_CATEGORY"
                            value="cancel" readonly>
                    </div>
                    <div class="form-group col-md-9">
                        <label for="CANCEL_URL">Cancel URL:</label>
                        <input type="text" class="form-control" id="CANCEL_URL" name="CANCEL_URL" value="{!! $default_values['CANCEL_URL'] !!}"
                            >
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="IPN_CATEGORY">Category:</label>
                        <input type="text" class="form-control" id="IPN_CATEGORY" name="IPN_CATEGORY"
                            value="ipn" readonly>
                    </div>
                    <div class="form-group col-md-9">
                        <label for="IPN_URL">Ipn URL:</label>
                        <input type="text" class="form-control" id="IPN_URL" name="IPN_URL" value="{!! $default_values['IPN_URL'] !!}"
                            >
                    </div>
                </div>
            </div>
               
        <!-- Flyte Pay End -->
        
        
        <div class="col-xs-12">
            <br/>
            <p class="help-block"><i>@lang('superadmin::lang.payment_gateway_help')</i></p>
        </div>
    </div>
</div>