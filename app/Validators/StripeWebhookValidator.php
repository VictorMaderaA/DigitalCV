<?php

namespace App\Validators;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Spatie\WebhookClient\SignatureValidator\SignatureValidator;
use Spatie\WebhookClient\WebhookConfig;
use Stripe\Event;
use Stripe\Exception\ApiErrorException;

use function Psy\debug;

class StripeWebhookValidator implements SignatureValidator
{
    public function isValid(Request $request, WebhookConfig $config): bool
    {
        try{
            $result = Event::retrieve($request->input('id'));
        }catch(ApiErrorException $e){
            Log::error('Failed to Retrive event for Signature Validation');
            return false;
        }
        return true;
    }
}
