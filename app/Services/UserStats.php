<?php
namespace App\Services;

use Terranet\Administrator\Contracts\Services\Widgetable;

class UserStats implements Widgetable
{
    protected $user;

    protected $total;

    protected $published;

    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Widget contents
     *
     * @return mixed
     */
    public function render()
    {
        return view('admin.users.stats')->with([
            'total'     => $this->total(),
            'published' => $this->published(),
            'draft'     => $this->draft(),
            'user'      => $this->user
        ]);
    }

    private function total()
    {
        if (null === $this->total) {
            $this->total = $this->user->posts()->count();
        }

        return $this->total;
    }

    private function published()
    {
        if (null === $this->published) {
            $this->published = $this->user->posts()->wherePublished(1)->count();
        }

        return $this->published;
    }

    private function draft()
    {
        return $this->total() - $this->published();
    }
}
