<?php

namespace App;

use App\Models\Resume;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;
use Spatie\Permission\Traits\HasRoles;
use Stripe\Customer;
use Stripe\Stripe;

class User extends Authenticatable
{
    use Notifiable;
    use Billable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function resumes()
    {
        return $this->hasMany(Resume::class, 'user_id', 'id');
    }


    public function getStripeCustomer(){
        Stripe::setApiKey(env('STRIPE_SECRET'));
        return $this->createOrGetStripeCustomer();
    }

    public function getSubscriptions(){
        $this->getStripeCustomer();
        return Customer::retrieve($this->stripe_id)->subscriptions->data;
    }

    public function getSubscriptionLevel(){
        if(count($subscription = $this->getSubscriptions()) !== 1){
            return null;
        }
        //TODO- REPLACE STATIC PRODUCTS
        switch ($subscription[0]->plan->product) {
            case 'prod_HfDn78h6rNx2zj': //LITE
                return 1;
                break;
            case 'prod_HfDtBZkL4mR99j': //LITEPLUS
                return 2;
                break;
            case 'ADSDA': //BASIC
                return 3;
                break;

            default:
                return null;
                break;
        }
    }
}
