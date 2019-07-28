<?php

namespace Mohamedsabil83\LaravelLoadmore;

use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

trait Loadmore
{
    public function loadmore($initial = 4, $loadMore = 16)
    {
        $page = (int) Paginator::resolveCurrentPage();
        $perPage = ($page == 1) ? $initial : $loadMore;
        $skip = ($page == 1) ? 0 : ($initial + ($loadMore * ($page - 2)));
        $items = $this->skip($skip)->take($perPage)->get();
        $total = $this->count() + $loadMore - $initial;

        return new LengthAwarePaginator(
            $items,
            $total,
            $loadMore,
            Paginator::resolveCurrentPage(),
            ['path' => Paginator::resolveCurrentPath()]
        );
    }

    public function scopeLoadmore($query, $initial = 4, $loadMore = 16)
    {
        return $this->loadmore($initial, $loadMore);
    }
}
