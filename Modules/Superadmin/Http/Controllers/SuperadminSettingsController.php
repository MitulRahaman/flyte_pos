<?php

namespace Modules\Superadmin\Http\Controllers;

use App\System;
use GuzzleHttp\Client;
use App\Utils\BusinessUtil;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class SuperadminSettingsController extends Controller
{
    /**
     * All Utils instance.
     */
    protected $businessUtil;

    protected $mailDrivers;

    protected $backupDisk;

    public function __construct(BusinessUtil $businessUtil)
    {
        $this->businessUtil = $businessUtil;

        $this->mailDrivers = [
            'smtp' => 'SMTP',
            'sendmail' => 'Sendmail',
            'mailgun' => 'Mailgun',
            'mandrill' => 'Mandrill',
            'ses' => 'SES',
            'sparkpost' => 'Sparkpost',
        ];

        $this->backupDisk = ['local' => 'Local', 'dropbox' => 'Dropbox'];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return Response
     */
    public function edit()
    {
        if (! auth()->user()->can('superadmin')) {
            abort(403, 'Unauthorized action.');
        }

        $settings = System::pluck('value', 'key');
        $currencies = $this->businessUtil->allCurrencies();

        $superadmin_version = System::getProperty('superadmin_version');
        $is_demo = env('APP_ENV') == 'demo' ? true : false;

        $default_values = [
            'APP_NAME' => env('APP_NAME'),
            'APP_TITLE' => env('APP_TITLE'),
            'APP_LOCALE' => env('APP_LOCALE'),
            'MAIL_MAILER' => $is_demo ? null : env('MAIL_MAILER'),
            'MAIL_HOST' => $is_demo ? null : env('MAIL_HOST'),
            'MAIL_PORT' => $is_demo ? null : env('MAIL_PORT'),
            'MAIL_USERNAME' => $is_demo ? null : env('MAIL_USERNAME'),
            'MAIL_PASSWORD' => $is_demo ? null : env('MAIL_PASSWORD'),
            'MAIL_ENCRYPTION' => $is_demo ? null : env('MAIL_ENCRYPTION'),
            'MAIL_FROM_ADDRESS' => $is_demo ? null : env('MAIL_FROM_ADDRESS'),
            'MAIL_FROM_NAME' => $is_demo ? null : env('MAIL_FROM_NAME'),
            'STRIPE_PUB_KEY' => $is_demo ? null : env('STRIPE_PUB_KEY'),
            'STRIPE_SECRET_KEY' => $is_demo ? null : env('STRIPE_SECRET_KEY'),
            'PAYPAL_MODE' => env('PAYPAL_MODE'),
            'PAYPAL_CLIENT_ID' => $is_demo ? null : env('PAYPAL_CLIENT_ID'),
            'PAYPAL_APP_SECRET' => $is_demo ? null : env('PAYPAL_APP_SECRET'),
            'BACKUP_DISK' => env('BACKUP_DISK'),
            'DROPBOX_ACCESS_TOKEN' => $is_demo ? null : env('DROPBOX_ACCESS_TOKEN'),
            'RAZORPAY_KEY_ID' => $is_demo ? null : env('RAZORPAY_KEY_ID'),
            'RAZORPAY_KEY_SECRET' => $is_demo ? null : env('RAZORPAY_KEY_SECRET'),

            'PESAPAL_CONSUMER_KEY' => $is_demo ? null : env('PESAPAL_CONSUMER_KEY'),
            'PESAPAL_CONSUMER_SECRET' => $is_demo ? null : env('PESAPAL_CONSUMER_SECRET'),
            'PESAPAL_LIVE' => $is_demo ? null : env('PESAPAL_LIVE'),
            'PUSHER_APP_ID' => $is_demo ? null : env('PUSHER_APP_ID'),
            'PUSHER_APP_KEY' => $is_demo ? null : env('PUSHER_APP_KEY'),
            'PUSHER_APP_SECRET' => $is_demo ? null : env('PUSHER_APP_SECRET'),
            'PUSHER_APP_CLUSTER' => $is_demo ? null : env('PUSHER_APP_CLUSTER'),
            'GOOGLE_MAP_API_KEY' => $is_demo ? null : env('GOOGLE_MAP_API_KEY'),
            'ALLOW_REGISTRATION' => $is_demo ? null : env('ALLOW_REGISTRATION'),
            'PAYSTACK_PUBLIC_KEY' => $is_demo ? null : env('PAYSTACK_PUBLIC_KEY'),
            'PAYSTACK_SECRET_KEY' => $is_demo ? null : env('PAYSTACK_SECRET_KEY'),
            'FLUTTERWAVE_PUBLIC_KEY' => $is_demo ? null : env('FLUTTERWAVE_PUBLIC_KEY'),
            'FLUTTERWAVE_SECRET_KEY' => $is_demo ? null : env('FLUTTERWAVE_SECRET_KEY'),
            'FLUTTERWAVE_ENCRYPTION_KEY' => $is_demo ? null : env('FLUTTERWAVE_ENCRYPTION_KEY'),
            
            'APPLICATION_NAME' => $is_demo ? null : env('APPLICATION_NAME'),
            'CONTACT_PERSON' => $is_demo ? null : env('CONTACT_PERSON'),
            'CONTACT_EMAIL' => $is_demo ? null : env('CONTACT_EMAIL'),
            'COUNTRY' => $is_demo ? null : env('COUNTRY'),
            'BUSINESS_TYPE' => $is_demo ? null : env('BUSINESS_TYPE'),
            'IS_USE_SHIPPING_METHOD' => $is_demo ? null : env('IS_USE_SHIPPING_METHOD'),
            'PRODUCT_NAME' => $is_demo ? null : env('PRODUCT_NAME'),
            'PRODUCT_PROFILE' => $is_demo ? null : env('PRODUCT_PROFILE'),
            'CURRENCY' => $is_demo ? null : env('CURRENCY'),
            'FLYTE_APP_KEY' => $is_demo ? null : env('FLYTE_APP_KEY'),
            'TRANSACTION_TYPE' => $is_demo ? null : env('TRANSACTION_TYPE'),
            'SUCCESS_CATEGORY' => $is_demo ? null : env('SUCCESS_CATEGORY'),
            'SUCCESS_URL' => $is_demo ? null : env('SUCCESS_URL'),
            'FAIL_CATEGORY' => $is_demo ? null : env('FAIL_CATEGORY'),
            'FAIL_URL' => $is_demo ? null : env('FAIL_URL'),
            'CANCEL_CATEGORY' => $is_demo ? null : env('CANCEL_CATEGORY'),
            'CANCEL_URL' => $is_demo ? null : env('CANCEL_URL'),
            'IPN_CATEGORY' => $is_demo ? null : env('IPN_CATEGORY'),
            'IPN_URL' => $is_demo ? null : env('IPN_URL'),
        ];
        $mail_drivers = $this->mailDrivers;

        $config_languages = config('constants.langs');
        $languages = [];
        foreach ($config_languages as $key => $value) {
            $languages[$key] = $value['full_name'];
        }
        $backup_disk = $this->backupDisk;

        $cron_job_command = $this->businessUtil->getCronJobCommand();

        return view('superadmin::superadmin_settings.edit')
            ->with(compact(
                'currencies',
                'settings',
                'superadmin_version',
                'mail_drivers',
                'languages',
                'default_values',
                'backup_disk',
                'cron_job_command'
            ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function update(Request $request)
    {
        if (! auth()->user()->can('superadmin')) {
            abort(403, 'Unauthorized action.');
        }
        
        //Disable .ENV settings in demo
        if (config('app.env') == 'demo') {
            $output = ['success' => 0,
                'msg' => 'Feature disabled in demo!!',
            ];

            return back()->with('status', $output);
        }
       
        if($request['FLYTE_APP_KEY'] != env('FLYTE_APP_KEY')) {
            //api calling start
             
            $data = [
                'application' => [
                'name' => $request['APPLICATION_NAME'],
                'contact_person_name' => $request['CONTACT_PERSON'],
                'contact_person_email' => $request['CONTACT_EMAIL'],
                'country' => $request['COUNTRY'],
                'business_type_name' => $request['BUSINESS_TYPE'],
                'is_use_shipping_method' => false,
                'product_name' => $request['PRODUCT_NAME'],
                'product_profile_name' => $request['PRODUCT_PROFILE'],
            ],
            'config' => [
                'currency' => $request['CURRENCY'],
            ],
            'application_key' => [
                'key' => $request['FLYTE_APP_KEY'],
            ],
            'business_category_types' => [
                [
                    'transaction_type' => 'Online',
                    'transaction_urls' => [
                        [
                            'category' => $request['SUCCESS_CATEGORY'],
                            'url' => $request['SUCCESS_URL'],
                        ],
                        [
                            'category' => $request['FAIL_CATEGORY'],
                            'url' => $request['FAIL_URL'],
                        ],
                        [
                            'category' => $request['CANCEL_CATEGORY'],
                            'url' => $request['CANCEL_URL'],
                        ],
                        [
                            'category' => $request['IPN_CATEGORY'],
                            'url' => $request['IPN_URL'],
                        ],
                    ],
                ],
            ],
        ];
        
            $apiEndpoint = 'https://flytepay.com/api/app-register';
            $client = new Client();
            
            try {
                $response = $client->post($apiEndpoint, [
                    'json' => $data,
                    'headers' => [
                        'Content-Type' => 'application/json',
                        'Api-Secret-Key' => 'flytesolutionpay',
                    ],
                ]);
                
                if ($response->getStatusCode() >= 200 && $response->getStatusCode() < 300) {
                    $system_settings = $request->only(['app_currency_id', 'invoice_business_name', 'email', 'invoice_business_landmark', 'invoice_business_zip', 'invoice_business_state', 'invoice_business_city', 'invoice_business_country', 'package_expiry_alert_days', 'superadmin_register_tc', 'welcome_email_subject', 'welcome_email_body', 'additional_js', 'additional_css', 'offline_payment_details']);
    
                    //Checkboxes
                    $checkboxes = ['enable_business_based_username', 'superadmin_enable_register_tc', 'allow_email_settings_to_businesses', 'enable_new_business_registration_notification', 'enable_new_subscription_notification', 'enable_welcome_email', 'enable_offline_payment'];
                    $input = $request->input();
                    foreach ($checkboxes as $checkbox) {
                        $system_settings[$checkbox] = ! empty($input[$checkbox]) ? 1 : 0;
                    }
        
                    foreach ($system_settings as $key => $setting) {
                        System::updateOrCreate(
                            ['key' => $key],
                            ['value' => $setting]
                                    );
                    }
                    
                   
        
                    $env_settings = $request->only(['APP_NAME', 'APP_TITLE',
                        'APP_LOCALE', 'MAIL_MAILER', 'MAIL_HOST', 'MAIL_PORT',
                        'MAIL_USERNAME', 'MAIL_PASSWORD', 'MAIL_ENCRYPTION',
                        'MAIL_FROM_ADDRESS', 'MAIL_FROM_NAME', 'STRIPE_PUB_KEY',
                        'STRIPE_SECRET_KEY', 'PAYPAL_MODE',
                        'PAYPAL_CLIENT_ID', 'PAYPAL_APP_SECRET',
                        'BACKUP_DISK', 'DROPBOX_ACCESS_TOKEN',
                        'RAZORPAY_KEY_ID', 'RAZORPAY_KEY_SECRET',
                        'PESAPAL_CONSUMER_KEY', 'PESAPAL_CONSUMER_SECRET', 'PESAPAL_LIVE',
                        'PUSHER_APP_ID', 'PUSHER_APP_KEY', 'PUSHER_APP_SECRET',
                        'PUSHER_APP_CLUSTER', 'GOOGLE_MAP_API_KEY', 'PAYSTACK_SECRET_KEY',
                        'PAYSTACK_PUBLIC_KEY', 'FLUTTERWAVE_PUBLIC_KEY',
                        'FLUTTERWAVE_SECRET_KEY', 'FLUTTERWAVE_ENCRYPTION_KEY', 
                        
                        'APPLICATION_NAME', 'CONTACT_PERSON', 'CONTACT_EMAIL',
                        'COUNTRY', 'BUSINESS_TYPE', 'IS_USE_SHIPPING_METHOD',
                        'PRODUCT_NAME', 'PRODUCT_PROFILE', 'CURRENCY',
                        'FLYTE_APP_KEY', 'TRANSACTION_TYPE', 'SUCCESS_CATEGORY',
                        'SUCCESS_URL', 'FAIL_CATEGORY', 'FAIL_URL', 'CANCEL_CATEGORY',
                        'CANCEL_URL', 'IPN_CATEGORY', 'IPN_URL',
                        
                        'MAPBOX_ACCESS_TOKEN',
                    ]);
                    
                    
        
                    $env_settings['ALLOW_REGISTRATION'] = ! empty($request->input('ALLOW_REGISTRATION')) ? 'true' : 'false';
                    $env_settings['BROADCAST_DRIVER'] = 'pusher';
        
                    $found_envs = [];
                    $env_path = base_path('.env');
                    $env_lines = file($env_path);
                    foreach ($env_settings as $index => $value) {
                        foreach ($env_lines as $key => $line) {
                            //Check if present then replace it.
                            if (strpos($line, $index) !== false) {
                                $env_lines[$key] = $index.'="'.$value.'"'.PHP_EOL;
        
                                $found_envs[] = $index;
                            }
                        }
                    }
        
                    //Add the missing env settings
                    $missing_envs = array_diff(array_keys($env_settings), $found_envs);
                    if (! empty($missing_envs)) {
                        $missing_envs = array_values($missing_envs);
                        foreach ($missing_envs as $k => $key) {
                            if ($k == 0) {
                                $env_lines[] = PHP_EOL.$key.'="'.$env_settings[$key].'"'.PHP_EOL;
                            } else {
                                $env_lines[] = $key.'="'.$env_settings[$key].'"'.PHP_EOL;
                            }
                        }
                    }
        
                    $env_content = implode('', $env_lines);
        
                    if (is_writable($env_path) && file_put_contents($env_path, $env_content)) {
                        $output = ['success' => 1,
                            'msg' => __('lang_v1.success'),
                        ];
                    } else {
                        $output = ['success' => 0, 'msg' => 'Some setting could not be saved, make sure .env file has 644 permission & owned by www-data user'];
                    }
                    
                return redirect()
                ->action([\Modules\Superadmin\Http\Controllers\SuperadminSettingsController::class, 'edit'])
                ->with('status', $output);
                    
                } else {
                    return redirect()->back()->with('error', 'Failed to save flytepay data. Try again.');
                }
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Invalid flytepay payment input. Try again.');
            }
        
        //api calling end
            
        } else {
            try {

                $system_settings = $request->only(['app_currency_id', 'invoice_business_name', 'email', 'invoice_business_landmark', 'invoice_business_zip', 'invoice_business_state', 'invoice_business_city', 'invoice_business_country', 'package_expiry_alert_days', 'superadmin_register_tc', 'welcome_email_subject', 'welcome_email_body', 'additional_js', 'additional_css', 'offline_payment_details']);
    
                //Checkboxes
                $checkboxes = ['enable_business_based_username', 'superadmin_enable_register_tc', 'allow_email_settings_to_businesses', 'enable_new_business_registration_notification', 'enable_new_subscription_notification', 'enable_welcome_email', 'enable_offline_payment'];
                $input = $request->input();
                foreach ($checkboxes as $checkbox) {
                    $system_settings[$checkbox] = ! empty($input[$checkbox]) ? 1 : 0;
                }
    
                foreach ($system_settings as $key => $setting) {
                    System::updateOrCreate(
                        ['key' => $key],
                        ['value' => $setting]
                                );
                }
                
               
    
                $env_settings = $request->only(['APP_NAME', 'APP_TITLE',
                    'APP_LOCALE', 'MAIL_MAILER', 'MAIL_HOST', 'MAIL_PORT',
                    'MAIL_USERNAME', 'MAIL_PASSWORD', 'MAIL_ENCRYPTION',
                    'MAIL_FROM_ADDRESS', 'MAIL_FROM_NAME', 'STRIPE_PUB_KEY',
                    'STRIPE_SECRET_KEY', 'PAYPAL_MODE',
                    'PAYPAL_CLIENT_ID', 'PAYPAL_APP_SECRET',
                    'BACKUP_DISK', 'DROPBOX_ACCESS_TOKEN',
                    'RAZORPAY_KEY_ID', 'RAZORPAY_KEY_SECRET',
                    'PESAPAL_CONSUMER_KEY', 'PESAPAL_CONSUMER_SECRET', 'PESAPAL_LIVE',
                    'PUSHER_APP_ID', 'PUSHER_APP_KEY', 'PUSHER_APP_SECRET',
                    'PUSHER_APP_CLUSTER', 'GOOGLE_MAP_API_KEY', 'PAYSTACK_SECRET_KEY',
                    'PAYSTACK_PUBLIC_KEY', 'FLUTTERWAVE_PUBLIC_KEY',
                    'FLUTTERWAVE_SECRET_KEY', 'FLUTTERWAVE_ENCRYPTION_KEY', 
                    
                    'APPLICATION_NAME', 'CONTACT_PERSON', 'CONTACT_EMAIL',
                    'COUNTRY', 'BUSINESS_TYPE', 'IS_USE_SHIPPING_METHOD',
                    'PRODUCT_NAME', 'PRODUCT_PROFILE', 'CURRENCY',
                    'FLYTE_APP_KEY', 'TRANSACTION_TYPE', 'SUCCESS_CATEGORY',
                    'SUCCESS_URL', 'FAIL_CATEGORY', 'FAIL_URL', 'CANCEL_CATEGORY',
                    'CANCEL_URL', 'IPN_CATEGORY', 'IPN_URL',
                    
                    'MAPBOX_ACCESS_TOKEN',
                ]);
                
                
    
                $env_settings['ALLOW_REGISTRATION'] = ! empty($request->input('ALLOW_REGISTRATION')) ? 'true' : 'false';
                $env_settings['BROADCAST_DRIVER'] = 'pusher';
    
                $found_envs = [];
                $env_path = base_path('.env');
                $env_lines = file($env_path);
                foreach ($env_settings as $index => $value) {
                    foreach ($env_lines as $key => $line) {
                        //Check if present then replace it.
                        if (strpos($line, $index) !== false) {
                            $env_lines[$key] = $index.'="'.$value.'"'.PHP_EOL;
    
                            $found_envs[] = $index;
                        }
                    }
                }
    
                //Add the missing env settings
                $missing_envs = array_diff(array_keys($env_settings), $found_envs);
                if (! empty($missing_envs)) {
                    $missing_envs = array_values($missing_envs);
                    foreach ($missing_envs as $k => $key) {
                        if ($k == 0) {
                            $env_lines[] = PHP_EOL.$key.'="'.$env_settings[$key].'"'.PHP_EOL;
                        } else {
                            $env_lines[] = $key.'="'.$env_settings[$key].'"'.PHP_EOL;
                        }
                    }
                }
    
                $env_content = implode('', $env_lines);
    
                if (is_writable($env_path) && file_put_contents($env_path, $env_content)) {
                    $output = ['success' => 1,
                        'msg' => __('lang_v1.success'),
                    ];
                } else {
                    $output = ['success' => 0, 'msg' => 'Some setting could not be saved, make sure .env file has 644 permission & owned by www-data user'];
                }
            } catch (\Exception $e) {
                \Log::emergency('File:'.$e->getFile().'Line:'.$e->getLine().'Message:'.$e->getMessage());
    
                $output = ['success' => 0,
                    'msg' => __('messages.something_went_wrong'),
                ];
            }
        
            return redirect()
                ->action([\Modules\Superadmin\Http\Controllers\SuperadminSettingsController::class, 'edit'])
                ->with('status', $output);
            }
    }
}
