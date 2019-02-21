<?php

namespace App;

use App\Services\Money;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class House extends Model
{

    public function agent() : BelongsTo
    {
        return $this->belongsTo(Agent::class, 'agentID');
    }

    public function getAmountAttribute(): string
    {
        return Money::shorten($this->getParsedPriceAttribute());
    }

    protected function getParsedPriceAttribute()
    {
        $trimedPrice = strip_tags($this->price);
        $trimedPrice = str_replace('.', '', $trimedPrice);
        $trimedPrice = str_replace(',', '', $trimedPrice);
        $trimedPrice = str_replace(';', '', $trimedPrice);
        $trimedPrice = str_replace(':', '', $trimedPrice);
        $trimedPrice = str_replace(' ', '', $trimedPrice);
        $trimedPrice = str_replace('|', '', $trimedPrice);

        return $trimedPrice;
    }

    public function getPriceWithCurrencyAttribute(): string
    {
        return setting('payments.currency_symbol') . ' ' . $this->getAmountAttribute();
    }

    public function getAdditionalPicturesAttribute()
    {
        return json_decode($this->pictures);
    }

    public function getSubPriceAttribute(): string
    {
        return !empty($this->perFeet)
            ? setting('payments.currency_symbol') . ' ' . $this->perFeet
            : '';
    }
}
