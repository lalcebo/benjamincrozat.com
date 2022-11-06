<?php

namespace App\Nova\Metrics;

use App\Models\Banner;
use Laravel\Nova\Metrics\Value;
use Laravel\Nova\Metrics\ValueResult;
use Laravel\Nova\Http\Requests\NovaRequest;

class ActiveBannersCount extends Value
{
    /**
     * @return mixed
     */
    public function calculate(NovaRequest $request)
    {
        return new ValueResult(Banner::active()->count());
    }
}
