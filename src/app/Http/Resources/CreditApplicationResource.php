<?php

namespace App\Http\Resources;

use App\Models\Bank;
use Illuminate\Http\Request;
use App\Http\Resources\BankResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CreditApplicationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'dealer' => $this->dealer,
            'contact_person' => $this->contact_person,
            'summ' => $this->summ,
            'credit_term' => $this->credit_term,
            'interest_rate' => $this->interest_rate,
            'reason' => $this->reason,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'bank' => BankResource::make(Bank::find($this->bank_id))
        ];
    }

}
