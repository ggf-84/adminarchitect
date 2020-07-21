<?php


namespace App\Traits\Columns;


use Carbon\Carbon;

trait UsersColumns
{
    public function columns()
    {
        return [
            'id',
            'info' => [
                'elements' => [
                    'name' => ['standalone' => true],
                    'email', 'gender',
                    'age' => ['output' => function($user) {
                        return $this->userAge($user);
                    }]
                ]
            ],
            'contacts' => ['phone'],
            'role', 'active'
        ];
    }

    private function userAge($user)
    {
        return ($d = $user->birth_date)
            ? Carbon::parse($d)->diffInYears()
            : null;
    }
}
