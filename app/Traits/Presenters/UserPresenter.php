<?php


namespace App\Traits\Presenters;


use Carbon\Carbon;

trait UserPresenter
{
    public function presentEmail()
    {
        return link_to("mailto:" . ($e = $this->attributes['email']), $e);
    }

    public function presentGender()
    {
        return  \admin\output\label($this->attributes['gender'], 'bg-green');
    }

    public function presentRole()
    {
        return  \admin\output\label($this->attributes['role'], 'bg-light-blue');
    }

    public function presentPhone()
    {
        return ($p = $this->attributes['phone']) ? link_to("tel:{$p}", $p) : null;
    }

    public function presentActive()
    {
        return  \admin\output\label($this->attributes['active']);
    }

    public function presentBirthDate()
    {
        return ($d = $this->attributes['birth_date'])
            ? \admin\output\label(Carbon::parse($d)->toFormattedDateString(), 'bg-gray')
            : null;
    }
}
