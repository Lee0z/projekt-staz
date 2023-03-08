<?php

namespace App\Policies;

use App\Models\User;

class CustomerPolicy
{
    public function __construct()
    {
        //
    }

    public function view(User $user, Customer $customer)
    {
        return $user->id === $customer->user_id;
    }

    public function show(Customer $customer)
    {
        $this->authorize('view', $customer);
    }
}
