<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Laracasts\Flash\Flash;
use Stripe\Customer;
use Stripe\Plan;
use Stripe\Stripe;

class PaymentController extends Controller
{
    public function __invoke(Request $request){
        /** @var User */
        $user = auth()->user();
        return view('payment.index')->with('user', $user);
    }

    public function billingPortal(){
        /** @var User */
        $user = auth()->user();
        return $user->redirectToBillingPortal(
            route('payment.index')
        );
    }

    public function addSubscription($subscriptionId){
        /** @var User */
        $user = auth()->user();
        if(count($user->getSubscriptions()) > 0){
            return redirect(route('payment.billingPortal'));
        }
        if(!$user->defaultPaymentMethod()){
            Flash::warning('Necesita establecer una tarjeta por defecto. Modifique o agregue una forma de pago por defecto');
            return redirect(route('payment.index'));
        }

        switch ($subscriptionId) {
            case 'lite':
                Flash::success('Plan Lite Seleccionado');
                $user->newSubscription('lite', 'price_1H5tMDJZGstCZdU3WiCuiKQK')->add();
                break;

            case 'lite-plus':
                Flash::success('Plan LitePlus Seleccionado');
                $user->newSubscription('lite', 'price_1H5tRaJZGstCZdU3ZmdC0cY3')->add();
                break;
            case 'basic':
                Flash::warning('Plan Basic Seleccionado');
                // $user->newSubscription('lite', 'price_1H5tRaJZGstCZdU3ZmdC0cY3')->add();
                break;

            default:
                Flash::error('Failed To Enable Subscription');
                break;
        }
        return redirect(route('payment.index'));

    }

}
