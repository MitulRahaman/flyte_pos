
        <div class="relative rounded bg-[#F2F6FF] px-5 py-10 shadow-[-4px_4px_15px_5px_rgba(0,0,0,0.05)] border-2 border-[#E2E2E2] hover:border-[black] duration-300"  style="background-color: #E6FDEF;">
          <div class="text-center font-poppins mb-5">
                <div class="box box-success hvr-grow-shadow">
                    <div class="box-header with-border text-center">
                        <div class="flex items-center justify-center">
                            <h2 class="box-title" style="font-size: 1.6rem; margin-right:6px; color: #2678BD">
                            {{$package->name}}
                            </h2>
                            
                            @if($package->mark_package_as_popular == 1)
                                <div class="pull-right" style="font-size: 0.8rem; background-color: #00ff00; border-radius: 0.5rem; font-size: 0.7rem;">
                                    <span style="padding: 0.7rem 0.6rem;">
                                        @lang('superadmin::lang.popular')
                                    </span>
                                </div>
                            @endif
                        </div>
                        
                        <div>
                            <h2 class="text-center" style="font-size: 1.8rem;">
                            @php
                                $interval_type = !empty($intervals[$package->interval]) ? $intervals[$package->interval] : __('lang_v1.' . $package->interval);
                            @endphp
                                @if($package->price != 0)
                                    <span class="display_currency" data-currency_symbol="true">
                                        ৳ {{$package->price}}
                                    </span>
                
                                    <small>
                                        / @if($package->interval_count == 1) 
                                            {{$interval_type}}
                                        @else
                                            {{$package->interval_count}} {{$interval_type}}
                                            @endif
                                    </small>
                                @else
                                    @lang('superadmin::lang.free_for_duration', ['duration' => $package->interval_count . ' ' . $interval_type])
                                @endif
                            </h2>
                        </div>
                        
                        <h4 class="box-title" style="font-size: 1.1rem; margin-bottom: 10px;">
                            
                            {{$package->description}}
                        </h4>
                            
                    </div>
                    
                    <!-- /.box-header -->
                    <div class="box-body text-center mb-6">
            
                        <i class="fa fa-check text-success pb-3"></i>
                        @if($package->location_count == 0)
                            @lang('superadmin::lang.unlimited')
                        @else
                            {{$package->location_count}}
                        @endif
            
                        @lang('business.business_locations')
                        <br/>
            
                        <i class="fa fa-check text-success pb-3"></i>
                        @if($package->user_count == 0)
                            @lang('superadmin::lang.unlimited')
                        @else
                            {{$package->user_count}}
                        @endif
            
                        @lang('superadmin::lang.users')
                        <br/>
            
                        <i class="fa fa-check text-success pb-3"></i>
                        @if($package->product_count == 0)
                            @lang('superadmin::lang.unlimited')
                        @else
                            {{$package->product_count}}
                        @endif
            
                        @lang('superadmin::lang.products')
                        <br/>
            
                        <i class="fa fa-check text-success pb-3"></i>
                        @if($package->invoice_count == 0)
                            @lang('superadmin::lang.unlimited')
                        @else
                            {{$package->invoice_count}}
                        @endif
            
                        @lang('superadmin::lang.invoices')
                        <br/>
            
                        @if(!empty($package->custom_permissions))
                            @foreach($package->custom_permissions as $permission => $value)
                                @isset($permission_formatted[$permission])
                                    <i class="fa fa-check text-success pb-3"></i>
                                    {{$permission_formatted[$permission]}}
                                    <br/>
                                @endisset
                            @endforeach
                        @endif
            
                        @if($package->trial_days != 0)
                            <i class="fa fa-check text-success pb-3"></i>
                            {{$package->trial_days}} @lang('superadmin::lang.trial_days')
                            <br/>
                        @endif
                        
                    </div>
                    <!-- /.box-body -->
            
                    <div class="box-footer bg-gray disabled flex justify-center">
                        @if($package->enable_custom_link == 1)
                            <a href="{{$package->custom_link}}">
                                <button type="button" class="btn text-xs btn-block bg-black text-white font-roboto tracking-wider flex items-center gap-2 capitalize rounded-xl p-3 active:scale-95 duration-300">
                                {{$package->custom_link_text}}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16" fill="none">
                                        <path d="M18.7071 8.70711C19.0976 8.31658 19.0976 7.68342 18.7071 7.29289L12.3431 0.928932C11.9526 0.538408 11.3195 0.538408 10.9289 0.928932C10.5384 1.31946 10.5384 1.95262 10.9289 2.34315L16.5858 8L10.9289 13.6569C10.5384 14.0474 10.5384 14.6805 10.9289 15.0711C11.3195 15.4616 11.9526 15.4616 12.3431 15.0711L18.7071 8.70711ZM0 9H18V7H0V9Z" fill="#fff" />
                                    </svg>
                                </button>
                            </a>
                        @else
                            @if(isset($action_type) && $action_type == 'register')
                                <a href="{{ route('business.getRegister') }}?package={{$package->id}}">
                                    <button type="button" class="btn text-xs btn-block bg-black text-white font-roboto tracking-wider flex items-center gap-2 capitalize rounded-xl p-3 active:scale-95 duration-300">
                                        @if($package->price != 0)
                                            @lang('superadmin::lang.register_subscribe')
                                        @else
                                            @lang('superadmin::lang.register_free')
                                        @endif
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16" fill="none">
                                            <path d="M18.7071 8.70711C19.0976 8.31658 19.0976 7.68342 18.7071 7.29289L12.3431 0.928932C11.9526 0.538408 11.3195 0.538408 10.9289 0.928932C10.5384 1.31946 10.5384 1.95262 10.9289 2.34315L16.5858 8L10.9289 13.6569C10.5384 14.0474 10.5384 14.6805 10.9289 15.0711C11.3195 15.4616 11.9526 15.4616 12.3431 15.0711L18.7071 8.70711ZM0 9H18V7H0V9Z" fill="#fff" />
                                        </svg>
                                    </button>
                                </a>
                            @else
                                <a href="{{action([\Modules\Superadmin\Http\Controllers\SubscriptionController::class, 'pay'], [$package->id])}}">
                                    <button type="button" class="btn text-xs btn-block bg-black text-white font-roboto tracking-wider flex items-center gap-2 capitalize rounded-xl p-3 active:scale-95 duration-300">
                                        @if($package->price != 0)
                                            @lang('superadmin::lang.pay_and_subscribe')
                                        @else
                                            @lang('superadmin::lang.subscribe')
                                        @endif
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16" fill="none">
                                            <path d="M18.7071 8.70711C19.0976 8.31658 19.0976 7.68342 18.7071 7.29289L12.3431 0.928932C11.9526 0.538408 11.3195 0.538408 10.9289 0.928932C10.5384 1.31946 10.5384 1.95262 10.9289 2.34315L16.5858 8L10.9289 13.6569C10.5384 14.0474 10.5384 14.6805 10.9289 15.0711C11.3195 15.4616 11.9526 15.4616 12.3431 15.0711L18.7071 8.70711ZM0 9H18V7H0V9Z" fill="#fff" />
                                        </svg>
                                    </button>
                                </a>
                            @endif
                        @endif
                    </div>
                </div>
                <!-- /.box -->
            
          </div>
        </div>
    
@if($count%3 == 0)
    <div class="clearfix"></div>
@endif